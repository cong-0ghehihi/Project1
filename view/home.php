<div class="container">
    <div class="bannersp">
        <img id="banner" src="./img/anh0.jpg" alt="">
        <button class="butt pre" onclick="pre()"><i class="fa-solid fa-chevron-left"></i></button>
        <button class="butt next" onclick="next()"><i class="fa-solid fa-chevron-right"></i></button>
    </div>
    <div class="anhloaihang">
        <a href="index.php?act=product&id_cat=2" class="xt m1">
            <div class="mot"><img class="anh" src="./img/vestmau.png" alt=""></div>
            <span class="SUIT">VEST</span>
            <p>XEM THÊM</p>
        </a>
        <div class="mini">
            <a class="xt m2" href="index.php?act=product&id_cat=3">
                <div class="hai"><img class="anh " src="./img/quanaumau.png" alt=""><span class="TROUSERS">TROUSERS</span>
                    <p>XEM THÊM</p>
                </div>
            </a>
            <a class="xt m3" href="index.php?act=product&id_cat=1">
                <div class="ba"><img class="anh " src="./img/ds.jpg" alt=""><span class="suit">SHIRT</span>
                    <p>XEM THÊM</p>
                </div>
            </a>
            <a class="xt m4" href="index.php?act=product&id_cat=4">
                <div class="bon"><img class="anh " src="./img/giaymau.png" alt=""><span class="SHOES">SHOES</span>
                    <p>XEM THÊM</p>
                </div>
            </a>
        </div>
    </div>
    <div class="list1">
    <p class="p">SẢN PHẨM BÁN CHẠY</p>
        <?php foreach ($product_hot as  $value) { ?>
            <div class="item1">
                <div class="image1">
                    <img src="img/<?php echo $value['image']; ?>" alt="">
                </div>
                <div class="contentlist1">
                    <div class="name1">
                        <a href="index.php?act=product_d&idsp=<?php echo $value['id'] ?>">
                            <p class="name-pro"><?php echo $value['name'] ?> </p>
                        </a>
                    </div>
                    <div class="price1">
                        <p><?php echo number_format($value['price']) ?>₫</p>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
    <div class="vestnew">
        <p>BST VEST MỚI</p>
        <div class="anhvest">
            <div class="sp1">
                <img src="./img/bst1.jpg" alt="">
            </div>
            <div class="sp1">
                <img src="./img/bst2.jpg" alt="">
            </div>
            <div class="sp1">
                <img src="./img/bst3.jpg" alt="">
            </div>
            <div class="sp1">
                <img src="./img/bst4.jpg" alt="">
            </div>
        </div>
    </div>
    <div class="videosp">
        <p>RICH VEST</p>
        <video type="video/mp4" controls muted src="./img/yt1s.com - THỜI TRANG VENESTO VÀ CẦU THỦ ĐOÀN VĂN HẬU SHORT_1080p.mp4"></video>
    </div>
    <div class="tinnew">
        <p class="look">LOOKBOOK</p>
        <div class="bangnew">
            <div class="tin">
                <a href="?act=lookbook&id=16">
                    <img src="./img/look1.jpg" alt="">
                    <p>REAL MEN-RICH VEST</p>
                </a>
            </div>
            <div class="tin">
                <a href="?act=lookbook&id=15">
                    <img src="./img/look2.jpg" alt="">
                    <p>DREAM OF VENICE</p>
                </a>
            </div>
            <div class="tin">
                <a href="?act=lookbook&id=14">
                    <img src="./img/look3.jpg" alt="">
                    <p>코리아 스프링 썸머 컬렉션 2023</p>
                </a>
            </div>
            <div class="tin">
                <a href="?act=lookbook&id=13">
                    <img src="./img/look4.jpg" alt="">
                    <p>LOST IN PARIS</p>
                </a>
            </div>
        </div>
    </div>
</div>