<?php
session_start();
include('../layout/head.php');
include('../layout/header.php');
include('../controller/controller.php');
if($_POST){
    $error = array();
    if(empty($_POST['username'])){
        $error['username'] = "Username est obligatoire";
    }
    if(empty($_POST['password'])){
        $error['password'] = "Password est obligatoire";
    } else {
        getLoginAuth($_POST);
    }
  } 
?>
<form class='login' method="post">
   <div class="imgcontainer">
     <img src="https://media2.giphy.com/media/D8b6BVfuRZjUY/giphy.gif?cid=ecf05e4769c38a540255f1b6ac2a3f6fd3fc4b4be51b32e2&rid=giphy.gif" alt="Avatar" class="avatar">
   </div>
 
   <div class="logcontainer">
     <label for="username">Username</label>
     <input type="pseudo" placeholder="Username" name="username">
     <?php if(isset($error['username'])) echo $error['username']; ?>
      <br>
      <br>
     <label for="password">Password</label>
     <input type="password" placeholder="Password" name="password">
     <?php if(isset($error['password'])) echo $error['password']; ?>
     <br>
     <br>
     <button type="submit">Login</button>
   </div>
 </form>
 <?php include('../layout/footer.php'); ?>