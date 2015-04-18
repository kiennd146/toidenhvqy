sudo find . -type f -exec chmod 644 {} +
sudo find . -type d -exec chmod 755 {} +
sudo chmod 600 wp-config.php
sudo find . -exec chown kngo:www-data {} +
