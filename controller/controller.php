<?php
 function getLoginAuth($form){
    if (!empty($form['password']) && !empty($form['username']) && $form['password'] === '1993') {
        $_SESSION['username'] = $form['username'];
        $_SESSION['isConnected'] = true;
    if($_SESSION['isConnected'] === true){
            Header('Location: http://localhost:8000/page/portfolio.php');
        }    
    } else {
        return $errors['password'] = "Please enter 1993 password to try our app !";
    }
}
?>

<?php
    function getUserLogout(){
        unset($_SESSION['isConnected']);
        unset($_SESSION['username']);
        return session_destroy();
    }
?>
