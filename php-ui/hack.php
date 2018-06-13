<?php
$dbhost = gethostbyname('mysql.msinfra');
$dbport = 3306;
$dbuser = "app_user";
$dbname = "microservices";
$dbpwd = "password";

$connection = mysqli_connect($dbhost.":".$dbport, $dbuser, $dbpwd, $dbname) or die("Error " . mysqli_error($connection));
$query = "SELECT from_add, to_add, subject, body, created_at from emails";
echo "Here is the list of emails sent: <br>";
if ($result = mysqli_query($connection, $query)) {
while ($row = mysqli_fetch_assoc($result)) {
    echo "From Address: ".$row['from_add'] . "To Address: " . $row['to_add'] . "Subject: " . $row['subject'] ."When: ".$row['created_at'] . "<br>";
}
mysqli_free_result($result);
}
echo "End of the list <br>";
mysqli_close($connection);
?>
