sudo composer self-update
cd /var/www/
composer install

echo "Creating new database homestead";
mysql -uroot -proot -e "create database homestead";

php artisan db:seed

echo "You've been provisioned"
