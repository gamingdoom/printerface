# What is printerface?
Printerface is a web interface for printers. Printerface allows users to upload files and click print without having to deal with broken printer drivers.

# How do I install and setup printerface?
## Requirements
#### This guide will use a Rasperry Pi running Raspberry Pi OS
- A Linux computer with a connection to the internet that can be on when printing is needed.
- A printer that supports Linux.
- (optional) Hostname is something like printer.
- (optional) Zeroconf / Bonjour installed on clients.
## Installing packages
For debian or debian based distros, you can install all of the needed packages with this command:
```
sudo apt install cups nginx php php-fpm printer-driver-all
```
