<?php if($_POST){
    $errors = array();
    if(empty($_POST['sex'])){
        $errors['sex'] = "Select your sex";
      }
    if(empty($_POST['name'])){
      $errors['name'] = "Your name is required";
    }
    if(empty($_POST['email'])){
      $errors['email'] = "Your email is required";
    }
    if(empty($_POST['objet'])){
      $errors['objet'] = "Your motif is required";
    }
    if(empty($_POST['message'])){
      $errors['message'] = "Your message is required";
    }
  }
?>
<?php 
    if(isset($_POST)){
        var_dump($_POST);
        $to = "jules.dumas94@gmail.com";
        $from = "jules.testphp@gmail.com";
        $email = $_POST['email'];
        $message = $_POST['message'];
        $subject = "New message from contact Roquet Raccoon";
        $content = "Le message suivant vient de la galaxie" .$message ."email de contact: " .$email;
        $headers = "From" .$from;
        mail($to, $subject, $content, $headers);
        echo 'votre message est bien parti pour la galaxie';
    }
?>

<h2>Nous contacter</h2> 
                <div class="contact" >
                    <div class="table"> 
                        <form class="form-style-7" method="POST">
                        <ul>
                            <li>
                                <label for="sexe"></label>
                                <select name="select">
                                    <option>sex</option>
                                    <option>Femme</option>
                                    <option>Homme</option>
                                </select>
                                <?php if(isset($errors['sex'])) echo $errors['sex']; ?>
                            </li>
                            <li>   
                                <label for="name">Nom</label>
                                <input type="text" name="name" maxlength="100">
                                <?php if(isset($errors['name'])) echo $errors['name']; ?>
                            </li>
                            <li>
                                <label for="email">Email</label>
                                <input type="email" name="email" maxlength="100">
                                <?php if(isset($errors['email'])) echo $errors['email']; ?>
                            </li>
                            <li>
                                <label for="subject">Objet</label>
                                <input type="text" name="objet" maxlength="100">
                                <?php if(isset($errors['objet'])) echo $errors['objet']; ?>
                            </li>
                            <li>
                                <label for="bio">Message</label>
                                <textarea name="message" onkeyup="adjust_textarea(this)"></textarea>
                                <?php if(isset($errors['message'])) echo $errors['message']; ?>
                            </li>
                            <li>
                                <input type="submit" value="Envoyer">
                            </li>
                        </ul>
                        </form> 
                        <div class="sociaux">
                            <a href="https://www.facebook.com" title="Facebook" target="_blank" class='logo'> <img class='logo' src="http://www.chromatotherapie-suisse.ch/wp-content/uploads/2017/02/logofacebook.png" alt="facebook"> </a>
                            <a href="https://www.instagram.com" title="instagram" target="_blank" class="logo" > <img class='logo' src="https://images.squarespace-cdn.com/content/v1/5bd637a051f4d49caf7e9449/1558650063830-4I62WQ8L4B2A01G4LRX4/ke17ZwdGBToddI8pDm48kA8xmmDawoWDb9mdCPDpNAJZw-zPPgdn4jUwVcJE1ZvWhcwhEtWJXoshNdA9f1qD7UAwRg-drVjy0tH40Gqh4FOZVR7VmXOKojbP-q8ezsd3iPCFEAGD2_aIfrHWDP9vjQ/logo-charte-graphique-instagram-branding.png?format=300w" alt="instagram" ></a>
                            <a href="https://www.twitter.com" title="twitter" target="_blank" class="logo" > <img class='logo' src="https://iutv.univ-paris13.fr/wp-content/uploads/logo-rond-twitter.png" alt="twitter" ></a>
                            <a href="https:///www.snapchat.com" title="snapchat" target="_blank" class="logo" > <img class='logo' src="https://www.mpa-pro.fr/resize/360x360/zc/3/f/0/src/sites/mpapro/files/products/d11457.png" alt="snapchat" ></a>
                            <a href="https://www.youtube.com/?hl=fr&gl=FR" title="youtube" target="_blank" class="logo" > <img class='logo' src="https://upload.wikimedia.org/wikipedia/commons/b/b2/YouTube_logo_%282013-2015%29.png" alt="youtube" ></a>
    
                        </div>
                    </div>
                </div>   