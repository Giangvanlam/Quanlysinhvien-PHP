<?php
require_once 'conn_data.php';

    // Lấy thông tin từ form chỉnh sửa
    $msv = $_POST['msv'];
    $ten = $_POST['ten'];
    $lop = $_POST['lop'];
    $id = $_POST['sid'];
    // Chuẩn bị câu truy vấn UPDATE
    $query = "UPDATE tb_qlsv SET msv = ?, ten = ?, lop = ? WHERE id = ?";
    $statement = $pdo->prepare($query);
    // Thực hiện cập nhật dữ liệu
    $statement->execute([$msv, $ten, $lop,$id]);
    // Kiểm tra xem có bản ghi bị cập nhật hay không
    if ($statement->rowCount() > 0) {
        header('location: home.php');
        exit(); // Kết thúc kịch bản sau khi chuyển hướng
    } else {
        echo "Không tìm thấy bản ghi để cập nhật!";
    }
?>
