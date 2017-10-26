# boldlead_full_stack_interview_exercise
The Boldlead exercise

in this exercise folder you will find the following files

The SQL file Leads_database.sql.  This file containes the create database and table sql queries needed tfor the rest of the exercise

The db_connection file. This file contains the database connection. please change the username and password if needed

the landing_page.html.  this is the Landing page where the lead form is located.  It also has a onunload function for those who refresh and close the page in order to still capture data from the form.

The recieved.php file.  This file process the form entry from the landing page.

The incompleteForm.php file.  This file process the data from the once and refresh or close window event is started and store it to the database.

The dashboard.php file.  This file display all entries from the newleads table from the database. It is arange in a single column and allow the user to click on the view more detail link to view the whole lead.

The lead_details.php file.  This file displays the individual lead of the lead click on from the user.


This solution runs well on firefox, I used both the onunload and beforeunload listners becuase onunload doesn't work well with edge.  Also I ran a console.log in  the success to yes if the data was capture and if I was in the function on a close or refresh. I also tested to se if the required fields were working and to see if the data was being send to the database.  I also test the dashboard and links for every individual form entry.

What I would do if I had more time.  included a search at date since I have a time created field in the database and some logic on the incomplteform.php to not even run if either the email, phone number or whole address is not field out, because just a nam without one of those poeces of information is not useful. I also would not allow dulpicate entries of the same address into the system, or after a certain period of time has pass.
