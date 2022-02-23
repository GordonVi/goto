FROM php

EXPOSE 80

WORKDIR /var/www/html
CMD ["php", "-S", "0.0.0.0:80"]



