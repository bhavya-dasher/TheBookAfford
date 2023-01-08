<?php
include("conn.php")

if($_GET['submit'])
{
    $rn=$_GET['username'];
    $sn=$_GET['password'];
    $cl=$_GET['email_id'];
    $mp=$_GET['respective_field'];

    if($rn!="" && $sn!="" && $cl="" && $mp="")
    {
        $query="INSERT INTO registration VALUES('$rn','$sn','$cl','$mp')";

        $data=mysqli_query($conn,$query);

        if($data)
        {
            echo
            "<sript>alert('Data inserted into Database');</script>";
        }

    }

    else
    {
        echo"<font color='red'>all fields are required";
    
    }
}

?>

