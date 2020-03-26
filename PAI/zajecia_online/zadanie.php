<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
         echo "tekst";
         $name= "janusz";
         $surname="kowalski";

            echo $name." ".$surname,"<br/>";
            echo $name." ".$surname,"<br/>";
            
            echo "$name $surname";
            echo '$name $surname';
            
            //heredoc
echo <<<SHOW
            <hr>
                imię: $name<br>
                Nazwisko: $surname
            <hr>
SHOW;

         //heredoc
         $tekst=<<<SHOW
         <hr>
             imię: $name<br>
             Nazwisko: $surname
         <hr>
SHOW;

echo $tekst;

            ?>
</body>
</html>
