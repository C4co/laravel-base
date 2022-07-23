# Install PHP 8.1

### Add PPA for PHP 8.1

```
sudo apt install software-properties-common
sudo add-apt-repository ppa:ondrej/php
sudo apt update
```

### Install PHP

```
sudo apt install php8.1
```

### Install PHP 8.1 FPM for Nginx

```
sudo apt install php8.1-fpm
```

### Install PHP 8.1 Extensions

> sudo apt install php8.1-extension_name

```
sudo apt install php8.1-{bcmath,xml,fpm,mysql,zip,intl,ldap,gd,cli,bz2,curl,mbstring,pgsql,opcache,soap,cgi}
```

### References

https://computingforgeeks.com/how-to-install-php-on-ubuntu-linux-system/

https://www.cloudbooklet.com/how-to-install-or-upgrade-php-8-1-on-ubuntu-20-04/
