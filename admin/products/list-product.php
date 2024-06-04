<div class="col-md-12">
    <h3>Danh sách sản phẩm</h3>
    <div id="form-pro-all">
        <a href="?act=addpro" style="height:37.333px;background-color:#25bc7c" class="btn btn-success">Thêm mới</a>
        <form id="form_pro" action="index.php?act=listpro" method="post">
            <input type="hidden" name="kyw">
            <select name="id_cat" id="" class="ldm">
                <option value="0" selected="selected">Tất cả</option>
                <?php
                foreach ($categories as $cat){
                    extract($cat);
                        echo '<option value="'.$id.'">'.$name.'</option>';
                }
                ?>
            </select>
            <input type="submit" name="Go" value="GO">
        </form>
    </div>
    <table class="table" id="table_sta" style="border: 1px black;">
        <thead style="border: 1px;">
            <tr>
                <th scope="col">STT</th>
                <th scope="col">Tên sản phẩm</th>
                <th scope="col">Giá</th>
                <th scope="col">Hình ảnh</th>
                <th scope="col">Mô tả</th>
                <th scope="col" style="width:100px">Danh mục</th>
                <th scope="col" >Hành động</th>
            </tr>
        </thead>
        <tbody >
            <?php foreach($listpro as $key => $value): ?>
            <tr >
                <th  scope="row">
                    <?php echo $key + 1; ?>
                </th>
                <td >
                    <?php echo $value['name']; ?>
                </td>
                <td >
                    <?php echo number_format($value['price']) ; ?>
                </td>
                <td >
                    <?php if($value['image'] != "" && $value['image'] != null):?>
                    <img width="100" height="150" src="<?php echo "../img/" . $value['image']; ?>" alt="">
                    <?php endif; ?>
                </td>
                <td >
                    <?php echo $value['description']; ?>
                </td>
                <td >
                    <?php echo $value['namecate']; ?>
                </td>
                <td  >
                    <span>
                        <a href="?act=editpro&id=<?php echo $value['id']; ?>" class="btn btn-pro btn-warning">Sửa</a>

                        <button class="btn btn-pro btn-danger" data-bs-id="<?php echo $value['id']; ?>" data-bs-toggle="modal"
                            data-bs-target="#modalDelete">
                            Xóa
                        </button>
                        <a href="?act=listattr&id=<?php echo $value['id']; ?>" class="btn btn-pro btn-warning">Chi tiết</a>
                    </span>
                    
                </td>
                
            </tr>
            <?php endforeach; ?>


        </tbody>
    </table>
</div>


<div class="modal fade" id="modalDelete" tabindex="-1" aria-labelledby="modalDeleteLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalDeleteLabel">Thông báo</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Hành động này không thể hoàn tác. Bạn có muốn xóa không?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
                <a href="" class="btn btn-danger" id="btn-delete">Xác nhận xóa</a>
            </div>
        </div>
    </div>
</div>


<script>
var modalDelete = document.getElementById('modalDelete')
modalDelete.addEventListener('show.bs.modal', function(event) {
    var button = event.relatedTarget
    var idpro = button.getAttribute('data-bs-id')
    var link = `?act=deletepro&idpro=${idpro}`
    document.getElementById("btn-delete").setAttribute("href", link)
})
</script>