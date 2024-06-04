<div class="col-md-8">
          <h3>Sửa danh mục sản phẩm</h3>
          <form method="post" action="?act=editcate">
          <input type="hidden" value="<?php echo $categories['id']; ?>" name="id">
          <div class="mb-3">
              <label for="name" class="form-label">Tên danh mục</label>
              <input
                type="text"
                class="form-control"
                id="name"
                name="name"
                placeholder="Nhập tên danh mục"
                value="<?php echo $categories['name']; ?>"
              />
            </div>
            <button type="submit" name ="btnsubmit" class="btn btn-warning">Sửa</button>
          </form>
        </div>