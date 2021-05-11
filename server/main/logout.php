<?php
session_start();
echo "<h1><center> Logging you out... </center></h1>";
session_destroy();
echo "<h2><center> Redirecting to login page in 5 seconds... </center></h2>";
echo "<h2><center> If redirect does not occur in 5 seconds, Heres a manual <a href='http://uwubot.org/server/'>Link</a>. </center></h2>";
echo "<meta http-equiv='refresh' content='5;url=http://uwubot.org/server/'>";
exit;
?>