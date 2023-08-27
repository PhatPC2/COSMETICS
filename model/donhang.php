<?php
function taodonhang($ma_dh,$tongdonhang,$pttt,$hoten,$address,$email,$tel){
    $conn=connectdb();
  $sql = "INSERT INTO tbl_order (ma_dh,tongdonhang,pttt,hoten,address,email,tel)
  VALUES ('$ma_dh', '$tongdonhang','$pttt','$hoten', '$address', '$email', '$tel')";
  // use exec() because no results are returned
  $conn->exec($sql);
  $last_id = $conn->lastInsertId();
  return $last_id;
}

function addtodetail($iddh, $idpro, $soluong){
    $conn=connectdb();
  $sql = "INSERT INTO chi_tiet_don_hang (madh,ma_hh,quantity)
  VALUES ('$iddh', '$idpro', '$soluong')";
  // use exec() because no results are returned
  $conn->exec($sql);
}

function getshowcart($iddh){
    $conn=connectdb();
    $stmt = $conn->prepare("SELECT * FROM chi_tiet_don_hang ctdh INNER JOIN tbl_sanpham sp ON ctdh.ma_hh = sp.id WHERE madh =".$iddh);
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $kq=$stmt->fetchAll();
    return $kq;
  }

  function getorderinfo($iddh){
    $conn=connectdb();
    $stmt = $conn->prepare("SELECT * FROM tbl_order WHERE ma_dh =".$iddh);
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $kq=$stmt->fetchAll();
    return $kq;
  }
