<?php
include('layout/head.php');
include('layout/header.php');
include('controller/controller.php');
if(isset($_POST['logout'])){
  getUserLogout();
} ?>

<?php include('layout/footer.php');
?>