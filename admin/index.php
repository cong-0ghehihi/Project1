<?php
include "../gobal.php";
include "../model/pdo.php";
include "../model/categories.php";
include "../model/lookbook.php";
include "../model/products.php";
include "../model/khachhang.php";
include "../model/thongke.php";
include "../model/binhluan.php";
include "../model/cart.php";

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />

 
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
  <link rel="stylesheet" href="../assets/css/admin.css" />
  <link rel="stylesheet" href="../css/admin.css">
  <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>

<body>
  <div class="container">
    <!-- header -->
    <?php
    include "header.php";
    ?>
    <!-- menu -->
    <?php
    include "menu.php";
    ?>
    <!-- main -->

    <div class="row mt-5 main-web">
      <?php
      if (isset($_GET['act']) && $_GET['act'] != "") {
        $act = $_GET['act'];
        switch ($act) {
          case "trangchu":
            include "trangchu/trangchu.php";
            break;


          case "listcate":
            $list_cate = list_cate();
            include "categories/list-categories.php";
            break;

          case "addcate":
            if (isset($_POST['btn-sb'])) {
              add_cate($_POST['name']);
              header("location:index.php?act=listcate");
            }

            include "categories/add-categories.php";
            break;
          case "editcate": {
              if (isset($_GET['id']) & $_GET['id'] > 0) {
                $categories = getone_categories($_GET['id']);
              }
              if (isset($_POST['btnsubmit'])) {
                $id = $_POST['id'];
                $catename = $_POST['name'];
                edit_cate($id, $catename);
                header("location:?act=listcate");
              }
              include "categories/edit-categories.php";
              break;
            }
          case "deletecate": {
              if (isset($_GET['id']) && $_GET['id'] > 0) {
                delete($_GET['id']);
                header("location:?act=listcate");
              }
              include "categories/edit-categories.php";
              break;
            }

            // Sản phẩm
          // case "listpro": {
          //     $listpro = list_product();
          //     include "../admin/products/list-product.php";
          //     break;
          //   }
          case "listpro":{
            if(isset($_POST['Go'])&&($_POST['Go'])){
              $kyw=$_POST['kyw'];
              $id_cat=$_POST['id_cat'];
            }else{
                $kyw="";
                $id_cat=0;
            }
            $categories = list_cate();
            $listpro = list_product_admin($kyw,$id_cat);
            // $listpro = list_product();
          include "../admin/products/list-product.php";
          break;
          }
          case "addpro": {
              if (isset($_POST['btnsubmit'])) {
                $name = $_POST['name'];
                $price = $_POST['price'];
                $img = null;
                if ($_FILES['image']['name'] != "") {
                  $img = time() . "_" . $_FILES['image']['name'];
                  move_uploaded_file($_FILES['image']['tmp_name'], "../img/$img");
                }
                $description = $_POST['description'];
                $id_cat = $_POST['id_cat'];
                add_products($name, $price, $img, $description, $id_cat);
                header("location:?act=listpro");
              }
              $list_cate = list_cate();
              include "products/add-product.php";
              break;
            }
          case "editpro": {
              if (isset($_GET['id']) & $_GET['id'] > 0) {
                $product = getone_products($_GET['id']);
              }
              if (isset($_POST['btnsubmit'])) {
                $name = $_POST['name'];
                $price = $_POST['price'];

                $img = null;
                if ($_FILES['image']['name'] != "") {
                  $img = time() . "_" . $_FILES['image']['name'];
                  move_uploaded_file($_FILES['image']['tmp_name'], "../img/$img");
                }
                $description = $_POST['description'];
                $id_cat = $_POST['id_cat'];
                $idpro = $_POST['idpro'];
                update_product($name, $price, $img, $description, $id_cat, $idpro);
                header("location: ?act=listpro");
              }
              $list_cate = list_cate();
              include "products/edit-product.php";
              break;
            }
          case "deletepro": {
              if (isset($_GET['idpro']) && $_GET['idpro'] > 0) {
                delete_product($_GET['idpro']);
                header("location: ?act=listpro");
              }
              break;
            }
            //product_attributes
          case "listattr": {
              if (isset($_GET['id']) && $_GET['id'] > 0) {
                $id = $_GET['id'];
                $list_attributes = list_attribute_pro($id);
              }
              include '../admin/product_attributes/list-product-attributes.php';
              break;
            }
          case "addattribute": {
              if (isset($_POST['btnsubmit'])) {
                $id_pro = $_POST['id_pro'];
                $id_size = $_POST['id_size'];
                $quantity = $_POST['quantity'];

                add_product_attribute($id_pro, $id_size, $quantity);
              }
              $listpro = list_product();
              $listsize = all_size();
              include '../admin/product_attributes/add-product-attributes.php';
              break;
            }

            // look book
            case "news":
              $list_new = list_lookbook();
              include "./lookbook/list-lookbook.php";
              break;
              
            case "addnews":
              if(isset($_POST['btnsubmit'])){
                $title = $_POST['title'];
                $content= $_POST['content'];
                $filename = $_FILES['img']['name'];
                $target_dir = "../img/";
                $target_file = $target_dir . basename($_FILES["img"]["name"]);
                      if (move_uploaded_file($_FILES["img"]["tmp_name"], $target_file)) {
                          echo "The file ". htmlspecialchars( basename( $_FILES["img"]["name"])). " has been uploaded.";
                        } else {
                          echo "Sorry, there was an error uploading your file.";
                        }
                $date_add = $_POST['date_add'];    
                add_lookbook($title, $content, $filename,$date_add);
                header("location:?act=listnews");
                }
                include "./lookbook/add-lookbook.php";
                break;
    
            case "editnews":
                  if(isset($_GET['id']) & $_GET['id'] > 0){
                      $id = $_GET['id'];
                      $new1 = updateone_loobbook($id);
                  }
                  include "./lookbook/edit-lookbook.php ";
                  break;
            case "suanews":
                  if(isset($_POST['btnsubmit'])){
                    $id = $_POST['id'];
                    $title = $_POST['title'];
                    $content= $_POST['content'];
                    $filename = $_FILES['img']['name'];
                    $target_dir = "../img/";
                    $target_file = $target_dir . basename($_FILES["img"]["name"]);
                          if (move_uploaded_file($_FILES["img"]["tmp_name"], $target_file)) {
                              echo "The file ". htmlspecialchars( basename( $_FILES["img"]["name"])). " has been uploaded.";
                            } else {
                              echo "Sorry, there was an error uploading your file.";
                            }
                    $date_add = $_POST['date_add'];    
                    update_lookbook($id,$title, $content, $filename,$date_add);
                    header("location:?act=listnews");
                    }
                    include "./lookbook/add-lookbook.php";
                    break;
  
                case "deletenews":
                      if(isset($_GET['id']) && $_GET['id'] > 0){
                        delete_lookbook($_GET['id']);
                          header("location: ?act=news");
                      }
                      break;
  
            // end lookbook


            // Khách hàng
          case "listuser": {
              $list_users = list_users();
              include "users/list-user.php";
              break;
            }
          case "adduser": {
              if (isset($_POST['btnsubmit'])) {
                $nameuser = $_POST['nameuser'];
                $password = $_POST['password'];
                $email = $_POST['email'];

                $role = $_POST['role'];
                add_user($nameuser, $password, $email,  $role);
                header("location: ?act=listuser");
              }
              include "users/add-user.php";
              break;
            }
          case "edituser": {
              if (isset($_GET['iduser']) && $_GET['iduser'] > 0) {
                $user = getone_user($_GET['iduser']);
              }
              if (isset($_POST['btnsubmit'])) {
                $nameuser = $_POST['nameuser'];
                $password = $_POST['password'];
                $email = $_POST['email'];

                $role = $_POST['role'];
                $iduser = $_POST['iduser'];
                update_user($nameuser, $password, $email,  $role, $iduser);
                header("location: ?act=listuser");
              }
              include "users/edit-user.php";
              break;
            }
          case "deleteuser": {
              if (isset($_GET['iduser']) && $_GET['iduser'] > 0) {
                delete_user($_GET['iduser']);
                header("location: ?act=listuser");
              }
              break;
            }

            //Billlllllll
          case "listbill":
            $list_bills = list_bill();
            include "bills/list-bill.php";
            break;
          case "billdetail":
            if (isset($_GET['id']) && $_GET['id'] > 0) {
              $id = $_GET['id'];
              $list_detail = list_attribute_bill($id);
            }
            include "bills/detail-bill.php";
            break;
          case "updatebill":
            if (isset($_GET['id']) && $_GET['id']) {
            $id = $_GET['id'];
            orderSetStatusOrder(1,$id);
            header("location: ?act=listbill");
            }
            include "bills/list-bill.php";
            break;
            // bình luận
            case 'dsbl':
              $listbl = loadall_comments(1);
              include "binhluan/list.php";
              break;
            case 'xoabl':
              if(isset($_GET['id']) && ($_GET['id']>0)){
                delete_bl($_GET['id']);
              }
              $listbl = loadall_comments(0);
              include "binhluan/list.php";
            break;
          case 'thongke':
            $dsThongKe = load_pro_cat_statistical();
            include "thongke/list.php";
            break;
          case 'bieudo':

            include "thongke/bieudo.php";
            break;
          case 'bieudongay':
            include "thongke/bieudongay.php";
            break;
            case 'bieudonam':
              include "thongke/bieudonam.php";
              break;
               case 'bieudopro':
              include "thongke/bieudopro.php";
              break;
          default: {
              include "trangchu/trangchu.php";
              break;
            }
        }
      } else {
        include "trangchu/trangchu.php";
      }
      ?>


    </div>
    <!-- footer -->
    <?php
    include "footer.php";
    ?>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <script src="../assets/js/admin.js"></script>
</body>

</html>