<?php
require_once __DIR__ .  "/Models/products.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <main class="bg-light">

        <section class="container">
            <h2 class="text-center">Prodotti Animals</h2>
            <div class="row row-cols-3">
                <?php foreach ($prodotti as $prodotto) { ?>
                    <div class="col">
                        <div class="card">
                            <img src="<?php echo $prodotto->immagine; ?>" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h2><?php echo $prodotto->nome; ?></h2>
                                <p class="card-text">
                                    prezzo: <?php echo $prodotto->prezzo ?> $
                                </p>
                            </div>
                        </div>
                    </div>
                <?php } ?>

            </div>
        </section>
    </main>

</body>

</html>