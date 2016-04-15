#PHPPi8relay 
A simple non secure way to test an 8 channel relay via a web interface (PHP) and python. 

Instructions:

Install Apache and PHP

1. sudo apt-get install apache2 php5
2. Download from git into the downloads folder
3. cd /home/pi/Downloads
2. git clone https://github.com/chasedg2008/PHPPi8Relay/ 
3. cd /home/pi/Downloads/PHPPi8Relay/ 
4. sudo cp index.php /var/www/html/
5. sudo cp relay.py /var/www/html/
6. sudo nano /etc/sudoers  ***** non secure
7. add the below line to the sudoers file
8. www-data ALL=(ALL) NOPASSWD: ALL
9. sudo chmod +x /var/www/html/relay.py

