# Courier-Management
A Web Application for courier service organisation to manage its business(including employees and customers)
Languages/Tools: PHP and MySQL for backend, Bootstrap JQuery for frontend.


### To run this Web Application you need to first install php and mysql-server and connect them
```
sudo apt-get update
sudo apt-get install apache2
sudo ufw app list 
sudo ufw app info "Apache Full"
sudo ufw allow in "Apache Full"
```
Now Open your brower and type localhost to see whether its proparly installed or not .
you should get a message saying 
```
it works
```
Now Install mysql-server
```
sudo apt-get install mysql-server
```

Install php
```
sudo apt-get install php libapache2-mod-php php-mcrypt php-mysql
```

Before running the application on localhost create a database name tyc in mysql
and then run the tyc.sql file as
```
use tyc ;
source /pathtofile/tyc.sql;
```
all the tables will be created 

If anyone has anyquery just raise an issue on this repository . I will try to get back as soon as poosible
