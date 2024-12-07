<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert data</title>
</head>
<body>
<form action="day15.php" method="POST">
        <table>
            <tr>
                <td align="right">Id:</td>
                <td><input type="text" name="id" /></td>

            </tr>
            <tr>
                <td align="right">Name:</td>
                <td><input type="text" name="name" /></td>
            </tr>
            <tr>
                <td align="right">Age:</td>
                <td><input type="number" name="age" /></td>
            </tr>
            <tr>
                <td align="right">Course:</td>
                <td>
                    <select name="course">
                        <option value="ICT">ICT</option>
                        <option value="AMc">AMC</option>
                        <option value="CSC">CSC</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td > </td>
                <td > <input type="submit" value="Add a new student"/></td>
                    
            </tr>
        </table>
    </form>
    <?php
    require_once 'database.php';
    require_once 'database2.php';

   

    //echo "Hello";
    function AddData($connect,$id,$name,$age,$course){
    try{
        $sql="INSERT INTO students VALUES('$id','$name','$age','$course')";
        $result=mysqli_query($connect,$sql); 

        if($result){
            echo "New student record created successfully";
        }else{
            die("Error ".mysqli_error($connect));
        }
    }catch(Exception $e){
        die($e->getmessage());
    }
}
if($_SERVER['REQUEST_METHOD']=="POST"){
    //echo "Got the POST request for client";
    $id=$_POST['id'];
    $name=$_POST['name'];
    $age=$_POST['age'];
    $course=$_POST['course'];

    AddData($connect,$id,$name,$age,$course);
    //print_table("students",$connect,['id','name','age','course']);
}
    ?>
   
</body>
</html>