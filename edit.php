<?php
require_once 'conn_data.php';

// Kiểm tra xem đã nhận được ID từ yêu cầu không
if (isset($_GET['id'])) {
    // Lấy ID từ yêu cầu
    $id = $_GET['id'];

    // Truy vấn để lấy thông tin hiện tại của sinh viên
    $query = "SELECT * FROM tb_qlsv WHERE id = ?";
    $statement = $pdo->prepare($query);
    $statement->execute([$id]);
    $member = $statement->fetch(PDO::FETCH_ASSOC);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Thêm sinh viên</title>
</head>

<body>
    <div class="container">
        <h1>Thêm mới sinh viên </h1>
        <form action="update.php" method="POST">
            <input type="hidden" name="sid" value="<?= $member['id'] ?>">
            <div class="mb-3">
                <label for="msv">Mã</label>
                <input type="text" class="form-control" id="msv" name="msv" value="<?= $member['msv'] ?>">
            </div>
            <div class="mb-3">
                <label for="ten">Tên</label>
                <input type="text" class="form-control" id="ten" name="ten" value="<?= $member['ten'] ?>">
            </div>
            <div class="mb-3">
                <label for="lop">Lớp</label>
                <input type="text" class="form-control" id="lop" name="lop" value="<?= $member['lop'] ?>">
            </div>

            <button type="submit" class="btn btn-primary">Cập nhật sinh viên</button>
        </form>
    </div>
</body>

</html>