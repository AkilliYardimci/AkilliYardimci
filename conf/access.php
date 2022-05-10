<?php 
try {
    $db=new PDO("mysql:host=localhost; dbname=taban7", 'root', '');
    
} catch (Exception $e) {
    echo $e->getMessage();
}

?>