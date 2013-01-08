<?php

if (isset($_SERVER["DATABASE_URL"])) {
 $db = parse_url($_SERVER["DATABASE_URL"]);
 define("db_name", trim($db["path"],"/"));
 define("db_user", $db["user"]);
 define("db_pass", $db["pass"]);
 define("db_host", $db["host"]);
}
else {
 die("Your heroku DATABASE_URL does not appear to be correctly specified.");
}

/* Not used, see above
$db_host = 'XXXX';
$db_name = 'XXXX';
$db_user = 'XXXX';
$db_pass = 'XXXX';
*/

?>
