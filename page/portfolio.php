<?php 
session_start();
include('../layout/head.php');
include('../layout/header.php');
?>
        <main>
        <h2>Portfolio</h2>
        <div class="containerportfolio">
            <?php include('../component/portfolio.php'); ?>
        </div>
        </main>
<?php include('../layout/footer.php'); ?>        