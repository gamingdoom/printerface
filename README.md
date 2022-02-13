# What is printerface?
Printerface is a web interface for printers. Printerface allows users to upload files and click print without having to deal with broken printer drivers.

# How do I install and setup printerface?
## Requirements
#### This guide will use a Rasperry Pi running Raspberry Pi OS
- A Linux computer with a connection to the internet that can be on when printing is needed.
- A printer that supports Linux.
- (optional) Zeroconf is setup and the hostname is something like printer.
- (optional) Zeroconf / Bonjour installed on clients.
## Installing packages
For debian or debian based distros, you can install all of the needed packages with this command:
```
# apt install cups nginx php-fpm printer-driver-all
```
## Making directories
These directories will store the files for the website and the files that are uploaded. If you change them, make sure that you change the config files accordingly.
```
# mkdir -p /data/private/printer /data/private/uploads
# chmod 777 -R /data/private/printer /data/private/uploads
```
## Installing files
First, clone the repo and cd into it:
```
$ git clone https://github.com/gamingdoom/printerface.git && cd printerface
```
Next, move the config files to their locations. If you already have customized config files, try to merge them in.
```
# cp configs/nginx.conf /etc/nginx/nginx.conf
# cp configs/print /etc/nginx/sites-available/
# ln -s /etc/nginx/sites-available/print /etc/nginx/sites-enabled/print
```
## Enabling / Disabling services
First, disable and stop apache2:
```
# systemctl disable --now apache2
```
Finally, we can start the web server and php-fpm
```
# systemctl enable --now php7.4-fpm nginx
```
# How do I use printerface?
- You can access the printerface interface by going to the ip address of the device hosting printerface in your web browser.
- If you setup optional Zeroconf / Bonjour, you can go to *hostname*.local in a web browser
