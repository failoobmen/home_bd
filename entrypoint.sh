#!/bin/bash

# Запускаем MySQL
mysqld_safe &

# Запускаем Apache
apache2ctl -D FOREGROUND