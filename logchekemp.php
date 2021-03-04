<?PHP

$EMPLOEEYID = $_POST["EMPLOEEYID"];
$PASSWORD = $_POST["PASSWORD"];


$con = mysqli_connect("localhost","root","") or die("Erorr:can't connect to server");

$db = mysqli_select_db($con,"la carte")  or die("Erorr:can't connect to database");
$login = "SELECT EMPLOEEYID ,PASSWORD FROM emploeey_information WHERE EMPLOEEYID='$EMPLOEEYID' and PASSWORD='$PASSWORD' ";
$result = mysqli_query($con,$login);

$count = mysqli_num_rows($result);
if($count == 1)
{
include('home.php');
}
 ?>