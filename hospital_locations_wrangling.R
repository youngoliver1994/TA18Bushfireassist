# load library
library(dplyr)

# read in dataset
hospital_locations <- read.csv('Hospital_Locations.csv')

# nullify/drop columns
hospital_locations[,c(3,5,10,11,13,15,16,17)] <- list(NULL)

# rename columns
colnames(hospital_locations)[1] <- "Longitude"
colnames(hospital_locations)[2] <- "Latitude"
colnames(hospital_locations)[3] <- "Medical_Centre"
colnames(hospital_locations)[8] <- "Area"

# concatenate the Street Number, Road Name and Road Type to one column
hospital_locations$Address <- paste(hospital_locations$StreetNum, hospital_locations$RoadName)
hospital_locations$Address <- paste(hospital_locations$Address, hospital_locations$RoadType)

# nullify the concatenated columns
hospital_locations[,c(5:7)] <- list(NULL)

# change order of Latitude and Longitude for convenience
hospital_locations <- hospital_locations[,c(2,1,3,4,7,5,6)]

# create vector of specialisations
specialisations <- c('Surgery','Surgicentre','Plastic Surgery',
                     'Specialist','Procedure','Endoscopy','Scope','Eye','Ear',
                     'Dialysis','IVF','SurgiCentre','Day','Rehabilitation',
                     'Digestive','Cosmetic','Laser','Gastroenterology',
                     'Vision','Imaging','Oncology','Radiation','Oral',
                     'Facial','Gut','MediBrain','MediSleep','Cancer','Cosmetic',
                     'Dental','Hospice','Marie Stopes','Mandometer',
                     'Surgical','Womens','Women')

# remove rows which contain the specialisation in the Medical Centre name
for (specialisation in specialisations){
  hospital_locations <- hospital_locations[!grepl(specialisation, 
                                                 hospital_locations$`Medical_Centre`),]
}

# reset index
rownames(hospital_locations) <- NULL

# change Area column case to upper case
hospital_locations$Area <- toupper(hospital_locations$Area)

# remove values within parentheses in Area and Medical Centre column
hospital_locations$Area <- gsub("\\s*\\([^\\)]+\\)","",as.character(hospital_locations$Area))
hospital_locations$`Medical_Centre` <- gsub("\\s*\\([^\\)]+\\)","",as.character(hospital_locations$`Medical_Centre`))

# remove commas and everything after the comma in Medical Centre column
hospital_locations$`Medical_Centre` <- gsub("(.*),.*", "\\1", as.character(hospital_locations$`Medical_Centre`))

# remove dashes in Area column
hospital_locations$Area <- gsub("-", " ", hospital_locations$Area)

# write to file
write.csv(hospital_locations, 'Medical Centres.csv')
