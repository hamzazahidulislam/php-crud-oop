<?php 
include  'inc/header.php' ;
include  "config.php" ;
include  "database.php" ;
?>
<?php 
$db = new Database();
if ($_SERVER['REQUEST_METHOD']=='POST') {
if (isset($_POST['submit'])) {
 $name=	mysqli_real_escape_string($db->link,$_POST['name']);
 $email = mysqli_real_escape_string($db->link,$_POST['email']);
 $skill= mysqli_real_escape_string($db->link,$_POST['skill']);
 if ($name== '' || $email== '' || $skill== '') {
 	$error="Feild Must not be emty!!";
 }else{
 	$query="INSERT INTO tbl_user(name,email,skill)VALUES('$name','$email','$skill')";
 	$crate=$db->insert($query);
 }
}

}
?>

<?php 
if (isset($error)) {
	echo "<span style='color:red'>".$error."</span>";
}
 ?>

<form action="crate.php" method="POST">
<table >
	
	<tr>
		<td>Name</td>
		<td><input name="name" required type="text" placeholder="Enter your Name"></td>
	</tr>
		<tr>
		<td>Email</td>
		<td><input name="email" required type="email" placeholder="Enter your Email"></td>
	</tr>
		<tr>
		<td>Skill</td>
		<td><input name="skill" required type="text" placeholder="Enter your skill"></td>
	</tr>

    <tr>
    	<td></td>
     <td>
    	<input type="submit" name="submit" value="submit">
    	<input type="reset"  value="Cancel">
    </td>
    </tr>
</table>
</form>
<a href="index.php">Go Back</a>