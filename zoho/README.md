
# Comment App

Build a feedback application with the sign in and signup for registration for the user because only the register user can update the comment in this application and added the filter the comment area to filter out the logged in user comment to show.

##  XAMPP

 Download the Xampp Server From the Below link.
 [https://www.apachefriends.org/index.html](https://www.apachefriends.org/index.html)
 
## Download the folder from the Github Link

Github Links  [https://www.apachefriends.org/index.html](https://www.apachefriends.org/index.html)
Download and Extract the files.


## Copy, Paste the Code.

Copy the entire folder and go to the Local Disk ( C : ) / xampp /htdoc/  inside the htdoc you need to paste the folder.
>C:\xampp\htdocs\

## Open the XAMPP Server 

Goto Searchbar and search xampp-control and open it. Click the Apache Start button and MySql Start button. After server started without any issue click the admin button for MySql or <[localhost / 127.0.0.1 | phpMyAdmin 4.9.0.1](http://localhost/phpmyadmin/index.php) click this link . It will open the phpMyAdmin Page. 

## Create a New Database

In php My Adminpage  left side top New button is available click the button to Create  a New Database in XAMPP server name as **zoho**  after creation of database and import the **zoho.sql** file from the download folder.

## Sign-In
Click the link [Sign-In](http://localhost/zoho/)  to open a login page. Sign-in where the user will be allowed to enter his emailID and password. This data will be sent to the backend where it will be cross-checked with the data available in the database and a proper response is returned to the frontend.

## Sign-up
Sign-up where the user will be allowed to enter his emailID and password along with a secret code. This data will be validated and sent to the backend where the data will be stored in a Database.

## Forget-password
 Forget-password where the user will be allowed to enter the email id and secret code. This data will be sent to the backend and If the data matches with any record already in the database then the password should be shown to the user In frontend.

## After sign-in
 the user will be presented with a text area where he will be able to type any comments. After submitting, the comment will be taken to the backend and saved in database.

##  Users' comments 
Below the text area, the user will also see other users' comments along with the respective email ids next to them.

## Filter button 
There will be a filter button on click it, the comment area will show only the comments of the logged in user.
