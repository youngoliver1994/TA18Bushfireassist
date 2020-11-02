# load libraries
library(dplyr)
library(googleway)
library(stringr)
library(data.table)

# read in dataset
medical_centres <- read.csv("Medical Centres in Regional Victoria.csv")

# add new columns
medical_centres$Rating <- NA
medical_centres$Directions <- NA

# change Address and Area columns to title case
medical_centres$Address <- str_to_title(medical_centres$Address)
medical_centres$Area <- str_to_title(medical_centres$Area)

# change '&' to 'and' in Medical Centre column
medical_centres$MedicalCentre <- gsub("&", "and", medical_centres$MedicalCentre, fixed = TRUE)

# number of medical centres in the dataset
mc_rows <- nrow(medical_centres)

# strip the addresses to obtain only street names
stripped_address <- gsub('[0-9]+|[0-9]+[A-Za-z]|-|/', '', medical_centres$Address)
stripped_address <- word(trimws(stripped_address, "l"), 1)

# code credit to slava-kohut on stackoverflow at https://bit.ly/2IKCEyy
`%in_str%` <- function(pattern,s){
  grepl(pattern, s)
}

# populate Rating column
for (i in 1:mc_rows){
  # paste medical centre name to street name
  mc_str <- paste(medical_centres$MedicalCentre[i], stripped_address[i])
  
  # find details of medical centre using Google Places API
  # apiKey <- ####################
  curr_mc <- google_places(search_string = mc_str, key = apiKey)
  
  # if Google Places API result comes up empty, then enter 'No Rating' in the Rating column
  if (curr_mc$status == "ZERO_RESULTS"){
    medical_centres$Rating[i] <- 'No Rating'
  }
  
  # if Google Places API comes up with more than one medical centre, find the exact match and obtain the rating as appropriate
  else if (nrow(curr_mc$results) > 1){
    for (j in 1:nrow(curr_mc$results)){
      if (stripped_address[i] %in_str% toupper(curr_mc$results[j,]$formatted_address) == TRUE){
        if (length(curr_mc$results[j,]$rating) != 0){
          if (curr_mc$results[j,]$rating != 0.0){
            medical_centres$Rating[i] <- curr_mc$results[j,]$rating
            break
          }
          else{
            medical_centres$Rating[i] <- 'No Rating'
            break
          }
        }
        else{
          medical_centres$Rating[i] <- 'No Rating'
        }
      }
      else{
        medical_centres$Rating[i] <- 'No Rating'
      }
    }
  }
  
  # if Google Places API comes up with exactly one result, obtain the rating as appropriate
  else if (nrow(curr_mc$results) == 1){
    if (length(curr_mc$results$rating) != 0){
      if (curr_mc$results$rating != 0.0){
        medical_centres$Rating[i] <- curr_mc$results$rating
      }
      else{
        medical_centres$Rating[i] <- 'No Rating'
      }
    }
    else{
      medical_centres$Rating[i] <- 'No Rating'
    } 
  }
  else{
    medical_centres$Rating[i] <- 'No Rating'
  }
}

# for medical centres that were not found using the Google Places API, enter 'No Rating' in the Rating column
medical_centres[is.na(medical_centres)] <- "No Rating"

# create Google Maps link for each medical centre and populate the Directions column
for (i in 1:mc_rows){
  mc_link_str <- gsub("&", "", medical_centres$MedicalCentre[i], fixed = TRUE)
  mc_link_str <- gsub(" ", "%20", mc_link_str, fixed = TRUE)
  mc_link_str <- paste0(mc_link_str, '%2C%20')
  mc_link_add <- paste0(gsub(" ", "%20", medical_centres$Address[i], fixed = TRUE), '%2C%20Victoria%2C%20')
  mc_link_str <- paste0(mc_link_str, mc_link_add)
  mc_link_str <- paste0(mc_link_str, medical_centres$Postcode[i])
  
  link <- paste0('https://www.google.com/maps/search/?api=1&query=', mc_link_str)
  medical_centres$Directions[i] <- link
}

# write to file
write.csv(medical_centres, 'Medical Centres in Regional Victoria (Updated).csv')
