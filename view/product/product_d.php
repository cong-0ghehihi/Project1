<?php
extract($product);
$img = "img/$image";
?>
<div class="bannertk">
   <div class="duongdan">
      <span class="chu">
         <a href="index.php?act=home"><i class="fa fa-home"></i>Trang chủ</a>
         <span>/</span>
         <span class="name">BỘ SƯU TẬP SUIT ADAM 2023</span>
      </span>
   </div>
   <div class="bannerlist">
   </div>
   <span class="tk">BỘ SƯU TẬP SUIT ADAM 2023</span>
</div>
<div class="all">
   <div class="container">
      <div>
         <form action="?act=addcart" method="post">
            <div class="product-detail-body-content" style="display:flex;justify-content: space-around;margin: 40px 0 20px 0;">


               <div class="product-detail-left">


                  <img src="<?php echo $img ?>" width="280" height="420" alt="">



                  <div class="parameter">
                     <div class="parameter-detail">
                        <p>THÔNG SỐ</p>
                     </div>
                     <div class="parameter-detail">
                        <p>BẢO HÀNH</p>
                     </div>
                  </div>
               </div>
               <div class="product-detail-right">
                  <h2><?php echo $product['namepro'] ?></h2>

                  <br>
                  <p><?php echo number_format($product['price']) ?>₫</p>
                  <br>
                  <div class="type-product-detail"><?= $product['description'] ?></div>
                  <div>
                  <div class="product-size">
                     <div class="name-size-detail">
                        SIZE:
                     </div>
                     <?php foreach ($sizes as $size) : ?>

                        <div id="input-option356" style="margin: 0 10px 0 0; ">
                           <div  class="radio">
                              <label >
                                 <input  type="radio" name="size" value="<?= $size['namesize'] ?>" required>
                                 <span><?= $size['namesize'] ?></span>
                              </label>
                           </div>
                           
                        </div>
                        <?php endforeach ?>
                  </div>
                  </div>
                  <div class="product-detail-quantity">
                     <p style="display: block;">Số Lượng: </p>
                     <div class="quantity" style="margin-top: 20px;">
                        <button type="button" class="quantityPC" onclick="minus()"><i class="fas fa-minus"></i></button>
                        <input type="number" id="quantity" name="quantity" min="1" max="10" value="0" required>
                        <button type="button" class="quantityPC" onclick="plus()"><i class="fas fa-plus"></i></button>
                     </div>
                  </div>
                  <div class="product-detail-actions">
                     <input type="submit" class="btnCart" value="Thêm vào giỏ" name="addtocart" placeholder="ADD TO CART" style="height: 55px; width: 160px; border-radius: 5px; margin-top: 10px; background-color: red;color: #fff; font-weight: bold;">

                     <input type="hidden" name="id" value="<?php echo $id ?>">
                     <input type="hidden" name="namepro" value="<?php echo $namepro ?>">
                     <input type="hidden" name="img" value="<?php echo $img ?>">
                     <input type="hidden" name="price" value="<?php echo $price ?>">

                     <input type="submit" class="btnCart" value="Mua hàng" name="addtobill" placeholder="ADD TO CART" style="height: 55px; width: 160px; border-radius: 5px; margin-top: 10px; background-color: red;color: #fff; font-weight: bold;">


                  </div>
               </div>
            </div>
         </form>
      </div>

      <div class="banner-size-product-detail">
         <img src="img/vendor_value_4.webp" width="700" height="470" alt="">
      </div>
      <div class="comment">
         <h2>BÌNH LUẬN</h2>
         <div class="cmt-content">
            <div class="box_content2  product_portfolio binhluan ">
               <table>
                  <?php foreach ($comment as $value) :
                     // $img_user = $img_path.$img_user;
                  ?>
                     <tr>

                        <td class="user-cmt">
                           <img src="./img/<?= $value['image_user'] ?>">
                           <?php echo '<h5 style="padding-bottom:5px">' . $value['name'] . '</h5 >'; ?>
                        </td>

                        <td><?php echo $value['content'] ?></td>
                        <td><?php echo $value['date_cmt'] ?></td>
                     </tr>
                  <?php endforeach; ?>
               </table>
            </div>
         </div>
         <?php
         if (isset($_SESSION['user'])) {
            extract($_SESSION['user']);
         ?>
            <div class="comment-content">
               <form action="index.php?act=product_d&idsp=<?= $id_pro ?>" method="post">
                  <input type="hidden" name="id_pro" value="<?= $id ?>">
                  <input type="hidden" name="image_user" value="<?= $id ?>">
                  <input type="text" name="content" class="cmt-content-detail" placeholder="Viết bình luận...">
                  <input type="submit" value="Đăng" name="sbt-cmt" class="sbt-cmt">
               </form>
            </div>
         <?php } ?>

      </div>
      <div>
         <div class="product-detail-relate">
            <h2 style="text-align: center;font-weight: 400;">SẢN PHẨM LIÊN QUAN</h2>
            <div class="product-detail-relate-to-detail">
               <?php
               foreach ($products_relate as $relate) {
                  extract($relate);
                  $img = $img_path . $image;
                  $linkpro = "index.php?act=product_d&idsp=" . $id;

                  echo '   
            <div class="item">
            <div class="image">
               <img src="' . $img . '" width="350" height="555" alt="">
            </div>
            <div class="contentlist">
               <div class="name">
                  <a href="' . $linkpro . '"><p class="name-pro">' . $name . '</p></a>
               </div>
               <div class="price">
                  <span>' . number_format($price) . '₫</span>
               </div>
            </div>
            </div>';
               }
               ?>
            </div>
         </div>
      </div>
      
      <script>
      let counterValue = 0; // Initial counter value

      function plus() {
         counterValue += 1;
         updateCounter();
      }

      function minus() {
         if (counterValue > 0) {
            counterValue -= 1;
            updateCounter();
         }
      }

      function updateCounter() {
         // Update the value attribute of the input with the current counter value
         document.getElementById('quantity').value = counterValue;
      }
         document.getElementById('quantity').addEventListener('submit', function(event) {
         event.preventDefault();
         });
      </script>

   </div>
</div>