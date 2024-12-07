
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get details of student</title>
</head>
<body>
    <?php
        require_once 'myfunc.php';
        require_once 'database.php';

        get_student($connect);
    ?>
</body>
</html>