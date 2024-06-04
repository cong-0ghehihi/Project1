<?php
session_start();
if (!isset($_SESSION['cart'])) $_SESSION['cart'] = [];
include "./model/pdo.php";
include "./model/categories.php";
// include "./model/khachhang.php";
include "./model/lookbook.php";
include "./model/products.php";
include "./model/taikhoan.php";
include "./gobal.php";
include "./model/cart.php";
include "./model/pay.php";
include "./model/binhluan.php";
ob_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="icon" href="./img/Logo_.jpg">
    <link rel="stylesheet" href="./css/css.css">
    <link rel="stylesheet" href="./css/taikhoan.css">
    <link rel="stylesheet" href="./css/list.css">
    <link rel="stylesheet" href="./css/new.css">
    <link rel="stylesheet" href="./css/po.css">
    <link rel="stylesheet" href="./css/lienhe.css">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/thanhtoan.css">
    <script src="https://kit.fontawesome.com/2431ba121f.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />

    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
    <style>
  
    </style>

</head>
<?php
   $product_hot = productBestSeller();
$listpro = list_product();
$listcate = list_cate();
$listpay = pay_method();
?>
<?php
include "./view/header.php";
if ((isset($_GET['act'])) && ($_GET['act'] != "")) {
    $act = $_GET['act'];
    switch ($act) {
        case 'home':
         
            include 'view/home.php';
            break;
        case 'cart':
            include 'view/giohang/cart.php';
            break;
        case 'login':
            if (isset($_POST['login']) && ($_POST['login'])) {

                $user = $_POST['user'];
                $pass = $_POST['pass'];
                $check_user = check_user($user, $pass);
                if (is_array($check_user)) {
                    $_SESSION['user'] = $check_user;

                    header('location: index.php?act=home');
                } else {
                    $thongbao = "Tài khoản ko tồn tại. Vui long kiểm tra lại";
                }
            }
            include 'view/user/login.php';
            break;
        case 'logup':
            if (isset($_POST['dangky']) && ($_POST['dangky'])) {
                $email = $_POST['email'];
                $user = $_POST['user'];
                $pass = $_POST['pass'];
                add_account($email, $user, $pass);
                $thongbao = "Dang ky thanh cong";
            }
            include 'view/user/logup.php';
            break;
        case 'logout':
            session_destroy();
            header("Location: index.php");
            break;
        case 'edit_user':
            if (isset($_POST['update']) && ($_POST['update'])){ 
                $name = $_POST['name'];
                $pass = $_POST['pass'];
                $email = $_POST['email'];
                $id = $_POST['id'];

                update_user($id,$name,$pass,$email);
                $thongBao="Cập nhật tài khoản thành công";
                header("Refresh:0");
                // $_SESSION['user']= check_user($user, $pass);
                header("Location:index.php");
            }
            include 'view/user/update.php';
            break;
        case 'qmk':
            include 'view/user/qmk.php';
            break;
        
        case 'new':
            $list_look = all_lookbook_home();
            include 'view/new/new.php';
            break;

        case 'lookbook':
                if(isset($_GET['id']) && $_GET['id'] > 0){
                    $id = $_GET['id'];
                    $new1 = updateone_loobbook($id);
                }
                include 'view/new/lookboo.php';
                break;

        case 'product':
            // search product
            if (isset($_POST['keyword']) &&  $_POST['keyword'] != 0) {
                $kyw = $_POST['keyword'];
            } else {
                $kyw = "";
            }
            // product list
            if (isset($_GET['id_cat']) && ($_GET['id_cat'] > 0)) {
                $id_cat = $_GET['id_cat'];
            } else {
                $id_cat = 0;
            }
            if (!isset($min_price)) $min_price = 0;
            if (!isset($max_price)) $max_price = 10000000;
            if (!isset($order)) $order = "";
            if (isset($_GET['min_price'])) {
                $min_price = $_GET['min_price'];
            }
            if (isset($_GET['max_price'])) {
                $max_price = $_GET['max_price'];
            }
            if (isset($_GET['order'])) {
                $order = $_GET['order'];
            }
            $all_products = loadall_products($kyw, $id_cat, $min_price, $max_price, $order);
            // print_r($all_products);
            include 'view/product/product.php';
            break;
        case 'searchbycate':
            if (isset($_GET['id_cat']) && $_GET['id_cat'] > 0) {
                $listpro = products_bycate($_GET['id_cat']);
            }
            include 'view/product/product.php';
            break;

        case 'product_d':

            if (isset($_GET['idsp']) && $_GET['idsp'] > 0) {
                $id_pro = $_GET['idsp'];
                $product = getone_attribute($_GET['idsp']);
                $sizes = list_size($_GET['idsp']);
                $products_relate = products_relate($_GET['idsp'], $product['id_cat']);
                $comment = load_comments($_GET['idsp']);
                include "view/product/product_d.php";
            }
            if (isset($_POST['sbt-cmt'])) {
                // $id_pro = $_POST['id_pro'];// id sp
                $id_pro = $_GET['idsp'];
                $content = $_POST['content'];
                $date_cmt = date('Y-m-d');
                $id_user = $_SESSION['user']['id'];
                insert_comments($id_user, $id_pro, $content, $date_cmt);
                header("Refresh:0");
            }
            break;
        case 'addcart':
            if (isset($_POST['addtocart']) && $_POST['addtocart']) {
                $id = $_POST['id'];
                $namepro = $_POST['namepro'];
                $img = $_POST['img'];
                $size =  isset($_POST['size']) ? $_POST['size'] : '';
                $price = $_POST['price'];
                $quantity = $_POST['quantity'];
                $check = false;
                //Kiểm tra sp có tồn tại trong giỏ hàng hay k
                //Nếu có chỉ cập nhật số lượng
                $i = 0;
                foreach ($_SESSION['cart'] as $item) {
                    if ($item[1] == $namepro && $item[3] == $size) {
                        $newquantity = $quantity + $item[5];
                        $_SESSION['cart'][$i][5] = $newquantity;
                        $check = true;
                        break;
                    }
                    $i++;
                }
                //khởi tạo mảng con trc khi đưa vào cart
                if ($check == false) {
                    $item = array($id, $namepro, $img, $size, $price, $quantity);
                    $_SESSION['cart'][] = $item;
                }
            }
            header('location: ?act=viewcart');
            break;

        case 'viewcart':
            if (isset($_SESSION['cart'])) {
            }
            include './view/giohang/cart.php';
            break;
            case "detailorder":
                if (isset($_GET['id']) && $_GET['id'] > 0) {
                  $id = $_GET['id'];
                  $list_detail = list_attribute_bill($id);
                }
                include "./view/giohang/detailorder.php";
                break;
        case 'checkout':

            include './view/giohang/oder.php';
            break;
        case 'order':
            if (isset($_POST['order']) && ($_POST['order'])) {
                $email = $_POST['email'];
                $fullname = $_POST['fullname'];
                $phone = $_POST['phone'];
                $address = $_POST['address'];
                $method = $_POST['method'];
                $total = $_POST['total'];
                billInsert($email, $fullname, $phone, $address, $method, $total);

                // lay ra bien id order
                $id = orderSelectLastId();
                $id_order = $id[0]['id'];

                foreach ($_SESSION['cart'] as $item) {
                    $name = $item[1]; // Assuming $item[0] contains product attribute ID
                    $size = $item[3];
                    $price = $item[4];
                    $quantity = $item[5]; // Assuming $item[5] contains quantity

                    // Add order details to the database
                    billDetailInsert($id_order, $name, $size, $price, $quantity);
                }

                // Clear the cart session after the order is placed
                unset($_SESSION['cart']);
                header("location: ?act=thanks");
            }

            break;

        case 'thanks':
            include "./view/giohang/order_success.php";
        break;
        case 'yourorder':
             $email = $_SESSION['user']['email'];
            $orders = list_bill_email($email);

            include "./view/giohang/yourorder.php";
            break;
        case "delbill":
            if (isset($_GET['id']) && $_GET['id']) {
            $id = $_GET['id'];
            orderSetStatusOrder(-1,$id);
            header("location: ?act=yourorder");
            }
            include "./view/giohang/yourorder.php";
            break;

        case "successbill":
            if (isset($_GET['id']) && $_GET['id']) {
            $id = $_GET['id'];
            orderSetStatusReceived(2,$id);
            header("location: ?act=yourorder");
            }
            include "./view/giohang/yourorder.php";
            break;
        case 'delcart':
            if (isset($_GET['i']) && ($_GET['i'] >= 0)) {

                if (isset($_SESSION['cart']))
                    array_splice($_SESSION['cart'], $_GET['i'], 1);
            } else {
                if (isset($_SESSION['cart'])) unset($_SESSION['cart']);
            }

            if (isset($_SESSION['cart']) && (count($_SESSION['cart']) >= 0)) {
                header("Location: index.php?act=viewcart");
            } else {

                header("Location: index.php?act=viewcart");
            }
            break;

        case 'lienhe':
            include 'view/lienhe.php';
            break;
    }
} else {
    include "view/home.php";
}
include "./view/footer.php";
?>