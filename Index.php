<!doctipe html>
<html lang = "en"></html>
<head>
     <meta charset = "UTF-8">
     <meta mane = "vieport" content = "width = device-width, user-scalable = no, initial-scale = 1.0, maximum-scale = 1.0, minimum-scale = 1.0">
     <meta http-equiv="X-UA-Compatible" content = "ie=edge">
     <title>Document</title>
</head>
   
     <body>
    <?php echo "Hello, world!" ;
    $a = 5;
    $b = '05';
    var_dump($a == $b);         //true потому что после приведения типов переменные равны 
    var_dump((int)'012345');     // потому что  int это тип данных integer для целых чисел
    var_dump((float)123.0 === (int)123.0); // потому что === типы тоже должны быть равны
    var_dump((int)0 === (int)'hello, world'); // true потому что операторы == и! = не сравнивают тип. «Hello world» автоматически преобразуется в целое число, равное 0 
    
    $x = 1;
    $y = 2;
    echo ("<p><b>Начальное значение:</b> ");
         var_dump($x);
         var_dump($y);
         echo ("</p>");
         $y = $y - $x;  //y = 1
         $x = $x + $y;   // x = 2;
         
    echo ("<p><b>Конечное значение:</b>  ");         
         var_dump($x);
         var_dump($y);
         echo ("</p>");
   ?>
     
    </body>
     