<div class="col-md-8">
    <h3>Thêm chi tiết sản phẩm </h3>
    <form method="post" action="?act=addattribute" >
    <div class="mb-3">
            <label for="danhmuc" class="form-label">Danh mục size</label><br>
            <select name="id_pro" id="danhmuc" class="form-control">
                <?php foreach($listpro as $value): ?>
                <option value="<?php echo $value['id']?>">
                    <?php echo $value['name'].$value['id']?>-<?php echo $value['id']?>
                </option>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="mb-3">
            <label for="quantity" class="form-label">Số lượng</label>
            <input type="number" class="form-control" min="1" id="quantity" placeholder="Nhập số lượng" name="quantity" />
        </div>

        <div class="mb-3">
            <label for="danhmuc" class="form-label">Danh mục size</label><br>
            <select name="id_size" id="danhmuc" class="form-control">
                <?php foreach($listsize as $value): ?>
                <option value="<?php echo $value['id']?>">
                    <?php echo $value['name']?>
                </option>
                <?php endforeach; ?>
            </select>
        </div>
        <button type="submit" class="btn btn-primary" name="btnsubmit">Thêm mới</button>
    </form>
</div>



