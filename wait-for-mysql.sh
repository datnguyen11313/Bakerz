#!/bin/sh

echo "⏳ Đang chờ MySQL tại $DB_HOST:$DB_PORT sẵn sàng..."

# Lặp lại cho tới khi MySQL sẵn sàng
until nc -z -v -w30 $DB_HOST $DB_PORT
do
  echo "⏳ MySQL chưa sẵn sàng. Đợi 5 giây..."
  sleep 5
done

echo "✅ MySQL đã sẵn sàng. Khởi động Laravel..."

php artisan serve --host=0.0.0.0 --port=8000

