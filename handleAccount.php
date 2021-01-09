<?php 
    session_start();
    // getting data
    $email = $_POST['email'];
    $password = $_POST['password'];
    // echo 'your email is:  ' . $email . '<br>' . ' and your password is:  ' . $password;

    // clean data
    function cleanData($input){
        $input1 = htmlspecialchars($input);
        $input2 = trim($input1);
        return $input2;
    }
    $email = cleanData($email);
    $password = cleanData($password);

    // validation

    $errors = [];
    $valid = true;
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors['email'] = ("$email is not valid email address") . '</br>';
        $valid = false;
      }

      if($password == "" || !filter_var($password , FILTER_VALIDATE_REGEXP , array("options"=> array("regexp" => "/.{6,25}/" ))
                               ))
                        {
                            $errors['password'] = ("$password is not valid password your password must be 6 digits");
                            $valid = false;
      }
      $_SESSION['errors'] = $errors;
      if(isset($_SESSION['errors'])){
          header('location:account.php');
      }
      if($valid==true){
          $_SESSION['email']=$email;
          $_SESSION['password']=$password;
          header('location:products.php');
      }
 ?>