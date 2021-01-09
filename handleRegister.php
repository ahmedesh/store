<?php  
    session_start();
// getting data
    $username = $_POST['username'];
    $email    = $_POST['email'];
    $password = $_POST['password'];
    $phone    = $_POST['phone'];
    $facebook = $_POST['facebook'];
    $twitter  = $_POST['twitter'];
    $instgram = $_POST['instgram'];

    function cleanData($input){
        $input1 = htmlspecialchars($input);
        $input2 = trim($input1);
        return $input2;
    }

    $username = cleanData($username);
    $email    = cleanData($email);
    $password = cleanData($password);
    $phone    = cleanData($phone);
    $facebook = cleanData($facebook);
    $twitter  = cleanData($facebook);
    $instgram = cleanData($instgram);

// validation
$errors2 = array();
$valid = true;

    if(!filter_var($username , FILTER_SANITIZE_STRING) || $username == ' '){
        $errors2['username'] = ("$username is not valid username") . '</br>';
        $valid = false;
    }
    
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)|| $email == ' ' ) {
        $errors2['email'] = ("$email is not valid email address") . '</br>';
        $valid = false;
      }

      if($password == "" || !filter_var($password , FILTER_VALIDATE_REGEXP , array("options"=> array("regexp" => "/.{6,25}/" ))
                               ))
                        {
                            $errors2['password'] = ("$password is not valid password your password must be 6 digits");
                            $valid = false;
      }

      if(!preg_match("/^01[0-2]{1}[0-9]{8}$/" , $phone)){
        $errors2['phone'] = ("$phone is not valid phone address") . '</br>';
        $valid = false;
      }

      if(!filter_var($facebook , FILTER_VALIDATE_URL)){
        $errors2['facebook'] = ("$facebook is not valid Url of facebook ") . '</br>';
        $valid = false;
    }
    if(!filter_var($twitter , FILTER_VALIDATE_URL)){
        $errors2['twitter'] = ("$twitter is not valid Url of twitter") . '</br>';
        $valid = false;
    }
    if(!filter_var($instgram , FILTER_VALIDATE_URL)){
        $errors2['instgram'] = ("$instgram is not valid Url of instgram") . '</br>';
        $valid = false;
    }
      $_SESSION['errors2']=$errors2;
    if(isset($errors2)){
        header('loaction:register.php');
    }

      if($valid==true){
        $_SESSION['username'] =$username;
        $_SESSION['email']    =$email;
        $_SESSION['password'] =$password;
        $_SESSION['phone']    =$phone;
        $_SESSION['facebook'] =$facebook;
        $_SESSION['twitter']  =$twitter;
        $_SESSION['instgram'] =$instgram;
        
        header('location:home.php');
    }

?>