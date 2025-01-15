<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ตารางสูตรคูณ</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            background-color: #66785F;
            font-family:"Noto Serif Thai", serif;
        }

        .container {
            max-width: 600px;
            margin: 50px auto;
            background: #ffffff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            color: #118B50;
            margin-bottom: 20px;
        }

        .multiplication-table {
            text-align: center;
            font-size: 18px;
            color: #343a40;
        }

        .multiplication-table div {
            margin: 5px 0;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>ตารางสูตรคูณ</h1>
        <!-- Form เพื่อรับค่าจากผู้ใช้ -->
        <form method="POST" action="{{ route('multiplication') }}">
            @csrf
            <div class="mb-3">
                <label for="multiplicationNumber" class="form-label">กรุณาระบุแม่สูตรคูณ</label>
                <input type="number" name="number" id="multiplicationNumber" class="form-control" placeholder="ใส่ตัวเลขที่ต้องการ" required>
            </div>
            <button type="submit" class="btn btn-success w-100">แสดงตารางสูตรคูณ</button>
        </form>

        <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['number'])) {
            $number = (int) $_POST['number']; // รับค่าจาก FORM และแปลงเป็นตัวเลข
            echo "<h2 class='mt-4'>แม่สูตรคูณแม่ $number</h2>";
            echo "<div class='multiplication-table'>";
            for ($i = 1; $i <= 12; $i++) {
                $result = $number * $i;
                echo "<div>$number × $i = $result</div>";
            }
            echo "</div>";
        }
        ?>
    </div>
</body>
</html>
