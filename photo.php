<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style type="text/css">
  	.container {
 max-width: 600px;
 margin: 15px auto;
 padding: 20px;
 text-align: center;
 background-color: Honeydew ;
 border-radius: 10px;
 box-shadow: 0 0 10px rgba(0,0,0,0.2);
}
    
    .container:first-child {
    margin-bottom: 20px;
  }
    
  </style>
</head>
<body>
	<div class=" container">
  <p id="result">

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["result"])) {
      $size = $_POST["size"];
      $count = $_POST["count"];
      $type = $_POST["type"];
      $price = 0;
      switch ($size) {
        case '10x15':
          $price = 3;
          break;
        case '20x30':
          $price = 8;
          break;
        case '30x40':
          $price = 15;
          break;
        case '40x50':
          $price = 45;
          break;
        case '50x70':
          $price = 75;
          break;
      }

      

      if ($count > 50) {
        $total *= 0.9;
      }

 if ($type == "matte") {
          $total = ($price * 1.05) * $count;
        } else {
          $total = $count * $price;
        }

        echo "Общая сумма оплаты = $total lei";
      }
    ?>
  </p>
  </div>
</body>
</html>
