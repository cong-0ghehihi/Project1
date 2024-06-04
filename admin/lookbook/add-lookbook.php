<div class="col-md-8">
    <h3>Thêm Lookbook</h3>
    <form method="post" action="index.php?act=addnews" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="name" class="form-label">Tên bài viết</label>
            <input type="text" class="form-control" id="name" placeholder="Nhập tên" name="name" />
        </div>
        <div class="mb-3">
            <label for="title" class="form-label">Nội dung title</label>
            <input type="text" class="form-control" id="title" placeholder="Nhập Nội dung title" name="title" />
        </div>
        <div class="mb-3">
            <label for="content" class="form-label">Nội dung</label>
            <input type="text" class="form-control" id="content" placeholder="Nhập giá sản phẩm" name="content" />
        </div>
     
        <div class="mb-3">
            <label for="image" class="form-label">Ảnh</label><br>
            <input type="file" id="image" name="img" />
        </div>
        <div class="mb-3">
            <label for="mota" class="form-label">Ngày đăng</label>
            <input type="text" class="form-control" id="date_add" placeholder="Nhập giá sản phẩm" name="date_add" />
        </div>
        <button type="submit" class="btn btn-primary" name="btnsubmit">Thêm mới</button>
    </form>
</div>
