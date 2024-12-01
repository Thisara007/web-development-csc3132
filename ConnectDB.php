<?php
//constant variables
define('SERVERNAME','localhost');
define('USERNAME','root');
define('PASSWORD','');
define('DBNAME','Students');

try {
    //code...
    $connect = mysqli_connect(SERVERNAME,USERNAME,PASSWORD,DBNAME);

if (!$connect) {
    die("Connection failed");
}
else{
    echo "Connected Succesfully";
}
echo "<br>";
} catch (Exception $e) {
    //throw $th;
    die($e ->getMessage());

}



?>