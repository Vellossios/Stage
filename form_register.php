<?php
    session_start();
    error_reporting(E_ALL ^ E_NOTICE);
?>
<form class="nom" action="register.php" method="post">

    <?php
        $returnCode = $_GET["code"];
        if ($returnCode === "0")
        {
            echo ("<div class='erreur'>Mots de passes différents</div>");
        }

        if ($returnCode === "2")
        {
            echo ("<div class='erreur'>Nom d'utilisateur déjà pris</div>");
        }
    ?>

        <div class="crecompte"><?php
            echo ("Création d'un nouveau compte")
        ?></div>

        <div>
            <label for="">Nom d'utilisateur :</label>
            <input name="login" class="name-input" type="text">
        </div>

        <div>    
            <label label for="">Mot de passe :</label>
            <input name="password" class="pass-input" type="password">
        </div>

        <div>    
            <label label for="">Répetez le mot de passe :</label>
            <input name="password-repeath" class="pass-input" type="password">
        </div>
            
        <div class="bouton">
            <button type="submit">Envoyer</button>
        </div>

        </form>