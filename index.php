<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

        


        <form action="">
        <label>dolar/real</label>
        <input type="text" name="dolar">
        <input type="submit" value="Calcular">
    </form>

    <?php

        if (isset($_GET["dolar"]))
        {
        
            $d = $_GET["dolar"] *5.01;
           

            echo $d ;
        }
   

    ?>

        
        
        
        <form action="">
        <BR>
        <label>CALCULE SEU IMC:</label>
        <br>
        <label> Peso </label>
        <input type="text" name="PESO">
        <label> altura </label>
        <input type="text" name="ALTURA">
        <input type="submit" value="Calcular">
         </form> 

    <?php

        if (isset($_GET["PESO"]) && isset($_GET["ALTURA"]))
        {
         
            $P = $_GET["PESO"]; 
            $A = $_GET["ALTURA"];
            
            echo $P / ($A * $A) ;
        }
   

    ?>





</body>
</html>