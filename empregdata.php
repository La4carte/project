<?PHP
$USERNAME = $_POST["USERNAME"];
$EMPLOEEYID = $_POST["EMPLOEEYID"];
$PASSWORD = $_POST["PASSWORD"];
$EMAIL = $_POST["EMAIL"];
$PHONE = $_POST["PHONE"];
$OFFICENUM = $_POST["OFFICENUM"];

$con = mysqli_connect("localhost","root","") or die("Erorr:can't connect to server");

$db = mysqli_select_db($con,"la carte")  or die("Erorr:can't connect to database");
$insertemploeey = "INSERT INTO emploeey_information (USERNAME,EMPLOEEYID,PASSWORD,EMAIL,PHONE,OFFICENUM) value ('$USERNAME','$EMPLOEEYID','$PASSWORD','$EMAIL','$PHONE','$OFFICENUM')";
$result = mysqli_query($con,$insertemploeey);
if($result)
{
    include('log-emp.php');
}



else
{
    die("erorr:".mysqli_errno($con));
}

 ?>