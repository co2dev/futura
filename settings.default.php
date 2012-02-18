<?php
# Futura
# >>0.1

define('FUTURA_BOARD', "b"); // UNIQUE identifier for this board (only use letters and numbers)
define('FUTURA_BOARDDESC', "Futura"); // board title
define('FUTURA_SUBTITLE', "original clone"); // board subtitle (displayed under the board name)
define('FUTURA_MAXTHREADS', 100); // thread limit (0 to disable)
define('FUTURA_TRUNCATE', 15); // truncate messages to this many lines on board index pages (0 to disable)
define('FUTURA_MAXKB', 2048); // maximum file size (0 to disable)
define('FUTURA_MAXKBDESC', "2 MB"); // formatted maximum file size
define('FUTURA_MAXW', 250); // maximum image width. images exceeding this size will be thumbnailed
define('FUTURA_MAXH', 250); // maximum image height. images exceeding this size will be thumbnailed
define('FUTURA_DELAY', 30); // delay between posts to help control flooding. 0 to disable
define('FUTURA_LOGO', ""); // logo html
define('FUTURA_TRIPSEED', ""); // seed for generating secure tripcodes
define('FUTURA_ADMINPASS', "CHANGEME"); // admin password (CHANGE THIS YO)
define('FUTURA_MODPASS', ""); // mod password. same as admin but can only delete posts (leave blank to disable)
define('FUTURA_DBMODE', "mysql"); // database type to use ( flatfile / mysql / sqlite )

// mysql settings - only needed if using mysql
define('FUTURA_DBHOST', "localhost"); // hostname (usually localhost)
define('FUTURA_DBUSERNAME', "CHANGEME"); // database username
define('FUTURA_DBPASSWORD', "CHANGEME"); // password for the database user
define('FUTURA_DBNAME', "CHANGEME"); // name of the database
define('FUTURA_DBPOSTS', FUTURA_BOARD . "_posts"); // basically adds _posts to your board identifier (table that is used to store posts)
define('FUTURA_DBBANS', "bans"); // table containing bans

// extra settings
define('FUTURA_FORCED_ANON', "0"); // force users to remain anonymous - hide the name field (1 = enable / 0 = disable)
define('FUTURA_ANON_NAME', "Anonymous"); // name to use when users leave the name field blank
?>