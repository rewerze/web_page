<!DOCTYPE html>
<html lang="hu">

<head>
    <title>Főoldal</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./assets/css/style.css">

    <!-- JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="./assets/js/script.js"></script>
</head>

<body>
    <div class="w3-animate-opacity w3-animate-bottom">
        <!-- NAV -->
        <?php
        $title = "Főoldal";
        include "./nav.php";
        ?>

        <div class="container">
            <h1>Mi is ez az oldal?</h1>
            <p>Ez az oldal egy <b>személyes projekt,</b> ami kifejezetten gyakorlás céljából készült és folyamatosan
                fejlődik.
                A <a href="https://github.com/rewerze/web_page" target=_blank>githubomon</a> lehet követni a
                fejlesztési
                folyamatokat ha érdekel.
            <h1>Mit lehet ezen az oldalon csinálni?</h1>
            <p>Ez az oldal a pont arra készült, hogy ezt elmondja. Igazából az oldal szíve a navigációs
                menüben
                rejtőzik. A legelső dolog amit láthattok jobb oldalról haladva az a jelenlegi oldal ahol
                vagytok! Erre kattintva mindig vissza tudtok térni a főoldalra. A következő három menü
                pont
                pedig az érdekesebb helyekre dob. Az <a href="/about">About</a>-ban rólam találnak
                néhány
                információt, a <a href="/">Home</a> az vissza dob erre az oldalra és végül a <a
                    href="/social">Social</a> eldob az elérhetőségeim oldalára ahol be van dobálva
                szinte
                minden
                elérhetőségi helyem. Az utolsó dolog a navigációs részlegen pedig a kereső ahol az oldal
                külünböző helyeit lehet elérni!</p>

            <h1>Mikre lehet keresni?</h1>
            <p>Jelenleg még nincs túl sok <b>publikus</b> lehetőség, de folyamatosan bővülni fog az oldal idővel. Addig
                is
                itt van pár:</p>
            <ul>
                <li>Social</li>
                <li>About</li>
            </ul>
        </div>
    </div>
</body>

</html>