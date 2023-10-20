# How to Integrate `main.php` into Your Web Application

This guide will help you seamlessly integrate the `main.php` file into your existing PHP web application.

1. Create a new PHP file (e.g., `index.php`) or use an existing one.
2. Copy the following HTML structure into your PHP file:

```html
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Page</title>
</head>
<body>

<!-- Your existing header content -->

<?php
  // Include the main.php file from GitHub
  $main_url = 'https://raw.githubusercontent.com/vadym4che/php-examples-with-xampp/main/main.php';
  $main_content = file_get_contents($main_url);
  eval('?>' . $main_content);
?>

<!-- Your existing footer content -->

</body>
</html>
```

# Here layout responsive examples:

Width 1920px:

![width: 1920px](https://github.com/vadym4che/php-examples-with-xampp/blob/main/w1920.png)

Width 882px and 568px:
<div style="display: flex; height: 50vmin; width: 100%; align-items: center; justify-content: space-between;">
  <img src="https://github.com/vadym4che/php-examples-with-xampp/blob/main/w882.png" style="height: 50vmin; width: auto; margin: 0 auto;">
  <img src="https://github.com/vadym4che/php-examples-with-xampp/blob/main/w568.png" style="height: 50vmin; width: auto; margin: 0 auto;">
</div>