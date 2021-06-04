<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Thêm mới sản phẩm</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</head>
<body>
<div class="container">
    <div class="border-bottom p-2">
        <ul class="nav nav-pills nav-fill">
            <li class="nav-item">
                <a class="nav-link " aria-current="page" href="listproduct.php">Danh sách sản phẩm</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="newproduct.php">Thêm mới 1 sản phẩm</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="listcategory.php">Danh sách các thể loại</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Thêm mới 1 thể loại</a>
            </li>
        </ul>
    </div>
    <h1 class="p-2" style="text-align: center">Thêm mới sản phẩm</h1>
    <form action="savesp.php"  method="POST">
        <div class="form-group" >
            <input name="ten" class="form-control input-lg m-3" id="inputlg" type="text" placeholder="Nhập tên sản phẩm...">
            <input name="gia" class="form-control input-lg m-3" id="inputlg" type="number"  placeholder="Nhập giá sản phẩm...">
            <input name="mota" class="form-control input-lg m-3" id="inputlg" type="text" placeholder="Mô tả sản phẩm ...">
            <input name="tenncc" class="form-control input-lg m-3" id="inputlg" type="text" placeholder="Nhập tên nhà cung cấp ...">
        </div>
        <button type="submit" class="btn btn-success float-end">Thêm sản phẩm</button>
    </form>
</div>
</body>
</html>