# load library
library(dplyr)

# read in dataset
fire_activity <- read.csv('Fire Activity per Locality.csv')

# nullify X column
fire_activity$X <- NULL

# create new column for fire danger levels
fire_activity$Levels <- NA

# obtain the range of fire activity occurrences
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

# populate the Levels column based on class intervals
# class intervals will change in accordance to the range and needs to be manually changed in the following loop
# if class intervals contain a decimal, round off
for (i in 1:nrow(fire_activity)){
  if (between(fire_activity$Fire_Activity_Occurrences[i], 1, 2) == TRUE){
    fire_activity$Levels[i] <- "Low"
  }
  
  else if (between(fire_activity$Fire_Activity_Occurrences[i], 3, 5) == TRUE){
    fire_activity$Levels[i] <- "Moderate"
  }
  
  else if (between(fire_activity$Fire_Activity_Occurrences[i], 6, 7) == TRUE){
    fire_activity$Levels[i] <- "High"
  }
  
  else if (between(fire_activity$Fire_Activity_Occurrences[i], 8, 9) == TRUE){
    fire_activity$Levels[i] <- "Very High"
  }
  
  else if (between(fire_activity$Fire_Activity_Occurrences[i], 10, 12) == TRUE){
    fire_activity$Levels[i] <- "Extreme"
  }
  
  else if (between(fire_activity$Fire_Activity_Occurrences[i], 13, 14) == TRUE){
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
