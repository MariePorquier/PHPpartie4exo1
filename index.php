<?php
//déclaration de la variable age
$gender = 'les folles!!!';
?>
<!DOCTYPE html>
<html lang=fr dir="ltr">
  <head>
    <meta charset="utf-8" />
    <title>PHP Partie 4 Exo 1</title>
  </head>
  <body>
    <?php
    function gender($hello)
    {
      return $hello;
    }
    //Affiche : Hello + les folles
    echo gender('Hello ' .  $gender);
    ?>
  </body>
</html>
