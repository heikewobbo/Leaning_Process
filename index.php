<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Planespotting Portfolio</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <div class="container">
            <h1>Planespotting Portfolio</h1>
            <p>Benvenuto nel mio portfolio di planespotting! Qui troverai una selezione delle mie foto preferite.</p>
        </div>
    </header>

    <section class="gallery">
        <div class="container">
            <div class="grid">
                <?php
                $dir = "images/"; // Cartella dove sono contenute le immagini
                $images = glob($dir . "*.{jpg,jpeg,png,gif}", GLOB_BRACE); // Cerca tutti i file immagine nella cartella
                
                foreach($images as $image) {
                    echo '<div class="grid-item"><img src="'.$image.'" alt="Planespotting"></div>';
                }
                ?>
            </div>
        </div>
    </section>

    <footer>
        <div class="container">
            <p>&copy; 2024 - Planespotting Portfolio. Tutti i diritti riservati.</p>
        </div>
    </footer>
</body>
</html>
