<?php
include ('dbconnection.php');
$eid = $_GET['id'];
$ret = mysqli_query($con, "select Address from tblusers where ID='$eid'");
$row = mysqli_fetch_array($ret);
$selectall = mysqli_query($con, "select Address,FirstName,LastName from tblusers where Id !='$eid'");
if (mysqli_num_rows($selectall) > 0) echo "<b>Same Location users</b><br>";
while ($rows = mysqli_fetch_array($selectall))
{
    if ($rows['Address'] == $row['Address'])
    {
        $match = 1;
        echo $rows['FirstName'] . '' . $rows['LastName'] . '<br>';

    }
}
echo "<br>";
$add = $row['Address'];
?>
<html>
<div class="text-center"><a href="index.php">Back</a></div>
<div>
 <iframe width="50%" height="300" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?q=<?=$add; ?>&amp;ie=UTF8&amp;&amp;output=embed"></iframe><br />
</div>
</html>