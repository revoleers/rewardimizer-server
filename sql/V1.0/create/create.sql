create database wallet DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;

use wallet;

grant all on wallet.* to 'revoleers'@'localhost' identified by 'vivalarev';