<div class="col-md-12" style="min-height: 365px;">
    <h3>Danh sách đơn hàng của  <?php  echo $email?></h3>
   


    <?php if (count($orders) > 0): ?>
    <table class="table" style="border: 1px black; width: 1350;margin: 20px auto;">
        <thead style="border: 1px;">
            <tr>
                <th scope="col">STT</th>
               
                <th scope="col">Tên người nhận</th>
                <th scope="col">Phone</th>
                <th scope="col">Địa chỉ</th>
                <th scope="col">Trang thái</th>
                <th scope="col">Tổng tiền</th>
                <th scope="col">Ngày mua</th>
                <th scope="col" style="width: 230px;">Hành động</th>
            </tr>
        </thead>
        <tbody >
            <?php foreach($orders as $key => $value): ?>
            <tr >
                <th  scope="row">
                    <?php echo $key + 1; ?>
                </th>
                
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
                    <?php if($value['id_status']==0): ?>
                        <div class="order-status waiting-confirmation">Chờ xác nhận</div>
                        <?php elseif($value['id_status']==-1): ?>
                            <div class="order-status order-cancelled">Đã hủy</div>
                            <?php elseif($value['id_status']==1):?>
                                <div class="order-status delivering">Đang giao hàng</div>
                                <?php elseif($value['id_status']==2):?>
                                    <div class="order-status order-received">Đã nhận hàng</div> 
                                    <?php endif ?>
                </td>
                <td >
                    <?php echo number_format($value['total_bill']); ?>₫
                </td>
                <td >
                    <?php echo $value['date_order']; ?>
                </td>
                <td  >
                    <span class="action-buttons">
                   <?php if($value['id_status']==0):?> <a href="?act=delbill&id=<?php echo $value['id']; ?>" class="cancel-button">Hủy đơn</a><?php endif?>

<?php if($value['id_status']==1):?><a href="?act=successbill&id=<?php echo $value['id']; ?>" style="width:72px" class="confirm-button">Xác nhận</a> <?php endif?>
    <a href="?act=detailorder&id=<?php echo $value['id']; ?>" style="background-color: #ffc107;
                            border-color: #ffc107;width:70px;" class="btn">Chi tiết</a>
                    </span>
                    
                </td>
                
            </tr>
            <?php endforeach; ?>


        </tbody>
    </table>
    <?php else:?>
        <p style="color: red;">Chưa có đơn hàng</p>
        <?php endif; ?>
</div>

