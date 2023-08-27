<?php 

    function loadall_bill(){
        $sql = "SELECT * from tbl_order dh order by ma_dh desc";
        $listbill = pdo_query($sql);
        return $listbill;
    }
    function loadone_bill($madh) {
        $sql = "SELECT * from tbl_order dh WHERE madh = ".$madh;
        $bill = pdo_query($sql);
        return $bill;
    }
    function delete_bill($ma_dh){
        $sql = "DELETE FROM tbl_order WHERE ma_dh=".$ma_dh;
        pdo_execute($sql);
    }
    function insert_dh($ma_tk, $ngay_dat, $nguoi_nhan, $dia_chi_nhan, $sdt_nhan, $payment, $email, $ma_gg) {
        $sql = "INSERT INTO tbl_order (ma_tk,ngay_dat,nguoi_nhan,dia_chi_nhan,sdt_nhan,payment,email,ma_gg,trang_thai_tt)
                VALUES ('$ma_tk','$ngay_dat','$nguoi_nhan','$dia_chi_nhan','$sdt_nhan','$payment','$email',$ma_gg,'$payment')";
        pdo_execute($sql);
    }
    function getlastinsertedid($ma_tk) {
        $sql = "SELECT * FROM tbl_order WHERE ma_tk = ".$ma_tk." ORDER BY madh DESC LIMIT 1";
        return pdo_query_one($sql);
    }
    function loaddhshipping_by_matk($ma_tk) {
        $sql = "SELECT * FROM tbl_order WHERE trang_thai_gh = 0 AND ma_tk = ".$ma_tk." ORDER BY madh DESC";
        $listbill_by_matk = pdo_query($sql);
        return $listbill_by_matk;
    }
    function loaddhshipped_by_matk($ma_tk) {
        $sql = "SELECT * FROM tbl_order WHERE trang_thai_gh = 1 AND ma_tk = ".$ma_tk." ORDER BY madh DESC";
        $listbill_by_matk = pdo_query($sql);
        return $listbill_by_matk;
    }
?>