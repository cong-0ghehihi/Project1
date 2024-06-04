<div class="all">
    <div class="bannertk">
            <div class="duongdan">
                <span class="chu">
                    <a href="index.php?act=home"><i class="fa fa-home"></i>Trang chủ</a>
                    <span>/</span>
                    <span class="name">LOOKBOOK</span>
                </span>
            </div>
            <div class="bannernew">  
            </div>
            <span   class="name-banner">LOOKBOOK</span>
        </div>
        <br>
    <div class="container">
      <div class="container-content">
        <div class="iframe-left">
          <!-- <iframe
            name="page"
            src="iframe.html"
            scrolling="auto"
            frameborder="0"
          ></iframe> -->
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
          <div class="div-scale">
            <h2>LOOKBOOK</h2>
            <br>
          </div>
          <div class="content">
            <?php
              foreach($list_look as $lb){
                extract($lb);
                $chitietnew  = 'index.php?act=lookbook&id='.$id;
                echo'
                <div class="content-look">
                <div class="image">
                  <a href="'.$chitietnew.'"
                    ><img src="./img/'.$img.'" width="440" alt=""
                  /></a>
                </div>
                <div class="look-name">
                  <a href="'.$chitietnew.'"><b>'.$Name.'</b></a>
                </div>
                <div class="look-date">
                  <i class="far fa-calendar-alt"></i>
                  <p>'.$date_add.'</p>
                  <i class="fas fa-comment-dots"></i>
                </div>
                <div class="look-status">
                  <p>
                    '.$title.'
                  </p>
                </div>
              </div>
                ' ;
              }
            ?>
          </div>
        </div>
      </div>
      <ul class="listPagenew">
      </ul> 
    </div>
</div>