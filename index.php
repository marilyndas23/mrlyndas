<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Marilyn's IT Portfolio</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <nav>
        <div class="logo">MD Portfolio</div>
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Skills</a></li>
            <li><a href="#">Projects</a></li>
        </ul>
    </nav>

    <header>
        <h1>Marilyn G. Dasalla</h1>
        <p>BSIT 3A Student | Future Web Developer</p>
    </header>

    <section id="skills">
        <h2>Technical Skills</h2>
        <div class="skills-grid">
            <span>PHP</span>
            <span>CSS/HTML</span>
            <span>Django</span>
            <span>IoT (ESP32)</span>
        </div>
    </section>

    <section id="csv-importer">
        <h2>Database CSV Importer</h2>
        <form action="#" method="post" enctype="multipart/form-data">
            <input type="file" name="csv_file" accept=".csv">
            <button type="submit">Import Data</button>
        </form>
    </section>
</body>
</html>
