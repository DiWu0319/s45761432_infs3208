<?php
// Establish Connection to Database
function connect() {
    static $conn;
    if ($conn === NULL){ 
        $conn = mysqli_connect('mysql','php','php','socialnetwork');
    }
    return $conn;
}

?>