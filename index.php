<!DOCTYPE html>
<html lang="FR">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="assets/css/style.css">
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <title>PHP Partie 11 exercice 1</title>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div align="center">
                        <h1 align="center">PHP Partie 11 exercice 1</h1>
                        <p class="text">Exercice 1</p>
                        <p class="text">Compléter le fichier fourni pour que la calculatrice fonctionne.</p>
                        <p><b>Bonus :</b> Ajouter un bouton de remise à zéro.</p>                    
                        <h1>Une calculatrice en PHP</h1>
                        <form action="" method="POST">
                            <input type="number" name="chiffre1" value=""/>
                            <input type="number" name="chiffre2" value=""/>
                            <input type="reset" value="reset" />
                            <input type="submit" name="addition" value="+"/>
                            <input type="submit" name="soustraction" value="-"/>
                            <input type="submit" name="multiplication" value="*"/>
                            <input type="submit" name="division" value="/"/>
                        </form>
                        <p>Résultat : 
                            <?php
        $result = 0;
        if (isset($_POST['division']) &&  $_POST['chiffre2'] == 0) {
    $result = 'Division impossible t\'es con ou tu l\'fais exprès ?';
                }else{     
        if (isset($_POST['chiffre1']) && isset($_POST['chiffre2'])) {
            if (isset($_POST['addition'])) {
                $result = $_POST['chiffre1'] + $_POST['chiffre2'];
                
            }elseif (isset($_POST['soustraction'])) {
                $result = $_POST['chiffre1'] - $_POST['chiffre2'];
                
            } elseif (isset($_POST['multiplication'])) {
                $result = $_POST['chiffre1'] * $_POST['chiffre2'];
                
            } elseif (isset($_POST['division'])) {
                $result = $_POST['chiffre1'] / $_POST['chiffre2'];
            }
        }
                }     
        if (isset($_POST['reset'])) {
            $_POST['chiffre1'] = 0;
            $_POST['chiffre2'] = 0;
        }
        ?>
<p>Résultat : <?= $result; ?></p>
                        </p>
                        </body>
                        </html>

