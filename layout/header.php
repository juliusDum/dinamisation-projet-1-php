<header>
  <ul class="navbar">
    <li><a href="../index.php">Home</a></li>
    <?php
    if (empty($_SESSION['isConnected']) && empty($_SESSION['username'])) { ?>
      <li>
        <a href="../page/login.php">Log</a>
      </li>
    <?php } else { ?>
      <li>
        <a href="../page/portfolio.php">Portfolio</a>
      </li>
      <li>
        <a href="../page/contact.php">Contact</a>
      </li>
    <?php } ?>
    <?php
    if(isset($_SESSION['isConnected']) && $_SESSION['isConnected'] === true) {
  ?>
   <form method='POST' action='../index.php' class='logout'>
     <button class="logout" type='submit' name='logout'>Logout</button>
   </form>
  <?php } else { echo '';} ?>
  </ul>
  <h1 class="big_title">Roquet Raccoon</h1>
</header>