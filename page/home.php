<?php include('../layout/head.php'); ?>
<?php include('../layout/header.php'); ?>
 <form class='login' action="action_page.php" method="post">
   <div class="imgcontainer">
     <img src="https://media2.giphy.com/media/D8b6BVfuRZjUY/giphy.gif?cid=ecf05e4769c38a540255f1b6ac2a3f6fd3fc4b4be51b32e2&rid=giphy.gif" alt="Avatar" class="avatar">
   </div>
 
   <div class="logcontainer">
     <label for="uname">Username</label>
     <input type="text" placeholder="Username" name="uname" required>
 
     <label for="psw">Password</label>
     <input type="password" placeholder="Password" name="psw" required>
 
     <button type="submit">Login</button>
   </div>
 </form>
 </body>
<?php include('../layout/footer.php'); ?>