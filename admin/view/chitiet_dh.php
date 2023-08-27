<div class="container-fluid">
    <div class="row-title text-center" style="margin-top:20px;">
        <h3>Chi tiết đơn hàng</h3>
    </div>
    <div class="table-responsive-sm">
        <!-- <div class="d-flex ">
            <input type="submit" value="Select All" name="" class="form-control " style=" width:120px;background: linear-gradient(131deg, rgba(255,117,0,1) 12%, rgba(255,184,0,1) 86%); color:#fff;">
            <a href="index.php?act=addtk"><input type="submit" value="Thêm mới" class="btn btn-default border-0" style="margin:0 0 15px 15px; width:120px; background: linear-gradient(131deg, rgba(255,117,0,1) 12%, rgba(255,184,0,1) 86%); color:#fff;"></a>
            <input type="submit" value="Chỉnh sửa" class="btn btn-default border-0" style="margin:0 0 15px 15px; width:120px; background: linear-gradient(131deg, rgba(255,117,0,1) 12%, rgba(255,184,0,1) 86%); color:#fff;">
        </div> -->
        <table class="table table-bordered">
            <thead class="thead-light">
                <tr>
                    <th>Mã đơn hàng</th>
                    <th>Tên sản phẩm</th>
                    <th>Số lượng</th>
                    <th>Giá</th>
                    <th>Thành tiền</th>
                </tr>
            </thead>
            <?php
                $all = 0;
                foreach ($listchitietdh as $bill) {
                    extract($bill);
                    $price_1 = $gia;
                    $ttien = 0;
                    $ttien += $tong;
                    $all += $ttien;
                    $tien = $all + 5;
                    echo '
                    <tbody>
                        <tr>
                            <td>'.$madh.'</td>
                            <td>'.$tensp.'</td>
                            <td>'.$soluong.'</td>
                            <td>'.$price_1.'</td>
                            <td>'.$tong.'</td>
                        </tr>
                    </tbody>';
                }
            ?>
            <thead class="thead-light">
                <tr>
                    <th colspan="5" style="text-align: right">Phí vận chuyển: 5$</th>
                </tr>
                <tr>
                    <th colspan="5" style="text-align: right">Tổng tiền</th>
                    <?php
                        echo '<td>'.$tien.'.00</td>';
                    ?>
                </tr>
            </thead>
        </table>
    </div>
</div>
<!--  -->