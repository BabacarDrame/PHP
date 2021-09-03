<DOCTYPE>
<html>
    <head>
        <title>Exercice2 php</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <p><em><b>NOMBRE ALEATOIRE</b></em></p>
        <form action="" method="POST">
        <input type="number" name="nbrsaisie">
        <input type="submit" name="submit" value="Envoyer">
        </form>
    <?php
        $nbrsaisie=$_POST["nbrsaisie"];
        $submit=$_POST["submit"];
        $nbre= random_int(1, 10);
        if(isset($submit)){
            if($nbrsaisie < $nbre){
                echo "le nombre à trouver est plus grand";
            }
            else{
                echo "le nombre a trouver est plus petit";
            }
        }

    ?>
    </body>
</html>
