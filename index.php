<?php
require_once './model/ListProductsModel.php';
require_once './view/ListProductView.php';
// session_start(); 

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Accueil</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="./style/style.css">

</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="index.php">Ma Boutique</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Boutique</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="admin_dashboard.php">Dashboard Admin</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container my-5">
        <h1 class="text-center mb-5">Bienvenue sur Notre Boutique!</h1>
        <?php
        $viewProducts = new ListProductsView();
        $viewProducts->displayListProducts();
        ?>
    </div>


</body>

</html>