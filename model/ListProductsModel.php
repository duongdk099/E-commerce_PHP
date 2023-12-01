<?php
require_once 'model/ProductModel.php';
class ListProductsModel
{
    private $products = [];

    // Constructor
    public function __construct()
    {
        session_start();

        if (!isset($_SESSION['products'])) {
            $_SESSION['products'] = [
                [
                    'title' => 'Produit 1',
                    'description' => 'Ceci est la description du produit 1.',
                    'image' => 'https://ae01.alicdn.com/kf/S783f5725c2674783bbc6decbdc1eef5fP/T-te-de-Pulv-risateur-Rotative-Universelle-Extension-de-Bras-de-Robot-de-Cuisine-F-05.jpg_.webp',
                    'price' => '20'
                ],
                [
                    'title' => 'Produit 2',
                    'description' => 'Ceci est la description du produit 2.',
                    'image' => 'https://ae01.alicdn.com/kf/S94e70d77f9a54b8e925ac513731c806c3/Bouteille-d-eau-de-sport-en-plastique-de-grande-capacit-pour-tudiants-bouilloire-de-fitness-en.jpg_.webp',
                    'price' => '20'
                ],
                [
                    'title' => 'Produit 3',
                    'description' => 'Ceci est la description du produit 3.',
                    'image' => 'https://ae01.alicdn.com/kf/Sf8bc0ee26e774eec803e6bb1f98565c0F/Bas192-Pistolet-eau-de-lavage-de-voiture-buse-de-pulv-risation-lave-auto-haute-pression-3.jpg_.webp',
                    'price' => '20'
                ],
                [
                    'title' => 'Produit 4',
                    'description' => 'Ceci est la description du produit 4.',
                    'image' => 'https://ae01.alicdn.com/kf/Sf123e0790de84d36b593ee3dcce367acS/Brosse-r-curer-lectrique-avec-perceuse-ensemble-d-accessoires-de-r-ve-brosse-r-curer-pour.jpg_.webp',
                    'price' => '20'
                ],
                [
                    'title' => 'Produit 5',
                    'description' => 'Ceci est la description du produit 5.',
                    'image' => 'https://ae01.alicdn.com/kf/S401f1933b90245148abe108fce9fa3baG/Trancheuse-multifonctionnelle-avec-panier-coupe-l-gumes-d-chiqueteuses-hachoir-fruits-r-pe-carottes-vert-noir.jpg_.webp',
                    'price' => '20'
                ],
                [
                    'title' => 'Produit 6',
                    'description' => 'Ceci est la description du produit 6.',
                    'image' => 'https://ae01.alicdn.com/kf/Saa79d97742a24475b59eaf989e5ed12dL/Couvre-chaussures-r-utilisables-en-silicone-non-ald-pour-les-jours-de-pluie-en-plein-air.jpg_.webp',
                    'price' => '20'
                ],
                [
                    'title' => 'Produit 7',
                    'description' => 'Ceci est la description du produit 7.',
                    'image' => 'https://ae01.alicdn.com/kf/Sc4a8e4c12ea6429c971ec4d6d6faa2e1r/Lunettes-de-soleil-de-v-lo-photochromiques-pour-hommes-et-femmes-verres-argent-s-lunettes-de.jpg_.webp',
                    'price' => '20'
                ],
                [
                    'title' => 'Produit 8',
                    'description' => 'Ceci est la description du produit 8.',
                    'image' => 'https://ae01.alicdn.com/kf/Sa8f2d6ac72ea4a93997ce2139bc0d542f/Couteau-pliant-avec-manche-en-bois-de-santal-motif-Damas-poche-en-plein-air-chasse-dans.jpg_.webp',
                    'price' => '20'
                ],
                [
                    'title' => 'Produit 9',
                    'description' => 'Ceci est la description du produit 9.',
                    'image' => 'https://ae01.alicdn.com/kf/S0e29ff3b74034a0a90f4b0502523d504r/D-poussi-reur-air-comprim-sans-fil-portable-avec-lumi-re-LED-souffleur-ordinateur-livres-PC.jpg_.webp',
                    'price' => '20'
                ],
                [
                    'title' => 'Produit 10',
                    'description' => 'Ceci est la description du produit 10.',
                    'image' => 'https://ae01.alicdn.com/kf/Sb8ac874fd0cd47819191175c5247a1ear/Essager-c-ble-USB-type-c-100W-USB-C-PD-pour-recharge-rapide-cordon-de-chargeur.jpg_.webp',
                    'price' => '20'
                ]
            ];
        } else {
            $this->products = $_SESSION['products'];
        }
    }

    // Add a product to the list
    public function addProduct(ProductModel $product)
    {
        $this->products[] = [
            'title' => $product->getTitle(),
            'description' => $product->getDescription(),
            'image' => $product->getImage(),
            'price' => $product->getPrice()
        ];
        $_SESSION['products'] = $this->products;
    }

    // Get all products
    public function getProducts()
    {
        return $this->products;
    }

    // Other methods like removing, updating products can be added...
}
