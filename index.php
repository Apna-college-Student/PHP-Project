<?php
// This is a simple PHP snippet
$greeting = "Welcome to my PHP, CSS, and JavaScript Website!";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP, CSS & JS Website</title>
    <link rel="stylesheet" href="style.css"> <!-- Link to external CSS -->
    <script src="script.js" defer></script> <!-- Link to external JS -->
</head>
<body>
    <header>
        <h1><?php echo $greeting; ?></h1>
    </header>

    <main>
        <section>
            <h2>About This Website</h2>
            <p>This webpage uses PHP for dynamic content, CSS for styling, and JavaScript for interactivity.</p>
        </section>

        <section>
            <h2>Click the Button for an Alert</h2>
            <button id="alertButton">Click Me!</button>
        </section>
    </main>

    <footer>
        <p>&copy; 2025 My PHP, CSS, and JavaScript Website</p>
    </footer>
</body>
</html>
