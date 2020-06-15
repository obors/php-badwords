<!-- Stampate a schermo il testo censurato all'interno di un paragrafo e la lunghezza del paragrafo stesso  che viene passata in GET con *** (*) (3 simboli di asterico)..
Nome repo: php-badwords (edited)  -->

<?php

  $badword = $_GET['badword'];

  $string = "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.";

  $new_string = str_replace($badword, '****', $string);


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>BadWord</title>
</head>
<body>

  <p><?php echo $string_replaced = str_replace($badword, '****', $string);?></p>

</body>
</html>
