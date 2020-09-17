setwd('~/Desktop/Dataset')

# load library
library(dplyr)

# read in dataset
fire_activity <- read.csv('Fire Activity per Locality.csv')

# create new column for fire danger levels
fire_activity$Levels <- NA

# remove duplicated rows of locality and postcode
fire_activity <- fire_activity[!duplicated(fire_activity[c(1,2)]),]

# find the range of fire activity occurrences
range <- max(fire_activity$Fire_Activity_Occurrences) - min(fire_activity$Fire_Activity_Occurrences)

# get the width of the class interval by dividing the range by 6
width <- range/6

# create vector to hold the class intervals
class_intervals <- c()

# populate the vector
for (i in seq(1, range, width)){
  class_intervals <- c(class_intervals,i)
  class_intervals <- c(class_intervals,i+width-1)
}

# check what the class intervals are 
class_intervals

# populate levels column based on class intervals
for (i in 1:nrow(fire_activity)){
  if (between(fire_activity$Fire_Activity_Occurrences[i], 1, 4) == TRUE){
    fire_activity$Levels[i] <- "Low"
  }
  
  else if (between(fire_activity$Fire_Activity_Occurrences[i], 5, 8) == TRUE){
    fire_activity$Levels[i] <- "Moderate"
  }
  
  else if (between(fire_activity$Fire_Activity_Occurrences[i], 9, 12) == TRUE){
    fire_activity$Levels[i] <- "High"
  }
  
  else if (between(fire_activity$Fire_Activity_Occurrences[i], 13, 16) == TRUE){
    fire_activity$Levels[i] <- "Very High"
  }
  
  else if (between(fire_activity$Fire_Activity_Occurrences[i], 17, 20) == TRUE){
    fire_activity$Levels[i] <- "Extreme"
  }
  
  else if (between(fire_activity$Fire_Activity_Occurrences[i], 21, 24) == TRUE){
    fire_activity$Levels[i] <- "Critical"
  }
  
  else{
    fire_activity$Levels[i] <- "No fires recorded"
  }
}

# sort fire activity occurrences in descending order
fire_activity <- fire_activity[order(-fire_activity$Fire_Activity_Occurrences),]

# reset index
rownames(fire_activity) <- NULL

# write to file
write.csv(fire_activity, 'Fire Activity per Locality (Updated).csv')
