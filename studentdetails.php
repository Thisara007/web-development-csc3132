<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Detailsa</title>
</head>
<body>
    <?php
    require_once 'database.php';
    require_once 'myfunc.php';
    echo "Student Details";

    $id=$_GET['id'];
    getstudentdetails($id,$connect);

    ?>
</body>
</html>