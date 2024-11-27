<?php 
$host = "localhost:3307";
$username = "root";
$password = "";
$dbname = "hackathon";

$conn = mysqli_connect($host, $username, $password, $dbname);

if (!$conn) {
    die("Sorry, you are not connected: " . mysqli_connect_error());
}

if (isset($_POST["Login"])) {
    $emailid = $_POST['email'];
    $pass = $_POST['pass'];

    
    $select="SELECT EMAIL,PASSWORD FROM SIGNUP WHERE EMAIL='$emailid' AND PASSWORD='$pass'";
$result=mysqli_query($conn,$select);

if(mysqli_num_rows($result)==1)
{
    echo "You are Logged IN";
}
else
{
    echo "Not Logged IN";
}


}

$conn->close();
?>
