<?php
require_once '/Applications/MAMP/htdocs/semaine2/ecommerce/model/ListProductsModel.php';
class ListProductsView
{

    public function displayListProducts()
    {
        $listProductsModel = new ListProductsModel();
        $listProducts = $listProductsModel->getProducts();

        ob_start(); // Starts buffering output, nothing is echoed directly to the page yet
?>

        <div class="row">
            <?php foreach ($listProducts as $id => $product) : ?>
                <div class='col-md-4 mb-4'>
                    <div class='card'>
                        <img src='<?= $product['image'] ?>' alt='<?= $product['title'] ?>' class='card-img-top'>
                        <div class='card-body'>
                            <h5 class='card-title'><?= $product['title'] ?></h5>
                            <p class='card-text'><?= $product['description'] ?></p>
                            <p class='card-text font-weight-bold'><?= $product['price'] ?> €</p>
                            <a href='product.php?id=<?= $id ?>' class='btn btn-primary mb-2'>Voir Détail</a>
                            <a href='cart.php?action=add&id=<?= $id ?>' class='btn btn-success'>Ajouter au Panier</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

    <?php
        $content = ob_get_clean(); // Get the buffered content into a variable
        echo ($content); // Return the content
    }

    public function displayFullPage()
    {
        ob_start();
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
    <?php
        $content = ob_get_clean();
        echo $content;
    }

    public function displayProductDetail($product)
    {
        ob_start();
    ?>
        <!DOCTYPE html>
        <html lang="fr">

        <head>
            <meta charset="UTF-8">
            <title><?php echo $product['title']; ?></title>
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
            <link rel="stylesheet" href="styles.css">
        </head>

        <body>
            <div class="container my-5">
                <div class="row">
                    <div class="col-md-6">
                        <img src="<?php echo $product['image']; ?>" alt="<?php echo $product['title']; ?>" class="img-fluid rounded">
                    </div>
                    <div class="col-md-6">
                        <h2><?php echo $product['title']; ?></h2>
                        <p class="text-muted"><?php echo $product['price']; ?> €</p>
                        <p><?php echo $product['description']; ?></p>
                        <a href="cart.php?action=add&id=<?php echo $product['id']; ?>" class="btn btn-success btn-lg">Ajouter au Panier</a>
                    </div>
                </div>
            </div>
            <?php
            $this->productStyles();
            ?>
        </body>

        </html>
    <?php
        $content = ob_get_clean();
        echo $content;
    }

    public function productStyles()
    {
    ?>
        <style>
            body {
                background-color: #f8f9fa;
                font-family: 'Arial', sans-serif;
            }

            .container {
                max-width: 1140px;
                margin: auto;
            }

            .img-fluid {
                max-width: 100%;
                height: auto;
                box-shadow: 0px 4px 6px 0px rgba(0, 0, 0, 0.1);
            }

            h2 {
                font-size: 2.5rem;
                margin-bottom: 20px;
            }

            p.text-muted {
                font-size: 1.2rem;
                margin-bottom: 20px;
            }

            .btn-lg {
                padding: 10px 40px;
                font-size: 1.2rem;
            }
        </style>
<?php
    }
}

?>