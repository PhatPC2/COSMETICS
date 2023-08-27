<div class="container-fluid">
        <div class="row-title text-center" style="margin-top:20px;">
            <h3>Danh sách đơn hàng</h3>
        </div>
        <div class="table-responsive-sm">
            <table class="table table-bordered">
                <thead class="thead-light">
                    <tr>
                        <th style="width:360px;">Mã đơn hàng</th>
                        <th style="width:360px;">Khách hàng</th>
                        <th style="width:360px;">Địa chỉ</th>
                        <th style="width:360px;">Số điện thoại</th>
                        <th style="width:360px;">Phương thức thanh toán</th>
                        <!-- <th style="width:360px;">Trạng thái đơn hàng</th>
                        <th style="width:360px;">Trạng thái giao hàng</th> -->
                        <th style="width:360px;">Tổng</th>
                        <th style="width:360px;">Thao tác</th>
                    </tr>
                </thead>
                <?php
                    foreach ($listbill as $bill) {
                        extract($bill);
                        $xoabill="index.php?act=xoabill&ma_dh=".$ma_dh;
                        $chitiet_dh="index.php?act=listchitietdh&madh=".$ma_dh;
                        echo '
                        <tbody>
                            <tr>
                                <td style="padding-left: 100px;">'.$ma_dh.'</td>
                                <td style="padding-left: 100px;">'.$hoten.'</td>
                                <td>'.$address.'</td>
                                <td style="padding-left: 100px;">'.$tel.'</td>

                                <td style="padding-left: 100px;">'.$pttt.' </td>                               
                                <td style="padding-left: 80px;">'.$tongdonhang.'</td>
                                <td> <a href="'.$xoabill.'"><input type="button" value="Xóa"></a> <a href="'.$chitiet_dh.'"><input type="button" value="Chi tiết"></a></td>
                            </tr>
                        </tbody>';
                    }

                  
                ?>
             
 
            </table>
            </div>
        </div>
    </div>