<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<form action="form.php" method="post">
<div>
  <label for>Full Name</label>
  <input type="text" name="name">
</div>
<div>
  <label>Reg no</label>
  <input type="text" name="regno">
</div>
<div>
  <label>Age</label>
  <input type="text" name="age">
</div>
<div>
  <label>Course</label>
  <input type="text" name="course">
</div>
<input type="submit" value="send"><br>
<p><input type="reset" value="clear All">
</p>

</form>
<?php
require_once 'connectDB.php';

function AddData($connect,$name,$reg,$age,$course){
try{
    $sql="insert into students values('$name','$reg','$age','$course')";
    $result= mysqli_query($connect,$sql);
    if ($result) {
        echo "New student record created successfully";
    }else{
        die("error".mysqli_error($connect));
    }
}catch(Exception $e){
    die($e ->getMessage());
}
}
if($_SERVER['REQUEST_METHOD']== 'POST'){
    echo "get the post request from the client";
    $name=$_POST['name'];
    $reg=$_POST['regno'];
    $age=$_POST['age'];
    $course=$_POST['course'];

    Adddata($connect,$name,$reg,$age,$course);
}

?>


</body>
</html>