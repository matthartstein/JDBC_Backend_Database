<html>
<body>
<h3>View all Courses for a given Student:</h3>
<button type="button" onclick="parent.location='home.php'"> Home </button>
<br>
<br>

<form action="function6.php" method="post">
    StudentID: <input type="text" name="name"><br>
    <input name="submit" type="submit">
</form>
<br><br>
</body>
</html>

<?php
if (isset($_POST['submit']))
{
    // replace ' ' with '\ ' in the strings so they are treated as single command line args
    $name = escapeshellarg($_POST[name]);
    //$type = escapeshellarg($_POST[type]);
    //$city = escapeshellarg($_POST[city]);

    $command = ' java -cp .:mysql-connector-java-5.1.40-bin.jar function6 ' . $name;

    // remove dangerous characters from command to protect web server
    $command = escapeshellcmd($command);
    echo "<p>command: $command <p>";

    // run jdbc_insert_restaurant.exe
    system($command);
}
?>
