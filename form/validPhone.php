<?php

    include '../admin/classes/Crud.php';

    $crud = new Crud();

    $check = $_GET['check'];

    $mobileregex = "/^[6-9][0-9]{9}$/" ; 

    if (preg_match($mobileregex, $check)<1) {

       echo "invalid";
       
    } else {
        $res = $crud -> Count('emp_register', " `mobile` = '$check'");

        if ($res > 0) {

            echo "Not available";

        } else {

            echo "Available";

        }
    }


    

?>