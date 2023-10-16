<?php // getting all values from the HTML form

// database details
$host = "localhost";
$username = "root";
$password = "";
$dbname = "hmw";

// creating a connection
$con = mysqli_connect($host, $username, $password, $dbname);

// to ensure that the connection is made
if (!$con)
{
    die("Connection failed!" . mysqli_connect_error());
}
if(True){
    $name= $_POST['name'];
    $email= $_POST['email'];
    $subject= $_POST['subject'];
    $msg= $_POST['msg'];
    // using sql to create a data entry query
    $sql = "INSERT INTO contact(name,email,subject,msg) VALUES ('$name','$email','$subject','$msg')";
  
    // send query to the database to add values and confirm if successful
    $rs = mysqli_query($con, $sql);
    if($rs)
    {
        echo "Entries added!";
    }
}
  
    // close connection
    mysqli_close($con);

?>