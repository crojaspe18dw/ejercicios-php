<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>ejercicio uno php</title>
    <style type="text/css">
        #par{
            color: blue;
        }
        #imp{
            color: red;
        }
    </style>
</head>
<body>
    <?php
        $array=[1,2,3,4,5,6,7,8,9,10,11,12];

        foreach ($array as $i) {
             if ($i%2==0) {
                  echo "<p id='par'>". $i ."</p>";
              }  
              else
                echo "<p id='imp'> ".$i."</p>";
           
        }


    ?>
    
</body>
</html>