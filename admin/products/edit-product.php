<div class="col-md-8">
    <h3>Sửa sản phẩm</h3>
    <form method="post" action="?act=editpro" enctype="multipart/form-data">
        <input type="hidden" name="idpro" value="<?php echo $product['id']; ?>">
        <div class="mb-3">
            <label for="name" class="form-label">Tên sản phẩm</label>
            <input type="text" class="form-control" id="name" placeholder="Nhập tên sản phẩm" name="name"
                value="<?php echo $product['name']; ?>" />
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Giá sản phẩm</label>
            <input type="number" class="form-control" id="price" placeholder="Nhập giá sản phẩm" name="price"
                value="<?php echo $product['price']; ?>" />
        </div>
    
        <div class="mb-3">
            <?php if($product['image'] != null && $product['image'] != ""): ?>
            <img width="100" src="<?php echo "../img/" . $product['image']; ?>" alt="">
            <?php endif; ?>
            <label for="image" class="form-label">Ảnh sản phẩm</label><br>
            <input type="file" id="image" name="image" />
        </div>
        <div class="mb-3">
            <label for="mota" class="form-label">Mô tả sản phẩm</label>
            <textarea name="description" id="mota" class="form-control"
                placeholder="Nhập mô tả sản phẩm"><?php echo $product['description']; ?></textarea>
        </div>
        <div class="mb-3">
            <label for="danhmuc" class="form-label">Danh mục sản phẩm</label><br>
            <select name="id_cat" id="danhmuc" class="form-control">
                <?php foreach($list_cate as $value): ?>
                <option value="<?php echo $value['id']?>" <?php if($product['id_cat'] == $value['id']): ?> selected
                    <?php endif; ?>>
                    <?php echo $value['name']?>
                </option>
                <?php endforeach; ?>
            </select>
        </div>
        <button type="submit" class="btn btn-primary" name="btnsubmit">Chỉnh sửa</button>
    </form>
</div>