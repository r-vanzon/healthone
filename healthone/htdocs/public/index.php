<?php
require '../Modules/Categories.php';
require '../Modules/Products.php';
require '../Modules/Database.php';
require '../Modules/Contact.php';
require '../Modules/Review.php';
require '../Modules/Login.php';

define("DOC_ROOT", realpath(dirname(__DIR__)));
define("TEMPLATE_ROOT", realpath(DOC_ROOT . "/Templates"));

$request = $_SERVER['REQUEST_URI'];
$params = explode("/", $request);
$title = "HealthOne";
$titleSuffix = "";
session_start();
global $product;

$times = getTime();

switch ($params[1]) {
    case 'categories':
        $titleSuffix = ' | Categories';
        $categories = getCategories();
        include_once "../Templates/categories.php";
        break;
    case 'category':
        $titleSuffix = ' | Category';
        if (isset($_GET['id'])) {
            $categoryId = $_GET['id'];

            $products = getProducts($categoryId);

            $name = getCategoryName($categoryId);
            include_once "../Templates/products.php";
        }
        break;
    case 'product':
        if(isset($_GET['id'])) {
            $productId = $_GET['id'];
            $product = getProduct($productId);
            $name = getCategoryName($product->category_id);
            $titleSuffix = ' | ' . $product->name;
            $reviews = getReview($productId);
            include_once "../Templates/product.php";
        } else {
            $titleSuffix = ' | Home';
            include_once "../Templates/home.php";
        }
        break;
    case 'contact':
        $titleSuffix = ' | Contact';
        $categories = getCategories();
        include_once "../Templates/contact.php";

        break;
    case 'review':
        $titleSuffix = ' | Review';
        if(isset($_POST['submit'])) {
            $name=filter_input(INPUT_POST,'name');
            $review=filter_input(INPUT_POST,'description');
            $stars=filter_input(INPUT_POST,'rating');
            $product_id=filter_input(INPUT_GET,'id');
            saveReview($name,$review,$stars,$product_id);
            header("Location: /product/$product_id");
        } else {
            include_once "../Templates/review.php";
        }
        break;
    case 'login':

        if(isset($_POST['login'])) {
            $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
            $password = filter_input(INPUT_POST, 'password');
            $user = checkLogin($email, $password);
            if ($user == false){
                var_dump("Error, enter a correct email address and password");
            } else {
                $_SESSION['login'] = true;
                $_SESSION['role'] = $user->role;
                $_SESSION['email'] = $user->email;
            }
        }
        include_once "../Templates/login.php";
        break;

    case 'logout':
        session_destroy();
        header("location: /");
        break;

    case 'admin':
        include_once 'admin.php';
        break;

    default:
        $titleSuffix = ' | Home';
        include_once "../Templates/home.php";

}


function getTitle() {
    global $title, $titleSuffix;
    return $title . $titleSuffix;
}
