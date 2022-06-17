<?php
    session_start();
    error_reporting(E_ALL ^ E_NOTICE);
?>
<!DOCTYPE html>
    <head>
		<meta charset="utf-8" />
		<title>Programmation</title>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="https://cdn.jsdelivr.net/npm/jquery.md5@1.0.2/index.js"></script>
       <style>
            input[type=number]::-webkit-outer-spin-button,
            input[type=number]::-webkit-inner-spin-button{-webkit-appearance:none;margin:0;}
            input[type=number]{-moz-appearance:textfield;}

            body
            {
                background-color: black;
                color: #3bff21;
                font-family: ISOCT;
                padding: 30px;
            }
            
            form
            {
                display: flex;
                white-space: nowrap;
                flex-direction: column;
            }

            form > div
            {
                display: flex;
                margin-bottom: 10px;
            }
            
            .bouton
            {
                display: none;
            }

            .result
            {
                font-style: italic;
            }

            input
            {
                background-color: black;
                color: lime;
                outline: none;
                font-family: ISOCT;
                display: block;width:100%;
                border: none;
                padding-left: 10px;
            }

            @keyframes question
            {
                    0%{opacity: 0;}
                    100%{opacity: 1;}
            }


            h1 span
            {
                display:inline-flex;
                align-items: flex-end;
            }
            
            h1 span span
            {
                display:inline-block;
                animation: hacking 4s infinite linear;
                overflow:hidden;
                white-space:nowrap;
                height:100%
            }

            @keyframes hacking
            {
                0%{width:0%}
                25%{width:33.33%}
                50%{width:66.66%}
                75%{width:100%}
                100%{width:100%}
            }

            .neon
            {
                animation: neon 10s infinite linear;
            }

            @keyframes neon
            {
                0%{color: blue;}
                12.5%{color: purple;}
                25%{color: red;}
                37.5%{color: magenta;}
                50%{color: orange;}
                62.5%{color: yellow;}
                75%{color: lime;}
                87.5%{color: aqua;}
                100%{color: blue;}
            }

            .inscr
            {
                color: lime;
                text-decoration: none;
                position: relative;
                top: -25px;
            }

            .crecompte
            {
                text-decoration: underline red;
            }

            .erreur
            {
                color: red;
            }

            .logo
            {
                min-width: 1330px;
            }

        </style>
	</head>
	<body>
        <div class="neon">
            <p class="logo">
            '##::::'##:'########:'##:::::::'##::::::::'#######:::'######:::'######::'####::'#######:::'######::<br>
            &nbsp;##:::: ##: ##.....:: ##::::::: ##:::::::'##.... ##:'##... ##:'##... ##:. ##::'##.... ##:'##... ##:<br>
            &nbsp;##:::: ##: ##::::::: ##::::::: ##::::::: ##:::: ##: ##:::..:: ##:::..::: ##:: ##:::: ##: ##:::..::<br>
            &nbsp;##:::: ##: ######::: ##::::::: ##::::::: ##:::: ##:. ######::. ######::: ##:: ##:::: ##:. ######::<br>
            . ##:: ##:: ##...:::: ##::::::: ##::::::: ##:::: ##::..... ##::..... ##:: ##:: ##:::: ##::..... ##:<br>
            :. ## ##::: ##::::::: ##::::::: ##::::::: ##:::: ##:'##::: ##:'##::: ##:: ##:: ##:::: ##:'##::: ##:<br>
            ::. ###:::: ########: ########: ########:. #######::. ######::. ######::'####:. #######::. ######::<br>
            :::...:::::........::........::........:::.......::::......::::......:::....:::.......::::......:::<br>
            </p>
        </div>
        <h1>hacking<span><span>...</span></span></h1>
        <?php if ($_GET["page"]!="register" && empty($_SESSION['login'])) 
        { 
            ?> <a href="index.php?page=register" class="inscr">Inscription</a> <?php 
        } ?>

            <?php
                if (!empty($_SESSION['login']))
                {
                    ?> <br> <?php echo ("Bienvenue " . $_SESSION["login"]);
                    ?>
                    <br><a href="logout.php">Déconnexion</a>
                    <br><img src="JPEG/Matrix.JPEG">
                    <?php
                }
                else
                {
                    if ($_GET["page"]=="register")
                    {
                         include "form_register.php";
                    }

                    else
                    {
                        include "form_login.php";
                    }
                }
            ?>
    </body>
</html>