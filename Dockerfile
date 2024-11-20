# Используем официальный образ PHP с Apache
FROM php:7.4-apache

# Устанавливаем необходимые PHP-расширения
RUN docker-php-ext-install mysqli

# Копируем содержимое проекта в папку Apache
COPY . /var/www/html

# Делаем директорию доступной для записи
RUN chown -R www-data:www-data /var/www/html && chmod -R 755 /var/www/html

# Устанавливаем рабочую директорию
WORKDIR /var/www/html
