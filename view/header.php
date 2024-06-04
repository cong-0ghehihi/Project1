<body>
    <header>
        <div class="menu">
            <img src="./img/LOGO.png" height="300px" alt="logo">
            <div class="thucthe">
                <nav>
                    <ul>
                        <li class="dropdown">
                            <a class="dropdownbtn" href="index.php?act=home">GIỚI THIỆU</a>
                        </li>
                        <li class="dropdown">
                            <a class="dropdownbtn" href="index.php?act=product">SẢN PHẨM <i class="fa fa-angle-down"></i></a>
                            <div class="dropdown_content">
                                <?php foreach ($listcate as $value) { ?>
                                    <a href="?act=product&id_cat=<?php echo $value['id'] ?>">
                                        <div><?php echo $value['name'] ?></div>
                                    </a>

                                <?php } ?>

                            </div>
                        </li>
                        <li class="dropdown">
                            <a class="dropdownbtn" href="index.php?act=new">LOOKBOOK</a>
                        </li>
                      <?php if(isset($_SESSION['user'])){?>
                        <li class="dropdown">
                            <a class="dropdownbtn" href="?act=yourorder">ĐƠN HÀNG</a>
                        </li><?php }?>
                    </ul>
                </nav>
            </div>
            <div class="hotro">
                <nav>
                    <ul>
                      
                        <li class="search-field">
                            <a class="dropdownbtn" id="search_icon" href="#">
                                Tìm kiếm 
                                <i class="fa-solid fa-magnifying-glass"></i>
                            </a>
                            <form action="index.php?act=product" class="form" method="POST">
                                <input type="text" placeholder="Bạn cần gì ...." name="keyword" >
                            </form>
                        </li>
                        <?php
                        if (isset($_SESSION['user'])) {
                            extract($_SESSION['user']);
                        ?>
                            <a href="?act=edit_user"><?php echo $name ?></a>
                            <li><a href="?act=logout"><i class="fas fa-sign-out-alt"></i></a></li>

                            <?php if (isset($role) && $role != 0): ?>
                                <li><a href="admin/index.php"><i class="fas fa-user-shield"></i></a></li> 
                                <?php endif ?>


                            
                        <?php } else { ?>

                            <li><a href="index.php?act=login"><i class="fa-solid fa-user"></i></a></li>
                        <?php } ?>
                        <li><a href="index.php?act=cart"><i class="fa-solid fa-cart-shopping"></i><span id="solong"></span></a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>