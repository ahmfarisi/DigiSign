# DigiSign
 Aplikasi Sederhana untuk Tanda Tangan Digital dengan Hash dan Auto Generate QR Code.
 
# Library, Framework, etc

 - CodeIgniter 3
 - CodeIgniter PHP QR Code (Thanks to https://github.com/dwisetiyadi/CodeIgniter-PHP-QR-Code)
 - Custom Core System Class for simplify the query job (Located on: **DigiSign/Application/core/MY_Controller.php**), credit to my Friend, Kgs Achmad Siddik
 - CI 3 Language Pack : Bahasa (Thanks to https://github.com/warizzmann/codigniter3-language-bahasa)
 - Admin LTE Template (https://adminlte.io)

# To do first

 - Create database and import the database from the provided file (Located on: **Digisign/your_database_name.sql**)
 - Setting the project config for the base url
 - Setting the project database (username, password, and database name)

## Username and Password to Login

The table **user** inside the database store this username and password to login. Check it out below.

 - Username : john
 - Password : john

## Some Screenshot

![enter image description here](https://drive.google.com/uc?export=view&id=1BFf9DQFjHKT9XtMbokwQ28HRP6iRlP3y)
![enter image description here](https://drive.google.com/uc?export=view&id=1pHEi6CLMrCyOo4FNr1OPS_YGcVgqBKYZ)
![enter image description here](https://drive.google.com/uc?export=view&id=1iiO2LJd6PRx35KgdF5bNlVPdASzSmPNc)

If the picture above is not loaded, then check out this link for the image :

 - https://drive.google.com/uc?export=view&id=1BFf9DQFjHKT9XtMbokwQ28HRP6iRlP3y
 - https://drive.google.com/uc?export=view&id=1pHEi6CLMrCyOo4FNr1OPS_YGcVgqBKYZ
 - https://drive.google.com/uc?export=view&id=1iiO2LJd6PRx35KgdF5bNlVPdASzSmPNc

## QR Code

Then you can use the QR Code as your digital signature. And the Controller **Token_check** is set to be public (no need session), because this is used to verify the generated QR Code, whether it is genuine or fake.
