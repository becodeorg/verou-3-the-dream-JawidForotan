<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="get">
    <label for="destination">Your destination</label><br>
    <select name="destination" id="destination"><br>
    <option value="USA">USA</option>
    <option value="England">England</option>
    <option value="Russia">Russia</option>
    <option value="Australia">Australia</option>
    </select><br>
    <select name="Currency" id="Currency"><br>
    <option value="Dollar">Dollar</option>
    <option value="Pound">Pound</option>
    <option value="australianDollar">Australian dollar</option>
    <option value="Ruble">Ruble</option>
    </select><br>
    <input type="number" name="input" step="0.01">
    <input type="submit">
    </form>

    <?php
    $displayDes = $_GET["destination"];
    echo "The destination is $displayDes <br/> ";
    function convert($currency, $amount){
        if($currency == "Dollar"){
            $euroDollar = $amount * 0.95;
            echo "$amount dollar is $euroDollar €";
        }else if($currency == "Pound"){
          $euroPound = $amount * 1.10;
            echo "$amount pound is $euroPound €";
        }else if($currency == "Ruble"){
          $euroRuble = $amount/ 85.48;
            echo "$amount Ruble is $euroRuble €";
        }else if($currency == "australianDollar"){
          $euroAusDollar = $amount * 1.15;
            echo "$amount Australian dollar is $euroAusDollar €";
        }
    }
    
    convert($_GET["Currency"], $_GET["input"]);
    
   
    ?>

  

   
    
   
    
    
  

  
    
</body>
</html>