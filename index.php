<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
        <form action="#" method="post">
            <select name="moja_lista" multiple>
                <option value="one">title_1</option>
                <option value="two">title_2</option>
                <option value="three">title_3</option>
                <option value="four">title_4</option>
            </select>
            <input type="submit" value="ok">

        </form>
        <hr>
        <?php
         if(isset($_POST["tytoly"])){
            $tablica = $_POST["tytoly"];
            foreach ($tablica as $key => $value){
                echo ("$value<br>");
            }
         }
        ?>
        
     
    
</body>
</html>