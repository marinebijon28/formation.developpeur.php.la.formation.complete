<!DOCTYPE html>
<html>
    <head>
        <title>
            Premier pas en php
        </title>
    </head>
    <body>
        <h1>
            Premier pas dans la programmation
        </h1>
        <h2>
            Suivez le guide
        </h2>
        <?php
           $x = 17;
           // $x = $x + 3;
           $x += 3;
           echo $x . "<br/>";
           // $x = $x - 3;
           $x -= 3;
           echo $x . "<br/>";
           // $x = $x + 3;
           $x += 3;
           echo $x . "<br/>";
           // $x = $x * 3;
           $x *= 3;
           echo $x . "<br/>";
           // $x = $x / 3; not euclidean
           $x /= 3;
           echo $x . "<br/>";
           // $x = $x % 3; euclidean rounded
           $x %= 3;
           echo $x . "<br/>";
           // $x = $x ** 3;
           $x **= 3;
           echo $x . "<br/>";
           // $x = $x . 3; concatenate cast int to char
           $x .= 3;
           echo $x . "<br/>";
        ?>
    </body>
</html>