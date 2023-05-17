<?php

include __DIR__ . '/db.php';

//var_dump($products);
?>



<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>php opp-2</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
        integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>

    <header>
        <nav class="d-flex align-items-center justify-content-between shadow px-4 ">
            <div class="img-logo">
                <img class="img-fluid" src="./img/hand-drawn-dog-animal-logo_23-2148910632.avif" alt="logo cane">

            </div>

            <h1 class="text-danger fw-bold">Animali che passione!</h1>
            <div><input type="text" placeholder="Cerca">
                <button class="btn btn-danger"> Cerca</button>
            </div>
        </nav>
    </header>

    <main class=" container">
        <div class="row  mt-5">


            <?php

            foreach ($products as $product) {
                ?>
                <div class="col-12 col-sm-6 col-md-4">
                    <div class="card mb-3 shadow">

                        <div class="card-body d-flex align-items-center justify-content-center m-auto">
                            <img class="img-fluid" src=" <?php echo $product->image ?>" alt="<?php echo $product->name ?>">
                        </div>
                        <div class="card-footer">
                            <h2 class="text-center text-capitalize mb-4 fw-bold">
                                <?php echo $product->name ?>
                            </h2>
                            <div class="d-flex align-items-center">
                                <p>Questo prodotto è per:</p>
                                <?php if ($product->animal === 'Cane') { ?>
                                    <i class="fa-solid fa-dog pb-4 px-2  "></i>
                                <?php } elseif ($product->animal === 'Gatto') { ?>
                                    <i class="fa-solid fa-cat pb-4 px-2 "></i>
                                <?php } else { ?>
                                    <i class="fa-solid fa-dog pb-4 px-2 "></i>
                                    <i class="fa-solid fa-cat pb-4 px-2 "></i>
                                <?php } ?>
                            </div>
                            <div class="d-flex align-items-center justify-content-between">
                                <div>
                                    <p>Categoria:
                                        <span class="fw-semibold">
                                            <?php echo $product->cathegory ?>
                                        </span>
                                    </p>
                                </div>

                                <div class="d-flex align-items-center">
                                    <p>Prezzo:
                                        <span class="text-danger fw-semibold">
                                            <?php echo $product->price ?> &euro;
                                        </span>
                                    </p>
                                    <button class="btn btn-outline-primary mb-3 mx-2"><i
                                            class="fa-solid fa-cart-shopping"></i></button>
                                </div>

                            </div>




                        </div>
                    </div>
                </div>



            <?php } ?>



        </div>




    </main>


</body>

</html>