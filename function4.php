<html>
<body>
<h3>View all Students:</h3>
<button type="button" onclick="parent.location='home.php'"> Home </button>
<br>
<br>

<h4> Click the button below to view all Students:</h4>
<form action="function4.php" method="post">
    <input name="submit" type="submit">
</form>
<br><br>

</body>
</html>

<?php
if (isset($_POST['submit']))
{
    // replace ' ' with '\ ' in the strings so they are treated as single command line args
    //$name = escapeshellarg($_POST[name]);
    //$type = escapeshellarg($_POST[type]);
    //$city = escapeshellarg($_POST[city]);
    //$hrs = escapeshellarg($_POST[hrs]);

    $command = 'java -cp .:mysql-connector-java-5.1.40-bin.jar function4';

    // remove dangerous characters from command to protect web server
    $command = escapeshellcmd($command);
    echo "<p>command: $command <p>";

    // run jdbc_insert_restaurant.exe
    system($command);
}
?>
