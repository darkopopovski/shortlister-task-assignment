## NOTE: This is my approach if Email model is already created. If not there would be different approach.

## Overview

The goal managing communication of the process for companies to manage their different email addresses.
Since the current implementation allows only one email to be used for each company, i will make the following changes:

## Features
- New Email Sender Service that will now send emails based on the email type that is given
- UI Changes in each Company so now they can manage their emails such as example: ADD, UPDATE etc..

## Technical Details

### 1. Model

  CompanyEmail
- New Model -> CompanyEmail the idea of this is to have e One-To-Many relation between Company and CompanyEmail.
- New Model -> will also have a One-To-Many relation between Email and CompanyEmail

## Database Table Structure

- id: primary key. 
- company_id: Foreign key that will reference company table. 
- email_id: Foreign key that will reference email table. 
- email_type: The type of email (example: marketing).
- audit fields: To know about timestamps.


## Bonus
  Thinking of the future new technologies such as AI i would also suggest the following:
- Integration of AI so the management system for email sending will be automated
- The idea of this is AI will do the email categorization automatically and will send emails correctly based on their type
- AI can also determinate the category of the email address based on what is the message that will be given as an input
- There will be no need for manual logics to retrieve emails etc.. AI will do the job for us

- There is alot to talk about this so i gave my thoughts about it.
NOTE: This is similar for example of fraud or moderation services that are popular in the systems nowdays.


### Alghoritmic Diagram (How i was thinking when everything will be merged together)
![Alt Text](https://i.ibb.co/m5STnx7k/algorithmic-diagram.png)



