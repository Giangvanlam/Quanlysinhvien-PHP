
<?php
require_once 'conn_data.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $msv = $_POST['msv'];
    $ten = $_POST['ten'];
    $lop = $_POST['lop'];

    $addsql = "INSERT INTO tb_qlsv(msv,ten,lop) VALUES(?,?,?)";
    $statement = $pdo->prepare($addsql);
    $statement->execute([$msv, $ten, $lop]);
    header("Location: home.php");
    exit;
}
?>
