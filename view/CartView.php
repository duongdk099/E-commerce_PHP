<?php

class CartView
{
    private $model;

    public function __construct($model)
    {
        $this->model = $model;
    }

    public function displayCart()
    {
        $cartItems = $this->model->getCartItems();
        ob_start();
?>
        <!DOCTYPE html>
        <html lang="fr">

        <head>
            <meta charset="UTF-8">
            <title>Panier</title>
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
            <link rel="stylesheet" href="styles.css">
        </head>

        <body>
            <div class="container my-5">
                <h1 class="text-center mb-5">Votre Panier</h1>
                <?php if ($this->model->isCartEmpty()) : ?>
                    <p class="text-center">Votre panier est vide.</p>
                <?php else : ?>
                    <table class="table table-striped shadow-lg">
                        <thead class="thead-dark">
                            <tr>
                                <th>Produit</th>
                                <th>Quantité</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($cartItems as $id => $item) : ?>
                                <tr>
                                    <td><?php echo $item['title']; ?></td>
                                    <td><?php echo $item['quantity']; ?></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                    <a href="checkout.php" class="btn btn-primary btn-lg">Commander</a>
                <?php endif; ?>
            </div>
            <?php
            $this->cartStyles();
            ?>
        </body>

        </html>
    <?php
        echo ob_get_clean();
    }

    public function cartStyles()
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

            h1 {
                font-size: 2.5rem;
            }

            .table {
                margin-top: 30px;
            }

            .table thead {
                background-color: #007bff;
                color: white;
            }

            .table-striped tbody tr:nth-of-type(odd) {
                background-color: rgba(0, 123, 255, 0.05);
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