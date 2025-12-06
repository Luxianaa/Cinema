<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Principal - Rating de Películas de Culto</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1>Le troue</h1>
        <nav>
            <ul class="horizontal-list">
                <li><a href="principal.php" class="button">Inicio</a></li>
                <li><a href="films.php" class="button">Films</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <section>
            <h2>Bienvenido a la Página Principal</h2>
            <p>Mejores peliculas Historicamente.</p>
            <a href="films.php" class="button">Ver Rank</a>
        </section>
        <section>
            <h2>Películas Populares</h2>
            <div class="carousel">
                <div class="carousel-inner">
                    <?php
                    // Ejemplo de cómo usar PHP para generar contenido dinámico
                    $peliculas = [
                        ["nombre" => "Persona", "imagen" => "Cinema Images/Persona.jpeg", "info" => "Persona (1966)\n Ingmar Bergman\n Una actriz muda y su enfermera se retiran a una isla solitaria, donde las líneas entre sus identidades comienzan a desdibujarse."],
                        ["nombre" => "Mulholland Drive", "imagen" => "Cinema Images/Mulholland Drive.jpeg", "info" => "Mulholland Drive (2001)\n David Lynch\n Una aspirante a actriz llega a Los Ángeles y se encuentra con una mujer amnésica."],
                        ["nombre" => "La Planète Sauvage", "imagen" => "Cinema Images/La Planète Sauvage.jpg", "info" => "La Planète Sauvage (1973)\n René Laloux\n Una historia de ciencia ficción sobre un planeta donde los humanos son mascotas."],
                        ["nombre" => "Eyes Wide Shut", "imagen" => "Cinema Images/Eyes Wide Shut.jpeg", "info" => "Eyes Wide Shut (1999)\n Stanley Kubrick\n Un médico de Nueva York se ve envuelto en una sociedad secreta."],
                        ["nombre" => "Possession", "imagen" => "Cinema Images/Possession.jpeg", "info" => "Possession (1981)\n Andrzej Żuławski\n Una mujer comienza a actuar de manera extraña después de dejar a su esposo."],
                        ["nombre" => "Lost Highway", "imagen" => "Cinema Images/Lost Highway.jpeg", "info" => "Lost Highway (1997)\n David Lynch\n Un músico recibe una misteriosa cinta de video que cambia su vida."],
                        ["nombre" => "Suspiria", "imagen" => "Cinema Images/Suspiria.jpeg", "info" => "Suspiria (1977)\n Dario Argento\n Una joven bailarina descubre oscuros secretos en su academia de danza."]
                    ];
                    foreach ($peliculas as $index => $pelicula) {
                        // Divide la información en partes
                        $info_parts = explode("\n", $pelicula['info']);
                        $titulo = $info_parts[0];
                        $director = $info_parts[1];
                        $sinopsis = $info_parts[2];
                        echo "<div class='carousel-item'>
                                <img src='{$pelicula['imagen']}' alt='{$pelicula['nombre']}' class='thumbnail'>
                                <div class='info'>
                                    <h3 class='titulo'>{$titulo}</h3>
                                    <p class='director'>{$director}</p>
                                    <p class='sinopsis'>{$sinopsis}</p>
                                </div>
                              </div>";
                    }
                    ?>
                </div>
            </div>
        </section>
    </main>
    <footer>
        <p>&copy; Guiado por Letterboxd: </p>
        <a href="https://letterboxd.com/" class="button">Visitar Letterboxd</a>
        <a href="https://wa.me/+59163733156" class="button">Abrir WhatsApp</a>
    </footer>
</body>
</html>