<?php 
session_start();

   include("../admin/classes/Crud.php");
   $crud = new Crud();
   date_default_timezone_set("Asia/Kolkata");
   $today = date("Y-m-d");
   $time = date("H:i:s");

  
if(isset($_POST['participantSubmit'])){
    extract($_POST);
    $password=$_POST['password'];
    $salt = '}#f4ga~g%7hjg4&j(7mk?/!bj30ab-wi=6^7-$^R9F|GK5J#E6WT;IO[JN'; // random string
    $hash = hash('sha512', $password . $salt);


      $countPhone = $crud->Count("emp_register","`mobile`='$mobile'");

      $countEmail = $crud->Count("emp_register","`email`='$email'");

     if ($countPhone>0) {
         $_SESSION['phoneMessage']= 'Phone Number Exists!';
        echo '<script>window.location.assign("../newregister.php");</script>';
    }  if ($countEmail>0) {
        $_SESSION['emailMessage']= 'Email Already Exists!';
        echo '<script>window.location.assign("../newregister.php");</script>';
    } 
      

        else {

                $data = [
                    'fullname' =>$name,
                    'email' =>$email,
                    'mobile' =>$mobile,
                    'password'=>$hash,
                    'state'=>$select,
                    'date_submitted' =>$today,
                    'submit_time'=>$time,
                    
                    
                ];
               
                $create = $crud->Create($data,"emp_register");

                if($create) {
                    echo '<script>window.location.assign("../success.php");</script>';
                      
                 

                }
                

             else {
                $_SESSION['message']= "Sorry, there was an error uploading your file.";
                echo '<script>window.location.assign("../newregister.php");</script>';
            }
        }
    
}
?>