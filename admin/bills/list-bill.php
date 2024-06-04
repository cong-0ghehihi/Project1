<div class="col-md-12">
    <h3>Danh sách sản phẩm</h3>
  
    <table class="table" id="table_sta" style="border: 1px black;">
        <thead style="border: 1px;">
            <tr>
                <th scope="col">STT</th>
                <th scope="col">Id bill</th>
                <th scope="col">Email</th>
                <th scope="col">Tên người dùng</th>
                <th scope="col">Phone</th>
                <th scope="col">Địa chỉ</th>
                <th scope="col">Phương thức thanh toán</th>
                <th scope="col">Trang thái</th>
                <th scope="col">Tổng tiền</th>
                <th scope="col">Ngày mua</th>
                <th scope="col" >Hành động</th>
            </tr>
        </thead>
        <tbody >
            <?php foreach($list_bills as $key => $value): ?>
            <tr >
                <th  scope="row">
                    <?php echo $key + 1; ?>
                </th>
                <td >
                    <?php echo $value['id']; ?>
                </td>
                <td >
                    <?php echo $value['email'] ; ?>
                </td>
                <td >
                    <?php echo $value['name_user']; ?>
                </td>
                <td >
                    <?php echo $value['phone']; ?>
                </td>
                <td >
                    <?php echo $value['address']; ?>
                </td>
                <td >
                    <?php echo $value['id_payment'] ; ?>
                </td>
                <td >
                    <?php if($value['id_status']==0): ?>
                        <div style="color:#0c075f;font-weight:600;background-color:#ffccbc;padding:5px 0;width:90px;text-align:center;border-radius:10px;align-items:center;line-height:25px">Chờ xác nhận</div>
                        <?php elseif($value['id_status']==-1): ?>
                            <div style="color:#0c075f;font-weight:600;background-color:#FA1B01;padding:5px 0;width:90px;height:60px;text-align:center;border-radius:10px;align-items:center;line-height:40px">Đã hủy</div>
                            <?php elseif($value['id_status']==1):?>
                                <div style="color:#0c075f;font-weight:600;background-color:#ff8a80;padding:5px 0;width:90px;text-align:center;border-radius:10px;align-items:center;line-height:25px">Đang giao hàng</div>
                                <?php elseif($value['id_status']==2):?>
                                    <div style="color:#0c075f;font-weight:600;background-color:#f5732e;padding:5px 0;width:90px;text-align:center;border-radius:10px;align-items:center;line-height:25px">Đã nhận hàng</div>     
                                    <?php endif ?>
                </td>
                <td >
                    <?php echo number_format($value['total_bill']); ?>₫
                </td>
                <td >
                    <?php echo $value['date_order']; ?>
                </td>
                <td  >
                    <span>
                    <?php if($value['id_status']==0):?> <a href="?act=updatebill&id=<?php echo $value['id']; ?>" class="btn btn-warning" style="width:100px">Giao hàng</a><?php endif ?>

                        <a href="?act=billdetail&id=<?php echo $value['id']; ?>" style="background-color: #ffc107;
                            border-color: #ffc107;width:100px;margin-top:10px" class="btn">Chi tiết</a>
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