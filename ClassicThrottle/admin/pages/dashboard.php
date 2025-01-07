<?php include('../includes/navbar.html'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="../assets/css/admin.css"> <!-- Link to your CSS file -->
    <style>
        /* Additional CSS */
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #f4f4f4; /* Background color */
        }

        /* Styling for navbar */
        nav {
            position: sticky;
            top: 0;
            background-color: #333; /* Navbar color */
            color: #fff;
            padding: 10px 20px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
        }

        /* Wrapper for centered content */
        .content {
            display: flex;
            justify-content: center; /* Center horizontally */
            align-items: center; /* Center vertically */
            height: calc(100vh - 50px); /* Subtract navbar height */
            text-align: center;
        }

        #typewriter {
            font-family: 'Courier New', Courier, monospace;
            font-size: 3em; /* Text size */
            color: #333; /* Text color */
        }
    </style>
</head>
<body>
    
    <!-- Wrapper for content -->
    <div class="content">
        <div id="typewriter"></div> <!-- Typewriter effect -->
    </div>

    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
    <script>
        var typed = new Typed('#typewriter', {
            strings: ['Ayo Bekerja!', 'Semangat untuk mencapai tujuan!', 'Dashboard siap digunakan.'],
            typeSpeed: 60, // Typing speed
            backSpeed: 40, // Deleting speed
            loop: true // Loop effect
        });
    </script>

    <?php include('../includes/footer.html'); ?> <!-- Include footer -->
</body>
</html>
```php
<?php include('../includes/navbar.html'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="../assets/css/admin.css">
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
        }

        nav {
            position: sticky;
            top: 0;
            background-color: #333;
            color: #fff;
            padding: 10px 20px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
        }

        .content {
            display: flex;
            justify-content: center;
            align-items: center;
            height: calc(100vh - 50px);
            text-align: center;
        }

        #typewriter {
            font-family: 'Courier New', Courier, monospace;
            font-size: 3em;
            color: #333;
        }
    </style>
</head>
<body>
    <div class="content">
        <div id="typewriter"></div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
    <script>
        var typed = new Typed('#typewriter', {
            strings: ['Ayo Bekerja!', 'Semangat untuk mencapai tujuan!', 'Dashboard siap digunakan.'],
            typeSpeed: 60,
            backSpeed: 40,
            loop: true
        });
    </script>

    <?php include('../includes/footer.html'); ?>
</body>
</html>
