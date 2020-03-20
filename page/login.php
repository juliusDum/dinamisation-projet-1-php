<?php
include('../controller/controller.php');
if(isset($_POST)) {
    if(empty($_POST['username'])){
        $error['username'] = "** Username est obligatoire";
    }
    if(empty($_POST['password'])){
        $error['password'] = "** Password est obligatoire";
    } else {
        getLoginAuth($_POST);
    }
  } 
?>
<?php
session_start();
include('../layout/head.php');
include('../layout/header.php');
?>
<form class='login' method="post">
   <div class="imgcontainer">
     <img src="https://media2.giphy.com/media/D8b6BVfuRZjUY/giphy.gif?cid=ecf05e4769c38a540255f1b6ac2a3f6fd3fc4b4be51b32e2&rid=giphy.gif" alt="Avatar" class="avatar">
   </div>
 
   <div class="logcontainer">
     <label for="username">Username</label>
     <input type="pseudo" placeholder="Username" name="username" required>
 
     <label for="password">Password</label>
     <input type="password" placeholder="Password" name="password" required>
 
     <button type="submit">Login</button>
   </div>
 </form>
 <?php include('../layout/footer.php'); ?>