#!/bin/bash
# clients.sh 
sudo smbpasswd -x $@ > /var/www/html/bash/output2.txt
sudo deluser $@ >> /var/www/html/bash/output2.txt

