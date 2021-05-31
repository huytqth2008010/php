<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>danh sach sinh vien</title>
</head>
<body>
    <h1>DANH SACH SINH VIEN</h1>
    <?php
        $dshocsinh = [];
        $dshocsinh[] = [
            "name" => "Nguyen Van A",
            "age" => 18
        ];
        $dshocsinh[] = [
            "name" => "Nguyen Van B",
            "age" => 19
        ];
        $dshocsinh[] = [
            "name" => "Nguyen Van c",
            "age" => 20
        ];
    ?>
    <ul>
        <?php
        foreach($dshocsinh as $hs){?>
            <li><?php echo $hs["name"]."--".$hs["age"]; ?></li>
        <?php } ?>
    </ul>
    <a href="index.php">quay ve trang chu</a>
</body>
</html>
