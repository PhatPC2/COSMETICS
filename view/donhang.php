<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="bot" style="display: flex; margin-top:69px;" >
<div class="giohang" style="margin-top:150px ; margin-left:40px;">
<?php
if(isset($_SESSION['iddh'])&&($_SESSION['iddh']>0)){
$getshowcart= getshowcart($_SESSION['iddh']);
//echo var_dump($_SESSION['giohang']); 
if((isset($getshowcart))&&(count($getshowcart)>0)){
    echo '<table border="1" style="border-collapse: collapse;">
    <tr>
        <th style="background-color: pink; ">STT</th>
        <th style="background-color: pink; ">Tên sản phẩm</th>
        <th style="background-color: pink; ">Hình</th>
        <th style="background-color: pink; ">Đơn giá</th>
        <th style="background-color: pink; ">Số lượng</th>
        <th style="background-color: pink; ">Thành tiền</th>
    </tr>';
    $i = 0;
    $tong=0;
    foreach ($getshowcart as $item) {
        $tt= $item['quantity'] * $item['gia'];
        $tong+=$tt;
        echo '<tr>
        <td style="background-color: grey;">'.($i+1).'</td>
        <td>'.$item['tensp'].'</td>
        <td>./uploads/'.$item['img'].'</td>
        <td>'.$item['gia'].'</td>
        <td>'.$item['quantity'].'</td>
        <td>'.$tt.'</td>
    </tr>';
    $i++;   
    }
    echo '<tr><td colspan="5">Tổng trị giá</td><td>$'.$tong.'</td><td></td></tr>';
    echo '</table>';
}
}else{
    echo"Giỏ hàng rỗng. <a href='index.php'>Tiếp tục mua hàng</a>";
}
?>

</div>
<div class="col-md-4 contact-left-content">
<?php
if(isset($_SESSION['iddh'])&&($_SESSION['iddh']>0)){
 $orderinfo=getorderinfo($_SESSION['iddh']);
 if(count($orderinfo)>0){ 

?>
<h3 style="margin-top: 100px; margin-left:60px;">MÃ ĐƠN HÀNG:<?=$orderinfo[0]['ma_dh'];?> </h3>
<table class="dathang" style="margin-bottom:60px ; margin-left:25px;">
    <tr>
        <td><strong>Tên người nhận: <?=$orderinfo[0]['hoten'];?></strong></td>
    </tr>
    <tr>
        <td><strong>Địa chỉ giao hàng:  <?=$orderinfo[0]['address'];?></strong></td>
    </tr>
    <tr>
        <td><strong>Email người nhận:  <?=$orderinfo[0]['email'];?></strong></td>
    </tr>
    <tr>
        <td><strong>SĐT người nhận:  <?=$orderinfo[0]['tel'];?></strong></td>
    </tr>
    <tr>
        <?php
        switch ($orderinfo[0]['pttt']) {
            case '1':
                $txtmess = "Thanh toán khi nhận hàng";
                break;
            case '2':
                $txtmess = "Thanh toán Chuyển Khoản";
                break;
            case '3':
                $txtmess = "Thanh toán Ví MOMO";
                break;
            case '4':
                $txtmess = "Thanh toán Online";
                break;
            
            default:
                $txtmess="Quý khách chưa chọn thanh toán";
                break;
        }

?>


        </td>
    </tr>
   
</table>

<?php } 

 }?>
</div>
    </div>

</body>
</html>