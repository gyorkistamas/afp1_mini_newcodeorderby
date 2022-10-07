-- Why is this file require when we could just use root?
--   1. security nighmare
--   2. mysql will not allow php to connect with root (perhaps that doesnt happen under xampp, but still)

DROP USER IF EXISTS 'afp'@'localhost';
CREATE USER 'afp'@'localhost' IDENTIFIED BY 'password';
GRANT ALL PRIVILEGES ON review_site.* TO 'afp'@'localhost';
FLUSH PRIVILEGES;
