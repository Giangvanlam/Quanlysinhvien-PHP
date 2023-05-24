<?php
require_once 'conn_data.php';

// Kiểm tra xem đã nhận được ID từ yêu cầu không
if (isset($_GET['id'])) {
    // Lấy ID từ yêu cầu
    $id = $_GET['id'];

    // Hiển thị form xác nhận xóa
    echo '<form method="POST" action="del.php">';
    echo '   <input type="hidden" name="id" value="' . $id . '">';
    echo '   <p>Bạn có chắc chắn muốn xóa dữ liệu?</p>';
    echo '   <input type="submit" name="confirm" value="Xóa" class="btn btn-danger">';
    echo '   <input type="button" value="Hủy" onclick="history.back()" class="btn btn-secondary">';
    echo '</form>';
}

// Xử lý xóa dữ liệu khi người dùng xác nhận
if (isset($_POST['confirm'])) {
    // Lấy ID từ yêu cầu POST
    $id = $_POST['id'];

    // Chuẩn bị câu truy vấn DELETE
    $query = "DELETE FROM tb_qlsv WHERE id = ?";
    $statement = $pdo->prepare($query);

    // Thực hiện xóa dữ liệu
    $statement->execute([$id]);

    // Kiểm tra xem có bản ghi bị xóa hay không
    if ($statement->rowCount() > 0) {
        header('location:home.php');
    } else {
        echo "Không tìm thấy bản ghi để xóa!";
    }
}
?>
