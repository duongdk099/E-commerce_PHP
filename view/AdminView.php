<?php

class AdminView
{
    public function displayRegister()
    {
        echo '<!DOCTYPE html>';
        echo '<html lang="fr">';
        echo '<head>';
        echo '    <meta charset="UTF-8">';
        echo '    <title>Inscription Admin</title>';
        echo '    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">';
        echo '    <link rel="stylesheet" href="styles.css">';
        echo '</head>';
        echo '<body>';
        echo '<div class="register-section">';
        echo '    <div class="container">';
        echo '        <div class="row justify-content-center">';
        echo '            <div class="col-md-6">';
        echo '                <div class="card shadow-lg">';
        echo '                    <div class="card-body">';
        echo '                        <h2 class="mb-4 text-center">Inscription Admin</h2>';
        echo '                        <form action="admin_register.php" method="post">';
        echo '                            <div class="form-group">';
        echo '                                <label for="username">Nom d\'utilisateur:</label>';
        echo '                                <input type="text" class="form-control" id="username" name="username" required>';
        echo '                            </div>';
        echo '                            <div class="form-group">';
        echo '                                <label for="password">Mot de passe:</label>';
        echo '                                <input type="password" class="form-control" id="password" name="password" required>';
        echo '                            </div>';
        echo '                            <button type="submit" class="btn btn-primary btn-block btn-lg">S\'inscrire</button>';
        echo '                        </form>';
        echo '                    </div>';
        echo '                </div>';
        echo '            </div>';
        echo '        </div>';
        echo '    </div>';
        echo '</div>';
        echo '';
        echo '<style>';
        echo '    body, html {';
        echo '    margin: 0;';
        echo '    padding: 0;';
        echo '    height: 100%;';
        echo '    font-family: "Arial", sans-serif;';
        echo '}';
        echo '';
        echo '.register-section {';
        echo '    background-color: #f8f9fa;';
        echo '    color: #333333;';
        echo '    min-height: 100%;';
        echo '    display: flex;';
        echo '    align-items: center;';
        echo '    justify-content: center;';
        echo '}';
        echo '';
        echo '.container {';
        echo '    max-width: 1140px;';
        echo '}';
        echo '';
        echo '.card {';
        echo '    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);';
        echo '    transition: 0.3s;';
        echo '}';
        echo '';
        echo '.card:hover {';
        echo '    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);';
        echo '}';
        echo '';
        echo 'h2 {';
        echo '    font-size: 2.5rem;';
        echo '}';
        echo '';
        echo '.btn-lg {';
        echo '    padding: 10px 20px;';
        echo '    font-size: 1.2rem;';
        echo '}';
        echo '</style>';
        echo '</body>';
        echo '</html>';
    }

    public function displayLogin()
    {
        ob_start();
?>
        <!DOCTYPE html>
        <html lang="fr">

        <head>
            <meta charset="UTF-8">
            <title>Connexion Admin</title>
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
            <link rel="stylesheet" href="styles.css">
        </head>

        <body>
            <div class="login-section">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-6">
                            <div class="card shadow-lg">
                                <div class="card-body">
                                    <h2 class="mb-4 text-center">Connexion Admin</h2>
                                    <?php if (isset($error_message)) : ?>
                                        <div class="alert alert-danger"><?php echo $error_message; ?></div>
                                    <?php endif; ?>
                                    <form action="admin_login.php" method="post">
                                        <div class="form-group">
                                            <label for="username">Nom d'utilisateur:</label>
                                            <input type="text" class="form-control" id="username" name="username" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="password">Mot de passe:</label>
                                            <input type="password" class="form-control" id="password" name="password" required>
                                        </div>
                                        <a href="admin_register.php">Inscription</a>
                                        <button type="submit" class="btn btn-primary btn-block btn-lg">Se Connecter</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php
        $content = ob_get_clean();
        echo $content;
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

    public function styleLogin()
    {
        ?>
            <style>
                body,
                html {
                    margin: 0;
                    padding: 0;
                    height: 100%;
                    font-family: 'Arial', sans-serif;
                }

                .login-section {
                    background-color: #f8f9fa;
                    color: #333333;
                    min-height: 100%;
                    display: flex;
                    align-items: center;
                    justify-content: center;
                }

                .container {
                    max-width: 1140px;
                }

                .card {
                    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
                    transition: 0.3s;
                }

                .card:hover {
                    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
                }

                h2 {
                    font-size: 2.5rem;
                }

                .btn-lg {
                    padding: 10px 20px;
                    font-size: 1.2rem;
                }
            </style>
        <?php
    }

    public function displayDashboardProducts($products)
    {
        ob_start();
        ?>

            <!DOCTYPE html>
            <html lang="fr">

            <head>
                <meta charset="UTF-8">
                <title>Tableau de Bord Admin</title>
                <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
                <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
                <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
                <link rel="stylesheet" href="styles.css">
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
                            <?php if (isset($_SESSION['admin_logged_in']) && $_SESSION['admin_logged_in']) : ?>
                                <li class="nav-item">
                                    <a class="nav-link" href="admin_logout.php">Déconnexion Admin</a>
                                </li>
                            <?php endif; ?>
                        </ul>
                    </div>
                </nav>


                <div class="dashboard-section">
                    <div class="container">
                        <h2 class="mb-4 text-center">Tableau de Bord Admin</h2>
                        <div class="card shadow-lg mb-4">
                            <div class="card-body">
                                <table class="table table-striped">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th>Titre</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($products as $id => $product) : ?>
                                            <tr>
                                                <td><?php echo $product['title']; ?></td>
                                                <td>
                                                    <a href="edit_product.php?id=<?php echo $id; ?>" class="btn btn-info btn-sm">Éditer</a>
                                                </td>
                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                                <a href="add_product.php" class="btn btn-primary btn-lg">Ajouter un Produit</a>
                            </div>
                        </div>
                    </div>
                </div>

                <style>
                    body,
                    html {
                        margin: 0;
                        padding: 0;
                        height: 100%;
                        font-family: 'Arial', sans-serif;
                    }

                    .dashboard-section {
                        background-color: #f8f9fa;
                        color: #333333;
                        min-height: 100vh;
                        padding: 40px 0;
                    }

                    .container {
                        max-width: 800px;
                        margin: auto;
                    }

                    h2 {
                        font-size: 2.5rem;
                    }

                    .card {
                        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
                        transition: 0.3s;
                    }

                    .card:hover {
                        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
                    }

                    .table thead {
                        background-color: #007bff;
                        color: white;
                    }

                    .btn-lg {
                        padding: 10px 40px;
                        font-size: 1.2rem;
                    }
                </style>
            </body>

            </html><?php

                    $content = ob_get_clean();
                    echo $content;
                }
            }
