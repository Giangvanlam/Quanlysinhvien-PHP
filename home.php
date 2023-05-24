<?php
require_once 'conn_data.php';
$sql = "SELECT * from tb_qlsv";
$statement = $pdo->query($sql);
$members    = $statement->fetchAll();
if (!$members) {
  include 'page-not-found.php';
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

  <title>Quản lý sinh viên</title>

</head>

<body>
  <div class="container">
    <h1>Quản lý sinh viên</h1>
    <a href="form.php" class="btn btn-success">Thêm mới</a>

    <table class="table">
      <thead>
        <tr>
          <th scope="col">id</th>
          <th scope="col">Mã sinh viên</th>
          <th scope="col">Họ và Tên</th>
          <th scope="col">Lớp</th>
          <th scope="col">Sửa</th>
          <th scope="col">Xóa</th>
        </tr>
      </thead>
      <tbody>
        <?php
        foreach ($members as $member) {
        ?>
          <tr>
            <th scope="row"><?= $member['id'] ?></th>
            <td><?= $member['msv'] ?></td>
            <td><?= $member['ten'] ?></td>
            <td><?= $member['lop'] ?></td>
            <td>
              <a href="edit.php?id=<?= $member['id'] ?>"><i class="bi bi-pencil-square"></i></a>
            </td>
            <td>
              <a href="del.php?id=<?= $member['id'] ?>"><i class="bi bi-trash3-fill"></i></a>
            </td>
          </tr>
        <?php
        }
        ?>
      </tbody>
    </table>
  </div>

</body>

</html>