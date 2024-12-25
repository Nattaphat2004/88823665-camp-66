<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ข้อ 4</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            background-color: #66785F;
            font-family: "Noto Serif Thai", serif;
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

        .number-list {
            text-align: left;
            font-size: 18px;
            color: #343a40;
        }

        .number-list div {
            margin: 5px 0;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>ตรวจสอบเลขคู่หรือเลขคี่</h1>
        <!-- Form เพื่อรับค่าเริ่มต้นและสิ้นสุด -->
        <form method="POST" action="">
            <div class="mb-3">
                <label for="startNumber" class="form-label">กรอกค่าเริ่มต้น (Start)</label>
                <input type="number" name="start" id="startNumber" class="form-control" placeholder="ตัวเลขเริ่มต้น" required>
            </div>
            <div class="mb-3">
                <label for="endNumber" class="form-label">กรอกค่าสิ้นสุด (End)</label>
                <input type="number" name="end" id="endNumber" class="form-control" placeholder="ตัวเลขสิ้นสุด" required>
            </div>
            <button type="submit" class="btn btn-success w-100">ตรวจสอบ</button>
        </form>

        <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['start']) && isset($_POST['end'])) {
            $start = (int)$_POST['start'];
            $end = (int)$_POST['end'];

            echo "<h2 class='mt-4'>ผลลัพธ์จาก $start ถึง $end</h2>";
            echo "<div class='number-list'>";
            for ($i = $start; $i <= $end; $i++) {
                $type = ($i % 2 == 0) ? 'เลขคู่' : 'เลขคี่';
                echo "<div>$i เป็น $type</div>";
            }
            echo "</div>";
        }
        ?>
    </div>
</body>

</html>
