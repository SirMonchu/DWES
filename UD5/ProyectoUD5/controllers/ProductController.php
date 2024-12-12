<?php
require_once 'models/Product.php';

class ProductController {
    private $productModel;
    private $authController;

    public function __construct() {
        $this->productModel = new Product();
        $this->authController = new AuthController();
    }

    public function index() {
        $this->authController->checkAuth();
        
        $page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
        $perPage = 5;
        
        $products = $this->productModel->getAll($page, $perPage);
        $totalProducts = $this->productModel->getTotalCount();
        $totalPages = ceil($totalProducts / $perPage);
        
        include 'views/products/index.php';
    }

    public function create() {
        $this->authController->checkAuth();
        
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $data = [
                'name' => $_POST['name'],
                'description' => $_POST['description'],
                'price' => $_POST['price'],
                'category' => $_POST['category']
            ];
            
            if ($this->productModel->create($data)) {
                header('Location: index.php?controller=product&action=index');
                exit();
            }
        }
        
        include 'views/products/create.php';
    }

    public function edit() {
        $this->authController->checkAuth();
        
        $id = $_GET['id'];
        $product = $this->productModel->getById($id);
        
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $data = [
                'name' => $_POST['name'],
                'description' => $_POST['description'],
                'price' => $_POST['price'],
                'category' => $_POST['category']
            ];
            
            if ($this->productModel->update($id, $data)) {
                header('Location: index.php?controller=product&action=index');
                exit();
            }
        }
        
        include 'views/products/edit.php';
    }

    public function delete() {
        $this->authController->checkAuth();
        
        if (isset($_GET['id'])) {
            $this->productModel->delete($_GET['id']);
        }
        
        header('Location: index.php?controller=product&action=index');
        exit();
    }
}