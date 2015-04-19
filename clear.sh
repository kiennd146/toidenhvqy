find . -type f -exec chmod 664 {} +
find . -type d -exec chmod 775 {} +
chmod 644 wp-config.php
find . -exec chown kngo:www-data {} +
chmod +xw clear.sh
