<?php
/**แสดงตารางสูตรคูณตามที่ระบุไว้ในตัวแปร */
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ข้อ 2</title>
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
            color: #118B50;
        
        }

        .multiplication-table div {
            margin: 5px 0;
        }
    </style>
  </head>

  <body class="body2">
   <div class="container">  
    <h1>พิสูจน์เลขคู่-คี่</h1>
    <div class="multiplication-table">

    <?php  
    $my_var;
    for ($i = 1; $i <= 100; $i++) {
        if($i % 2 == 0){
            echo " $i เป็นเลขคู่  <br>";
        }else{
            echo " $i เป็นเลขคี่  <br>";
        }
    }   
    ?>
</div>
</div>
        
  </body>
</html>