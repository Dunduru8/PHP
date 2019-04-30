<!doctipe html>
 <html lang = "en">
  <head>
    <meta charset = "UTF-8">
    <meta mane = "vieport" content = "width = device-width, user- scalable = no, initial-scale = 1.0, maximum-scale = 1.0,  minimum-scale = 1.0">
    <meta http-equiv="X-UA-Compatible" content = "ie=edge">
    <title>Document</title>
 </head>
<body>

 <?php
    $a = (random_int(-1000, 999));
    $b = (random_int(-1000, 999));
    echo ("<p><b>Pандомное значение: </b> ");
    
      var_dump($a);
      var_dump($b);
    
    echo ("</p><hr>");
    if($a >= 0 && $b >= 0){
        echo ("<p><b>" . $d = $a - $b . "</b></p>");
    }else if($a < 0 && $b < 0){
       echo ("<p><b>" . $d = $a * $b . "</b></p>"); 
    }else if(($a < 0 && $b >= 0) ||($a >= 0 && $b < 0)){
        echo ("<p><b>" . $d = $a + $b . "</b></p>"); 
    };
    
    $a = (random_int(0, 15));
    var_dump($a);
   
    echo ("<p><b>Рандомное число = " . $a . ". Вывод числел начиная с рандомного числа до 15: ");
    switch($a){
        case "1": 
        echo ("<p>" . $a++ . "</p>");
        
        case "2": 
         echo ("<p>" . $a++ . "</p>");
        
        case "3": 
         echo ("<p>" . $a++ . "</p>");
       
        case "4": 
         echo ("<p>" . $a++ . "</p>");
       
        case "5": 
         echo ("<p>" . $a++ . "</p>");
       
        case "6": 
         echo ("<p>" . $a++ . "</p>");
        
        case "7": 
         echo ("<p>" . $a++ . "</p>");
        
        case "8": 
         echo ("<p>" . $a++ . "</p>");
        
        case "9": 
         echo ("<p>" . $a++ . "</p>");
        
        case "10": 
         echo ("<p>" . $a++ . "</p>");
        
        case "11": 
         echo ("<p>" . $a++ . "</p>");
        
        case "12": 
         echo ("<p>" . $a++ . "</p>");
        
        case "13": 
         echo ("<p>" . $a++ . "</p>");
        
        case "14": 
         echo ("<p>" . $a++ . "</p>");
        
        case "15": 
         echo ("<p>" . $a++ . "</p>");
        break;
    };
    
    function summ($x, $y){
        return $d = $x + $y;
    };
    
    function difference($x, $y){
        return $d = $x - $y;
    };
    function mult($x, $y){
        return $d = $x * $y;
    }
    function division($x, $y){
        return $d = $x / $y;
    };
    
   $arg1 = 23;
   $arg2 = 12;      
   $operation = "*";    
       
       
       
    function mathOperation($arg1, $arg2, $operation){
        switch($operation){
            case "+":
            echo ("<hr> Результат функции mathOperation " . summ($arg1, $arg2) . "<hr>");
            break;
                
            
            case "-":
            echo ("<hr> Результат функции mathOperation " . difference($arg1, $arg2) . "<hr>");
            break;
            
            case "*":
            echo ("<hr> Результат функции mathOperation " . mult($arg1, $arg2) ."<hr>");
            break;
                
            case "/":
            echo ("<hr> Результат функции mathOperation " . division($arg1, $arg2) . "<hr>");
            break;    
        }
    };
mathOperation($arg1, $arg2, $operation);
    
  
 $val = 5;
 $pow = 3;   
    
    
 function power($val, $pow){
  if($pow == 0){
    return 1;
  }
  if($pow < 0){
    return power( 1/$val, -$pow); 
  }
  return $val * power($val, $pow-1); // вызов функции внутри функции
}
 
echo ("Результат функции возведения в степень " .power($val, $pow) . "<hr>"); 
    
?>   
    
     
             
  <div >
    <?php 
    echo ("Текущий год ");  
    echo date("Y"); ?>  
  </div>    
</body>

</html>   