<html>
<body>
<h3>Add a Course to the Course Table:</h3>
<button type="button" onclick="parent.location='home.php'"> Home </button>
<br>
<br>

<form action="function2.php" method="post">
    DeptCode: <input type="text" name="name"><br>
    CourseNum: <input type="text" name="type"><br>
    Title: <input type="text" name="city"><br>
    CreditHrs: <input type="text" name="hrs"><br>
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
    $type = escapeshellarg($_POST[type]);
    $city = escapeshellarg($_POST[city]);
    $hrs = escapeshellarg($_POST[hrs]);

    $command = ' java -cp .:mysql-connector-java-5.1.40-bin.jar function2 ' . $name . ' ' . $type . ' ' . $city . ' ' . $hrs;

    // remove dangerous characters from command to protect web server
    $command = escapeshellcmd($command);
    echo "<p>command: $command <p>";

    // run jdbc_insert_restaurant.exe
    system($command);
}
?>
