# load libraries
import re
import os
import numpy
import shapefile
import pandas as pd
pd.options.mode.chained_assignment = None 

from pandas import read_excel
from geopy.geocoders import Nominatim
from shapely.geometry import Point
from shapely.geometry.polygon import Polygon

# read in the Bushfire Prone Area shapefile
sf_bushfireprone = shapefile.Reader("./bushfire_prone_area")
recs_bpa = sf_bushfireprone.records()       # records of bushfire prone LGAs
nshp_bpa = len(recs_bpa)                    # number of bushfire prone LGAs

LGA_BushfireProne = []                      # initialise list to hold all bushfire prone LGAs in the shapefile

# populate list
for nshp in range(nshp_bpa):
    LGA_BushfireProne.append(recs_bpa[nshp][1])

# read in the Greater Melbourne shapefile
sf_greatermelb = shapefile.Reader("./Aus-Melbourne02")
recs_gm = sf_greatermelb.records()          # records of LGAs in Greater Melbourne  
nshp_gm = len(recs_gm)                      # number of LGAs in Greater Melbourne

# create new dataframe to hold all LGAs in Greater Melbourne
LGA_GreaterMelb = pd.DataFrame(columns=['LGA'])   

# populate LGA column
for nshp in range(nshp_gm): 
    LGA_GreaterMelb = LGA_GreaterMelb.append({'LGA':recs_gm[nshp][2]}, ignore_index=True)

# clean dataframe and transform to a list
LGA_GreaterMelb = LGA_GreaterMelb.drop(0)
LGA_GreaterMelb.reset_index(drop=True, inplace=True)
LGA_GreaterMelb['LGA'] = LGA_GreaterMelb['LGA'].str.replace('City of ', '')
LGA_GreaterMelb['LGA'] = LGA_GreaterMelb['LGA'].str.replace('Shire of ', '')
LGA_GreaterMelb['LGA'] = LGA_GreaterMelb['LGA'].str.upper()
LGA_GreaterMelb = list(LGA_GreaterMelb['LGA'])

# remove LGAs belonging to Greater Melbourne from the Bushfire Prone LGAs
for lga in LGA_GreaterMelb:
    if lga in LGA_BushfireProne:
        LGA_BushfireProne.remove(lga)

# also remove the unincorporated LGAs
LGA_BushfireProne = [lga for lga in LGA_BushfireProne if "UNINC" not in lga]        

# read in Medical Centres data
medical_centres = pd.read_csv("Medical Centres.csv")

# drop the 'Unnamed: 0' column
medical_centres.drop(medical_centres.columns[0], axis=1, inplace=True)

# filter the Medical Centres data to only contain Bushfire Prone LGAs in Regional Victoria
bool_mc = medical_centres.Area.isin(LGA_BushfireProne)
filtered_mc = medical_centres[bool_mc]

# reset index
filtered_mc.reset_index(drop=True, inplace=True)

# write to file
filtered_mc.to_csv('Medical Centres in Regional Victoria.csv', sep=',')
