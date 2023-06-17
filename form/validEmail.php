<?php

    include '../admin/classes/Crud.php';

    $crud = new Crud();

    $checkEmail = $_GET['email'];
    

    if (filter_var($checkEmail, FILTER_VALIDATE_EMAIL)==false)  {
        
        echo("invalid");
     
     } else {
            
        $res = $crud -> Count('emp_register', " `email` = '$checkEmail'");

    if ($res > 0) {

        echo "already exists";

    } else {

        echo "available";

    }
}

    

?>