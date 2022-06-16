<?php
    session_start();
    error_reporting(E_ALL ^ E_NOTICE);
?>
<form class="nom" action="login.php" method="post">
            <?php
                $returnCode = $_GET["code"];
                if ( $returnCode === "0" )
                {
                    echo ("<div class='erreur'>Nom d'utilisateur ou mot de passe incorrect</div>");
                }
            ?>

        <div>
            <label for="">Nom d'utilisateur :</label>
            <input name="login" class="name-input" type="text">
        </div>

        <div>    
            <label label for="">Mot de passe :</label>
            <input name="password" class="pass-input" type="password">
        </div>
            
        <div class="bouton">
            <button type="submit">Envoyer</button>
        </div>

        </form>