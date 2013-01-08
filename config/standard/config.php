<?php

if (isset($_SERVER["DATABASE_URL"])) {
 $db = parse_url($_SERVER["DATABASE_URL"]);
 define("DB_NAME", trim($db["path"],"/"));
 define("DB_USER", $db["user"]);
 define("DB_PASSWORD", $db["pass"]);
 define("DB_HOST", $db["host"]);
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
