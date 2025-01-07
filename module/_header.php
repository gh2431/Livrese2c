<header>
    <img src="../asset/logo.png" alt="logo e2c" id="e2c">
    <div id="titres">
        <h1><?=$title ?></h1>
        <h2><?=$subtitle ?></h2>
    </div>
    <div id="logform">
        <?php
            if(isset($_POST["username"])){
                $username = $_POST["username"]
            ?>
                <p><?= "Bonjour $username"?></p>
            <?php
            }else{
            ?>
        <form method="post" action="../controller/loginController.php" id="login-form">
            <div class="form-line">
                <label for="email">Votre nom</label>
                <input type="email" id="email" name="email" require>
            </div>
            <div class="form-line">
                <label for="password">mot de passe</label>
                <input type="password" name="password" id="password" require>
            </div>
            <div class="form-line">
                <input type="submit" value="Se connecter" class="login-bouton">
            </div>
        </form><?php
            }?>
    </div>
</header>