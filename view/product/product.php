<div class="bannertk">
        <div class="duongdan">
            <span class="chu">
                <a href="index.php?act=home"><i class="fa fa-home"></i>Trang chủ</a>
                <span>/</span>
                <span class="name">BỘ SƯU TẬP SUIT ADAM 20233</span>
            </span>
        </div>
        <div class="bannerlist">  
        </div>
        <span  class="tk">BỘ SƯU TẬP SUIT ADAM 20233</span>
    </div>
<div class="all">
    <div class="container">
    <div class="name-st">
         <div class="filters">
            <div class="dropdown">
               <div class="dropdownbtn">Bộ lọc <i class="fa fa-angle-down"></i></div>
               <div class="dropdown_content_filter">
                  <div><a href="<?=$_SERVER['REQUEST_URI']?>&min_price=0&max_price=10000000"> + Tất cả sản phẩm</a></div>
                  <div><a href="<?=$_SERVER['REQUEST_URI']?>&min_price=0&max_price=1000000"> + Dưới 1.000.000₫</a></div>
                  <div><a href="<?=$_SERVER['REQUEST_URI']?>&min_price=1000000&max_price=2000000"> + 1.000.000₫ - 2.000.000₫</a></div>
                  <div><a href="<?=$_SERVER['REQUEST_URI']?>&min_price=2000000&max_price=3000000"> + 2.000.000₫ - 3.000.000₫</a></div>
                  <div><a href="<?=$_SERVER['REQUEST_URI']?>&min_price=3000000&max_price=10000000"> + Trên 3.000.000₫</a></div>
               </div>
            </div>
         </div>
         <div class="name-hd"><h2 style="font-weight: 300;">BỘ SƯU TẬP SUIT ADAM 2023</h2></div>
         <div class="filters">
            <div class="dropdown">
               <div class="dropdownbtn">Tùy chọn <i class="fa fa-angle-down"></i></div>
               <div class="dropdown_content_filter">
                  <div><a href="<?=$_SERVER['REQUEST_URI']?>&order=ASC"> + Sắp xếp giá tăng</a></div>
                  <div><a href="<?=$_SERVER['REQUEST_URI']?>&order=DESC"> + Sắp xếp giá giảm</a></div>
               </div>
            </div>
         </div>
      </div>
      </div>
      <div class="list">
         <?php foreach ($all_products as  $value) { ?>
         <div class="item">
            <div class="image">
               <img src="img/<?php echo $value['image']; ?>" width="350" height="555" alt="">
            </div>
            <div class="contentlist">
               <div class="name">
                  <a href="index.php?act=product_d&idsp=<?php echo $value['id']?>">
                     <p class="name-pro"><?php echo $value['name']?> </p></a>
               </div>
               <div class="price">
                  <span><?php echo number_format($value['price'])?>₫</span>
               </div>
            </div>
         </div>
         <?php } ?>
      </div>
      <ul class="listPage">
      </ul> 
    </div>
    <div class="banner-footer">
         <div class="overlay-banner"></div>
         <div class="name-banner">
            <h2>REHIC SUIT - THƯƠNG HIỆU VESTON MAY SẴN</h2>
         </div>
      </div>
</div>