<!DOCTYPE html>
<html lang="en">
<head><meta charset="UTF-8">
<title>Getting Started with PHP</title>
</head>
<body>
<?php
$dbc = mysqli_connect('localhost', 'victordiez', 'abc123', 'DiezCatering') OR die(mysqli_connect_error());

mysqli_set_charset($dbc, 'utf8');
if (mysqli_ping($dbc))
{
    echo 'MySQL Server'. mysqli_get_server_info($dbc) . 'connected on' . mysqli_get_host_info($dbc);
    echo "<br>" . "HELLO WORLD, God has seen fit to give me another day to live and I have decided to make it everyone else's problem";

}

?>
</body>
</html>