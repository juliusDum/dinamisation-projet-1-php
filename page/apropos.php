<?php
    session_start();
    include('../layout/head.php'); 
    include('../layout/header.php'); 
   
?>
    <main>
      <section id="slideshow"> 
         <?php include('../component/carousel.php'); ?>
      </section>
        <h2>A propos</h2>

        <div class="containerportfolioindex">
            <?php include('../component/apropos.php'); ?>
        </div>
    </main>
<?php include('../layout/footer.php'); ?>