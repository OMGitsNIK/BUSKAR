<?php
$ret = mysqli_query($con, "select * from tblusers");
$cnt = 1;
$row = mysqli_num_rows($ret);
if ($row > 0)
{
    while ($row = mysqli_fetch_array($ret))
    {

?>
    <!--Fetch the Records -->
        <tr>
            <td><?php echo $cnt; ?></td>
            <td><?php echo $row['FirstName']; ?> <?php echo $row['LastName']; ?></td>
            <td><?php echo $row['Email']; ?></td>
            <td><?php echo $row['MobileNumber']; ?></td>
            <td> <?php echo $row['CreationDate']; ?></td>
            <td>
  <a href="read.php?viewid=<?php echo htmlentities($row['ID']); ?>" class="view" title="View" data-toggle="tooltip"><i class="material-icons">&#xE417;</i></a>
                <a href="edit.php?editid=<?php echo htmlentities($row['ID']); ?>" class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
                <a href="index.php?delid=<?php echo ($row['ID']); ?>" class="delete" title="Delete" data-toggle="tooltip" onclick="return confirm('Do you really want to Delete ?');"><i class="material-icons">&#xE872;</i></a>
            </td>
	    <td> <a href="weblocation.php?id=<?php echo ($row['ID']); ?>" class="location" title="location" data-toggle="tooltip"><i class="fa fa-map-marker" aria-hidden="true"></i></a></td>
        </tr>
        <?php
        $cnt = $cnt + 1;
    }
}