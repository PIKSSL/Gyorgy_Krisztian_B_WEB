<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>György Krisztián B WEB</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <script type="module" src="js/start.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css">
</head>

<body class="antialiased">
    <main>
        <div id="szotar">
            <h1>Szótár</h1>
            <div id="szavak">
                <h2>Szavak</h2>
                <div class="szoTarolo">
                    <form action="">
                        <select name="temak" class="temaValaszto">
                        <option value="999">Válassz témát!</option>
                        </select>
                        
                    </form>
                    <div class="szavakMegjelenites">

                    </div>
                </div>
            </div>
        </div>
    </main>
</body>

</html>