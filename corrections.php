<?php
/*first create a new PDO object with the data source name, user, passsword. The PDO object is an instance of the PDO class.
PDO uses a data source name (DSN) that contains the following information:*/



//The database server host
$host = 'localhost'; 
//The database name
$db = 'mynewdata'; 
//The user
$user = 'root';
//The password
//wamp users 
//$password = '';
//mamp 
$password = 'root'; 
$dsn = "mysql:host=$host;dbname=$db"; //using host=$host will tell the dsn that we are putting host value from the $host variable. Directly doing that can cause problems


//error handling with try catch blocks 
try {
    $conn = new PDO ($dsn, $user, $password); //an extra comma was present at the end so removed it
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
    echo "<p> Successfully connected! </p>"; 
}
catch(Exception $e) {
    echo "<p> Unable to establish a connection :" . $e->getMessage() . "</p>";    //the double quotes were to be added and And the sementic element 
                                                                                  //was to added
}

?>            //had no closing of php tag.........

/*Error handling strategies
PDO supports three different error handling strategies:

PDO::ERROR_SILENT – PDO sets an error code for inspecting using the PDO::errorCode() and PDO::errorInfo() methods. The PDO::ERROR_SILENT is the default mode.
PDO::ERRMODE_WARNING – Besides setting the error code, PDO will issue an E_WARNING message.
PDO::ERRMODE_EXCEPTION – Besides setting the error code, PDO will raise a PDOException.*/

/*To set the error handling strategy, you can pass an associative array to the PDO constructor like this:

$pdo = new PDO($dsn, $user, $password, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
Code language: PHP (php)
Or you can use the setAttribute() method of the PDO instance:*/
