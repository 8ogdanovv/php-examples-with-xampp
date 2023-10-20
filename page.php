<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>some page</title>
</head>
<body>
  <header>HEADER</header>

  <?php
    // Include the main.php file from GitHub
    $main_url = 'https://raw.githubusercontent.com/vadym4che/php-examples-with-xampp/main/Main.php';
    $main_content = file_get_contents($main_url);
    eval('?>' . $main_content);
  ?>

  <footer>FOOTER</footer>
</body>
</html>