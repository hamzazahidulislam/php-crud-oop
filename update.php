<?php 
include  'inc/header.php' ;
include  "config.php" ;
include  "database.php" ;
?>
<?php 
$id=$_GET['id'];
$db = new Database(); //select query
$query="SELECT * FROM tbl_user WHERE id=$id";
$getData=$db->select($query)->fetch_assoc();

if ($_SERVER['REQUEST_METHOD']=='POST') {
if (isset($_POST['submit'])) {
 $name=	mysqli_real_escape_string($db->link,$_POST['name']);
 $email = mysqli_real_escape_string($db->link,$_POST['email']);
 $skill= mysqli_real_escape_string($db->link,$_POST['skill']);

 if ($name== '' || $email== '' || $skill== '') {
 	$error="Feild Must not be emty!!";
 }else{
 	//updata query
 	$query="UPDATE tbl_user
 	SET
 	name='$name',
    email='$email',
 	skill='$skill'
 	WHERE id=$id ";
 	$update=$db->update($query);
 }
}
}
//delete query
?>
<?php 
if ($_SERVER['REQUEST_METHOD']=='POST') {
	if(isset($_POST['delete'])){
     $query="DELETE FROM tbl_user WHERE id=$id";
     $deletedata=$db->delete($query);
	}
}

?>
<?php 
if (isset($error)) {
	echo "<span style='color:red'>".$error."</span>";
}
 ?>

<form action="update.php?id=<?php echo $id; ?>" method="POST">
<table >
	
	<tr>
		<td>Name</td>
		<td><input name="name"  type="text" value="<?php echo $getData['name'] ?>"></td>
	</tr>
		<tr>
		<td>Email</td>
		<td><input name="email"  type="email" value="<?php echo $getData['email'] ?>"></td>
	</tr>
		<tr>
		<td>Skill</td>
		<td><input name="skill"  type="text" value="<?php echo $getData['skill'] ?>"></td>
	</tr>

    <tr>
    	<td></td>
     <td>
    	<input type="submit" name="submit" value="Update">
    	<input type="reset"  value="Cancel">
    	<input type="submit" name="delete" value="Deleted">
    </td>
    </tr>
</table>
</form>
<a href="index.php">Go Back</a>