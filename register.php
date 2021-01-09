<?php  

    // session_start();   مش هعملها هنا عشان انا عاملها ف ملف النافبار وانا مستدعي ملف النافبار هنا اصلا

$navbar = '' ;
include 'init.php';

    if(isset($_SESSION['errors2'])){
            foreach($_SESSION['errors2'] as $error){
                echo '<div class="alert alert-danger" role="alert">
                ' . $error . '
               </div>';
            }
    }

?>

<div class="container mt-5">
    <form class='form-group' method='post' action="handleRegister.php">

    <input class='form-control' type="text"     name='username' placeholder='enter your username'><br>
    <input class='form-control' type="text"     name='email'    placeholder='enter your email'      ><br>
    <input class='form-control' type="password" name='password' placeholder='enter your password'><br>
    <input class='form-control' type="text"     name='phone'    placeholder='enter your phone'      ><br>
    <input class='form-control' type="text"     name='facebook' placeholder='enter your facebook'><br>
    <input class='form-control' type="text"     name='twitter'  placeholder='enter your twitter'  ><br>
    <input class='form-control' type="text"     name='instgram' placeholder='enter your instgram'><br>

    <input class='btn btn-success' type="submit" value='update' >

    </form>
</div>