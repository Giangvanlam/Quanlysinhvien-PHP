
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
    <form action="add.php" method = "POST">
        <div class="mb-3">
            <label for="msv" >Mã</label>
            <input type="text" class="form-control" id="msv" name = "msv">
        </div>
        <div class="mb-3">
            <label for="ten" >Tên</label>
            <input type="text" class="form-control" id="ten" name = "ten">
        </div>
        <div class="mb-3">
            <label for="lop" >Lớp</label>
            <input type="text" class="form-control" id="lop"  name = "lop">
        </div>
        
        <button type="submit" class="btn btn-primary">Thêm sv</button>
    </form>
    </div>
</body>
</html>
