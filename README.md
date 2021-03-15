# Mappalachia

After World War II, Berea College created a general studies course called "Man and the Humanities," in which students studied literature, music, and art. One of the first assignments asked students to draw their home community.
Mappalachia is a web platform that uses [Omeka Classic](https://omeka.org/classic/) to share students drawings that depict glimpses of life in the Appalachian region. This is in an effort to make these drawings available to alumni, scholars, and the public. 

## Before Running

### Apache

You need to have [Apache web server](http://www.apache.org/) installed. 

### MySQL

You need to have [Mysql](https://www.mysql.com/) version 5.0 or greater. 

### PHP

You need to have [PHP](https://www.php.net/) scripting language version 5.4 or higher installed.

### Omeka Classic

For more information on how to set up Omeka Classic follow the Installation Guide [here](https://omeka.org/classic/docs/Installation/Installation/)

### Omeka Database

In db.ini Replace the X's with your information based on the database and user created for Omeka. 
```
[database]
host     = "localhost"
username = "XXXX"
password = "XXXX"
dbname   = "XXXX"
prefix   = "omeka_"
charset  = "utf8"
;port     = ""
```

### Apache Virtual Host 

In your Apache Virtual Host for Omeka use the document root and the directory where your omeka repository is created.
```
<VirtualHost *:80>
ServerAdmin admin@example.com
DocumentRoot <DOCUMENT ROOT GOES HERE>
ServerName example.com
<Directory <DIRECTORY GOES HERE> >
Options FollowSymLinks
AllowOverride All
</Directory>
ErrorLog /var/log/apache2/omeka-error_log
CustomLog /var/log/apache2/omeka-access_log common
</VirtualHost>
```

### Final Steps
Make sure to enable virtual host file, Apache rewrite module and header module with the following commands
```
sudo a2ensite omeka.conf
sudo a2enmod rewrite
sudo a2enmod headers
```
After restarting Apache Service, Open your browser and enter your localhost address
```
sudo systemctl restart apache2
```
