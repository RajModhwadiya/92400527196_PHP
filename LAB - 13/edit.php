<?php
include 'database.php';

$id = $_GET['id'];

$sql = "SELECT * FROM login WHERE id='$id'";
$result = mysqli_query($conn,$sql);

$row = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Record</title>
</head>
<body>

<h2>Edit Record</h2>

<form action="update.php" method="post">

<input type="hidden" name="id" value="<?php echo $row['ID']; ?>">

Name :
<input type="text" name="name" value="<?php echo $row['Name']; ?>">
<br><br>

Password :
<input type="text" name="password" value="<?php echo $row['Password']; ?>">
<br><br>

Phone No :
<input type="text" name="phone" value="<?php echo $row['Phone_no']; ?>">
<br><br>

<input type="submit" value="Update">

</form>

</body>
</html>