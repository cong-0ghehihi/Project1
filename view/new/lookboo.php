
<?php 
  if(is_array($new1)){
            extract ($new1);
           }
           $hinhpath = "./img/".$img;
              if(is_file($hinhpath)){
                $imgnew = "<img src='".$hinhpath."' height='500px'>";
                  }else{
                  $imgnew = "No photo";
               }
?>
           <div class="bannertk">
            <div class="duongdan">
                <span class="chu">
                    <a href="index.php?act=home"><i class="fa fa-home"></i>Trang chủ</a>
                    <span>/</span>
                    <span class="name">LOOKBOOK</span>
                    <span>/</span>
                    <span class="name"><?=$Name?></span>
                </span>
            </div>
            <div class="bannernew">  
            </div>
            <span  class="name-banner"><?=$Name?></span>
        </div>
<div class="all">
    <div class="container">
      <div class="container-content">
        <div class="iframe-left">
          <div class="container-iframe">
            <div class="name-iframe"><h3>RICHVEST AND PPC</h3></div>
            <div class="menu-iframe">
              <ul class="ul">
                <li><a href="#">NEW</a></li>
                <li><a href="#">KHUYẾN MÃI</a></li>
                <li><a href="#">ƯU ĐÃI VỚI ĐỐI TAC RICHVEST</a></li>
                <li><a href="#">SAO VIỆT & KHÁCH HÀNG</a></li>
                <li><a href="#">RICHVEST'S VIDEO</a></li>
              </ul>
            </div>
            <div class="image-iframe">
              <div class="image">
                <img src="img/iframe_banner_1.webp" width="250" alt="" />
              </div>
              <!-- <div class="image">
                <img src="img/iframe_banner_1.webp" width="250" alt="" />
              </div>
              <div class="image">
                <img src="img/iframe_banner_1.webp" width="250" alt="" />
              </div> -->
            </div>
          </div>
        </div>
        <div class="right">
          <div class="name-header">
            <h2>
              <i><b><?=$Name?></b></i>
            </h2>
            <div class="look-date">
              <i class="far fa-calendar-alt"></i>
              <?=$date_add?>
              <i class="fas fa-comment-dots" id="icon-detail"></i>
            </div>
            <!-- </div> -->
            <!-- <div class="content-detail-look"> -->
            <div class="content-article-detail">
              <p>
                <i class="fas fa-circle fa-xs"></i> 
                <?=$title?>
              </p>
              <p>
                <i class="fas fa-circle fa-xs"></i> 
                <?=$content?>
              </p>
              <p style="text-align: center">
              <?=$imgnew?>
              </p>
              <p>
                <i class="fas fa-circle fa-xs"></i>Để lại comment để được
                Richvest tư vấn nha !!
              </p>
            </div>
            <!-- </div> -->
            <div class="information-look">
              <span>---------------------</span>
              <p>
                RICHVEST STORE - THƯƠNG HIỆU VESTON MAY SẴN & GIÀY DA HANDMADE
                SỐ 1 VIỆT NAM
              </p>
              <p><i class="fas fa-check"></i>Website: www.richveststore.com</p>
              <p>
                <i class="fas fa-check"></i> Instagram:
                https://instagram.com/richvestvietnam
              </p>
              <p><i class="fas fa-check"></i>Shopee: https://shp.ee/nxveqap</p>
              <p>
                <i class="fas fa-check"></i>Lazada:
                https://www.lazada.vn/shop/richvest-store-official
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>        
    