<?php
/** แสดงตารางสูตรคูณตามที่ระบุไว้ในตัวแปร */
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ข้อ 1</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            background-color: #FFFDF0;
            font-family: "Noto Serif Thai", serif;
        }

        .container {
            max-width: 300px;
            margin: 100px auto;
            background: #F5EFFF;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            color: #5CB338;
            margin-bottom: 20px;
        }

        .multiplication-table {
            font-size: 20px;
            color: #79D7BE;
        }

        .multiplication-table div {
            margin: 5px 0;
        }
    </style>
</head>

<body class = "body">
    <div class="container">
        <h1>แม่สูตรคูณแม่ 2</h1>
        <div class="multiplication-table">
            <?php
            for ($i = 1; $i <= 12; $i++) {
                $result = $i * 2;
                echo "<div>2 × $i = $result</div>";
            }
            ?>
        </div>
    </div>
</body>
</script>

</html>
