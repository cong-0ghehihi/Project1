<?php
if(is_array($new1)){
  extract($new1);
}
    $hinhpath = "../img/".$img;
    if(is_file($hinhpath)){
       $imgnew = "<img src='".$hinhpath."' height='100px'>";
        }else{
        $imgnew = "No photo";
        }
?>
<div class="col-md-8">
    <h3>Thêm Lookbook</h3>
    <form method="post" action="index.php?act=suanews" enctype="multipart/form-data">
    <input type="hidden" value="<?php echo $new1['id']; ?>" name="id">
        <div class="mb-3">
            <label for="name" class="form-label">Nội dung title</label>
            <input type="text" class="form-control" id="name" placeholder="Nhập tên" value="<?php echo $new1['Name'] ?>" name="Name" />
        </div>
        <div class="mb-3">
            <label for="title" class="form-label">Nội dung title</label>
            <input type="text" class="form-control" id="title" placeholder="Nhập Nội dung title" value="<?php echo $new1['title'] ?>" name="title" />
        </div>
        <div class="mb-3">
            <label for="content" class="form-label">Nội dung</label>
            <input type="text" class="form-control" id="content" placeholder="Nhập giá sản phẩm" value="<?php echo $new1['content'] ?>" name="content" />
        </div>
     
        <div class="mb-3">
            <label for="image" class="form-label">Ảnh</label><br>
            <input type="file" id="image"  name="img" />
            <?=$imgnew?>
        </div>
        <div class="mb-3">
            <label for="mota" class="form-label">Ngày đăng</label>
            <input type="text" class="form-control" id="date_add" placeholder="Nhập giá sản phẩm" value="<?php echo $new1['date_add'] ?>" name="date_add" />
        </div>
        <button type="submit" class="btn btn-primary" name="btnsubmit">Thêm mới</button>
    </form>
</div>        