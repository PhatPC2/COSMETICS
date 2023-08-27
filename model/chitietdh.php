<?php 

    function loadall_chitietdh(){
        $sql = "SELECT * from chi_tiet_don_hang order by ma_ctdh desc";
        $listchitietdh = pdo_query($sql);
        return $listchitietdh;
    }
    function loadone_chitietdh($id){
        $sql = "SELECT ct.ma_ctdh, ct.madh, hh.id, hh.tensp, hh.img, hh.gia, ct.quantity AS soluong, (hh.gia * ct.quantity) AS tong FROM chi_tiet_don_hang ct INNER JOIN tbl_sanpham hh ON ct.ma_hh = hh.id WHERE ct.madh = ".$id;
        $listchitietdh = pdo_query($sql);
        return $listchitietdh;
    }
    function insert_chitietdh($madh, $ma_hh, $quantity) {
        $sql = "INSERT INTO chi_tiet_don_hang (madh, ma_hh, size, quantity)
                VALUES ('$madh', '$ma_hh', $quantity)";
        pdo_execute($sql);
    }
?>