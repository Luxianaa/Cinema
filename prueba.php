<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Discover Sucre, Bolivia</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        header {
            background-color: #333;
            color: #fff;
            padding: 20px;
            text-align: center;
        }
        nav {
            background-color: #444;
            color: #fff;
            padding: 10px;
            text-align: center;
        }
        nav a {
            color: #fff;
            margin: 0 15px;
            text-decoration: none;
        }
        .hero {
            background-image: url('Images/WhatsApp Image 2024-11-09 at 09.24.41_cfd41960.jpg');
            background-size: cover;
            background-position: center;
            height: 300px;
            display: flex;
            justify-content: center;
            align-items: center;
            color: #fff;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
        }
        .hero h1 {
            font-size: 3em;
        }
        .container {
            padding: 20px;
        }
        .section {
            background-color: #fff;
            padding: 20px;
            margin: 20px 0;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1, h2 {
            color: #333;
        }
        p {
            color: #666;
        }
        .gallery img {
            width: 50%;
            height: 50%;
            border-radius: 8px;
            margin-bottom: 10px;
        }
        footer {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 10px;
            position: fixed;
            width: 100%;
            bottom: 0;
        }
    </style>
</head>
<body>
    <header>
        <h1>Welcome to Sucre, Bolivia</h1>
        <p>The White City of the Americas</p>
    </header>
    <nav>
        <a href="#about">About</a>
        <a href="#gallery">Gallery</a>
        <a href="attracttions.php" target="_blank">Attractions</a>
        <a href="#contact">Contact</a>
    </nav>
    <div class="hero">
        <h1>Discover the Beauty of Sucre</h1>
    </div>
    <div class="container">
        <div id="about" class="section">
            <h2>About Sucre</h2>
            <p><?php echo "Sucre is the constitutional capital of Bolivia, known for its well-preserved colonial architecture and rich history."; ?></p>
        </div>
        <div id="gallery" class="section gallery">
            <h2>Gallery</h2>
            <img src="Images/WhatsApp Image 2024-11-09 at 09.36.22_7e3a7c9f.jpg" alt="Sucre Image 1">
            <img src="Images/WhatsApp Image 2024-11-09 at 09.24.39_489f2cd6.jpg" alt="Sucre Image 2">
        </div>
        <div id="attracttions" class="section">
            <h2>Top Attractions</h2>
            <ul>
                <li>Plaza 25 de Mayo</li>
                <li>Casa de la Libertad</li>
                <li>Parque Cretácico</li>
                <li>La Recoleta</li>
            </ul>
        </div>
        <div id="contact" class="section">
            <h2>Contact Us</h2>
            <p>Email: info@sucretourism.bo</p>
            <p>Phone:  https://wa.me/63733156 </p> 
        </div>
    </div>
    <footer>
        <p>&copy; <?php echo date("Y"); ?> Sucre Tourism. All rights reserved.</p>
    </footer>
</body>
</html>