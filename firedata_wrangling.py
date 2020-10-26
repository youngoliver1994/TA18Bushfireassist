# load libraries
import re
import numpy
import shapefile
import pandas as pd
pd.options.mode.chained_assignment = None 

from shapely.geometry import Point
from shapely.geometry.polygon import Polygon

# read in both active fire datasets
active_fire1 = pd.read_csv("fire_archive_M6_157545.csv")
active_fire2 = pd.read_csv("fire_nrt_M6_157545.csv")

# append dataset 2 to dataset 1
active_fires = active_fire1.append(active_fire2, sort=False)

# reset the index
active_fires.reset_index(drop=True, inplace=True)

# drop unnecessary columns
active_fires = active_fires.drop(['brightness','scan','track','acq_date','acq_time','satellite','instrument','confidence',
                 'version','bright_t31','frp','daynight', 'type'], axis = 1) 
                 
# rename columns
active_fires.rename(columns = {'latitude':'Latitude', 'longitude':'Longitude'}, inplace = True) 

# insert a new column called Locality
active_fires.insert(2, 'Locality', "NA")

# read in the shapefile
sf = shapefile.Reader("./VIC_LOCALITY_POLYGON_shp")
recs = sf.records()         # records of localities in the shapefile
shapes = sf.shapes()        # shapes of localities in the shapefile

# initialise list to hold the latitude and longitude values
lon_lat = []

i = 0
while i < len(active_fire):
    lon_lat.append((active_fires.Longitude[i], active_fires.Latitude[i]))
    i = i + 1
    
n_shp = len(shapes)               # number of localities
n_rows = len(active_fires)        # number of rows in active_fire

for nshp in range(n_shp): 
    # for each shape in the shapefile, fill an array with the lon, lat points belonging to that shape
    pts = numpy.array(shapes[nshp].points)
    # create a polygon using those points to represent the area of the locality we are looking at
    polygon = Polygon(pts) 

    for i in range(n_rows):
        point = Point(lon_lat[i])
        if polygon.contains(point):
            # if current longitude and latitude pair exists in the polygon, this pair belongs to the locality
            active_fires[‘Locality'].iloc[i] = recs[nshp][6]
            
# remove all NAs -- indicates these points do not belong to Victoria
active_fires = active_fires[active_fires.Locality != "NA"]

# reset the index
active_fires.reset_index(drop=True, inplace=True)

# read in Australian Postcodes dataset
aus_postcodes = pd.read_csv("Australian_Postcodes.csv")

# filter dataset to only contain data pertaining to VIC
aus_postcodes_vic = aus_postcodes[aus_postcodes.state == "VIC"]

# drop unnecessary columns
aus_postcodes_vic = aus_postcodes_vic.drop(['id','long','lat','dc','type','status','sa3','sa3name','sa4',
                                            'sa4name','region','state'], axis = 1) 
                                    
# create lists to hold the postcodes and localities
postcodes = list(aus_postcodes_vic.postcode)
localities = list(aus_postcodes_vic.locality)

# create a new df to hold unique localities and postcodes
column_names = ["Locality", "Postcode", "Fire_Activity_Occurrences"]
unique_locality_postcode = pd.DataFrame(columns = column_names, index=range(0,n_shp))
unique_locality_postcode['Postcode'] = unique_locality_postcode['Postcode'].astype(str)

# populate new df with localities and postcodes if the postcode exists in the shapefile
for i in range(len(recs)):
    unique_locality_postcode.Locality[i] = recs[i][6]
    if recs[i][8] != '': 
        unique_locality_postcode.Postcode[i] = recs[i][8] 
                         
# populate empty rows in the postcode column
for i in range(len(unique_locality_postcode)):
    for j in range(len(localities)):
        if unique_locality_postcode.Locality[i] == localities[j]:
            if unique_locality_postcode.Postcode[i] == 'nan':
                unique_locality_postcode.Postcode[i] = postcodes[j]
                break  

# create a list of the Localities column in the active fire dataset
active_fire_localities = list(active_fire.Locality)

for i in range(len(unique_locality_postcode)):
    # count how many times a Locality in the unique_locality_postcode dataset appears in the 
    # active_fire_localities_list, this is indicative of how many times a fire occurred in that locality
    occurrences = active_fire_localities.count(unique_locality_postcode.Locality[i])
    # fill the fire_activity_occurrences column accordingly
    unique_locality_postcode.Fire_Activity_Occurrences[i] = occurrences
    
unique_locality_postcode.to_csv('Fire Activity per Locality.csv', sep=',')
