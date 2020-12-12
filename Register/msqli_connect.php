<?php
// define variables
define('DB_NAME','shopee');
define('DB_USERNAME','root');
define('DB_PASSWORD','');
define('DB_HOST','localhost');

try{
        // connection variable
        $con = new mysqli(DB_HOST,DB_USERNAME,DB_PASSWORD,DB_NAME);

        // encoded language
        mysqli_set_charset($con,'utf8');
}catch(Exception $e){
    print "An Exception occured. Message: ".$e->getMessage();

}catch(Error $e){
    print "The server is busy please try again later";
}


?>