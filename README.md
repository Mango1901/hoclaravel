

1 . Download php7.3
2 . git clone https://github.com/Mango1901/hoclaravel
-> cd to project
3. composer install
4. php artisan optimize:clear
5. create .env (the same as .env.example and change DB_CONNECTION=mysql
                                                    DB_HOST=127.0.0.1
                                                    DB_PORT=3306
                                                    DB_DATABASE=btl
                                                    DB_USERNAME=mango
                                                    DB_PASSWORD=mango)
4. php artisan key:generate
5. php artisan migrate -> migrate table
6. php artisan db:seed -> add sample data

