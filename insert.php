<?php
//Databse Connection file
include ('dbconnection.php');
if (isset($_POST['submit']))
{
    //getting the post values
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $contno = $_POST['contactno'];
    $email = $_POST['email'];
    $add = $_POST['address'];
    //Query select
    $selectquery = mysqli_query($con, "select Email,MobileNumber from  tblusers");
    $cnt = 1;
    while ($row = mysqli_fetch_array($selectquery))
    {

        if ($row['Email'] == $email)
        {

            echo "<script>alert('email is already exists');</script>";
            echo "<script type='text/javascript'> document.location ='insert.php'; </script>";
        }
        if ($row['MobileNumber'] == $contno)
        {
            echo "<script>alert('contactno is already exists');</script>";
            echo "<script type='text/javascript'> document.location ='insert.php'; </script>";
        }
        $cnt = $cnt + 1;
    }
    // Query for data insertion
    $query = mysqli_query($con, "insert into tblusers(FirstName,LastName, MobileNumber, Email, Address) value('$fname','$lname', '$contno', '$email', '$add' )");
    if ($query)
    {
        echo "<script>alert('You have successfully inserted the data');</script>";
        echo "<script type='text/javascript'> document.location ='index.php'; </script>";
    }
    else
    {
        echo "<script>alert('Something Went Wrong. Please try again');</script>";
    }
}
?>
