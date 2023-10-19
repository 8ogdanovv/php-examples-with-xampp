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
  $main_url = 'https://raw.githubusercontent.com/vadym4che/turbo-web/main/main.php';
  include $main_url;
?>

<!-- Your existing footer content -->

</body>
</html>
```

# Here layout responsive examples:

Width 1920px:

![width: 1920px](https://github.com/vadym4che/turbo-web/blob/main/w1920.png)

Width 568px:

<img src="https://github.com/vadym4che/turbo-web/blob/main/w568.png" style="height: 50vmin; width: auto;">