![BoodlE]()

<h1 align="center"> 🔍 Search This: A simple search engine 🔎 </h1>

## ⚡ Key Features 
* Image Search 
* Web Crawl 
* Site Search
* Pagination Search System

## 📝 Table of contents 
* [General info](#general-info)
* [Built with](#built-with)
* [Tools](#tools)
* [Project Setup](#project-setup)
* [Other Configurations](#other-configurations)

### General Info
This project is simple web search engine.
	
### Built with 
Project is created with:
#### FrontEnd ⏬
![HTML5](https://img.shields.io/badge/HTML5-E34F26?style=for-the-badge&logo=html5&logoColor=white)
![CSS3](https://img.shields.io/badge/CSS3-1572B6?style=for-the-badge&logo=css3&logoColor=white)
![JS](https://img.shields.io/badge/JavaScript-F7DF1E?style=for-the-badge&logo=javascript&logoColor=black)

#### BackEnd ⏬
![PHP](https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white)
![SQL](https://img.shields.io/badge/MySQL-00000F?style=for-the-badge&logo=mysql&logoColor=white)
	
### Tools 
Tools I've used within this project:
#### Server 🗄️
![LAMP](https://img.shields.io/badge/LAMPP_V8-orange?style=for-the-badge&logo=xampp&logoColor=00000F)
#### Text Editor 🖊️
![VSCodium](https://img.shields.io/badge/VSCodium-0078D4?style=for-the-badge&logo=visual%20studio%20code&logoColor=white)
#### OS 💻
![Deb](https://img.shields.io/badge/Debian_(Buster)-00000F?style=for-the-badge&logo=debian&logoColor=deeppink)
#### Preferred Browser 🌐
![Brave](https://img.shields.io/badge/Brave-E34F26?style=for-the-badge&logo=brave&logoColor=white)

### Project Setup 

#### Installing LAMPP on Linux 
```
wget https://www.apachefriends.org/xampp-files/8.0.3/xampp-linux-x64-8.0.3-0-installer.run
chmod +x xampp-linux-x64-8.0.3-0-installer.run
sudo ./xampp-linux-x64-8.0.3-0-installer.run
```

#### VS Codium installation on Linux (Debian based distributions):
```
***** Add the GPG key of the repository *****
wget -qO - https://gitlab.com/paulcarroty/vscodium-deb-rpm-repo/-/raw/master/pub.gpg | gpg --dearmor | sudo dd of=/etc/apt/trusted.gpg.d/vscodium.gpg

***** Add the repository *****
echo 'deb https://paulcarroty.gitlab.io/vscodium-deb-rpm-repo/debs/ vscodium main' | sudo tee --append /etc/apt/sources.list.d/vscodium.list

***** Update then install vscodium ***** 
sudo apt update && sudo apt install codium
```

### Other Configurations

- Open /opt/lampp/etc/httpd.conf change to desired directory
#### Changing Document Root and Directory
```
# old line: DocumentRoot "/opt/lampp/htdocs"
DocumentRoot "/home/3ncrypt3db0t/Search_this"

#...etc...

# old line: <Directory "/opt/lampp/htdocs">
<Directory "/home/3ncrypt3db0t/Search_this">
#
# Possible values for the Options directive are "None", "All",
# or any combination of:
#   Indexes Includes FollowSymLinks SymLinksifOwnerMatch ExecCGI MultiViews
# etc...
```

#### Changing Port Number 
```
#
# Listen: Allows you to bind Apache to specific IP addresses and/or
# ports, instead of the default. See also the <VirtualHost>
# directive.
#
# Change this to Listen on specific IP addresses as shown below to 
# prevent Apache from glomming onto all bound IP addresses.
#
#Listen 12.34.56.78:8080
Listen 8080
```

#### Accessing Documents and Directory 
- Open /opt/lampp/etc/httpd.conf change nobody and nogroup
```
<IfModule unixd_module>
#
# If you wish httpd to run as a different user or group, you must run
# httpd as root initially and it will switch.  
#
# User/Group: The name (or #number) of the user/group to run httpd as.
# It is usually good practice to create a dedicated user and group for
# running httpd, as with most system services.
#
# Old: user daemon
# Old: group daemon
User nobody
Group nogroup
</IfModule>
```
>Editing the User and group access can result fault in phpmyadmin.

#### Accessing files within local server 
- set chmod to Search_this with this command
```
sudo chmod 777 /home/3ncrypt3db0t/Search_this
Save the file and start xampp with this command:

sudo /opt/lampp/lampp start
Open your browser and enter this url:

http://localhost:8080/Search_this
```

>Editing **httpd.conf** might not work as intended, edit the configuration files at your own risk. 

## 🖼️ Screenshots and Visual Overview 🎥

### Home Page 
![BoodleIndeX]()

### Site Search Page 
![BoodleSearch]()

### Image Search Page 
* Will be updated soon 

### Visual Overview 
* Will be updated soon

## 🖋️ To Do 📝
* Local autocomplete 
* Geo-location features 
* Dedicated maps-tags and map re-querying 
* Enhanced  privacy and security options
* Video, News, Music and Maps search feature
* No storage of logs 

# LICENSE ⤵️
>You can check out the full license [here](https://github.com/3ncrypt3db0t/Search_This/blob/main/LICENSE)

This project is licensed under the terms of the **GNU/GPL** license, feel free to share among others. 😄
