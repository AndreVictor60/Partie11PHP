<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8"/>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"/>
        <link rel="stylesheet" href="style.css"/>
        <title>Exercice 1 Partie 11</title>
    </head>
    <body>
        <div class="container-fuild">
            <h1>Une calculatrice en PHP</h1>
            <form action="index.php" method="post">
                <input type="text" name="chiffre1" value="0"/>
                <input type="text" name="chiffre2" value="0"/>
                <input type="submit" name="addition" value="+"/>
                <input type="submit" name="soustraction" value="-"/>
                <input type="submit" name="multiplication" value="*"/>
                <input type="submit" name="division" value="/"/>
                <input type="submit" name="reset" value="Remise a zéro"/>
            </form>
            <p>Résultat :
                <?php
                // Si input addition est activer
                if (isset($_POST['addition'])) {
                    // Si les deux posts ne sont pas vide
                    if (isset($_POST['chiffre1']) && isset($_POST['chiffre2'])) {
                        // Récupere les posts dans des variables
                        $chiffre1 = $_POST['chiffre1'];
                        $chiffre2 = $_POST['chiffre2'];
                        //Si les deux variables sonr des int
                        if (is_numeric($chiffre1) && is_numeric($chiffre2)) {
                            // Variable résult est égal a chiffre1 + chiffre2
                            $result = $chiffre1 + $chiffre2;
                            //Afficher variable result
                            echo $result;
                        } else {
                            echo 'Veuillez saisir un chiffré';
                        }
                    }
                }
                if (isset($_POST['soustraction'])) {
                    if (isset($_POST['chiffre1']) && isset($_POST['chiffre2'])) {
                        $chiffre1 = $_POST['chiffre1'];
                        $chiffre2 = $_POST['chiffre2'];
                        if (is_numeric($chiffre1) && is_numeric($chiffre2)) {
                            $result = $chiffre1 - $chiffre2;
                            echo $result;
                        } else {
                            echo 'Veuillez saisir un chiffré';
                        }
                    }
                }
                if (isset($_POST['multiplication'])) {
                    if (isset($_POST['chiffre1']) && isset($_POST['chiffre2'])) {
                        $chiffre1 = $_POST['chiffre1'];
                        $chiffre2 = $_POST['chiffre2'];
                        if (is_numeric($chiffre1) && is_numeric($chiffre2)) {
                            $result = $chiffre1 * $chiffre2;
                            echo $result;
                        } else {
                            echo 'Veuillez saisir un chiffré';
                        }
                    }
                }
                if (isset($_POST['division'])) {
                    if (isset($_POST['chiffre1']) && isset($_POST['chiffre2'])) {
                        $chiffre1 = $_POST['chiffre1'];
                        $chiffre2 = $_POST['chiffre2'];
                        if (is_numeric($chiffre1) && is_numeric($chiffre2)) {
                            $result = $chiffre1 / $chiffre2;
                            echo $result;
                        } else {
                            echo 'Veuillez saisir un chiffré';
                        }
                    }
                }
                if (isset($_POST['reset'])) {
                    unset($_POST);
                }
                ?>
            </p>
        </div>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    </body>
</html>
