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
// 6 задание
    
    $menu = [
     "home",
     "men" =>["shirt", "jacket", "T-shirt"],
     "women" => ["dress", "top", "skirt", "shoes"],
     "children" => ["dress", "top", "coat", "toys"]
    ];    
    
foreach ($menu as $key => $value) {
     
    if(! is_array ($value)){
       echo "<ul><b>" . $value . "</ul></b>";
         continue;
    }else
       
       echo "<ul><b>" . $key . "</b>";
 
        foreach ($value as $key => $options) {
          if($options == end($value)){
           echo  "<li>" . $options . "</li></ul>";   
          }else  
           echo  "<li>" . $options . "</li>";
        }
     
};        
    
    
 //1. задание
    
$a=0;
   while($a++ < 100) if($a % 3 == 0) 
   echo $a." ";


//2. задание
    
$b = 10;
$i = 0;
function pow1($i) {
  if ($i == 0) {
    return  "<hr>" . "$i" . " - это ноль <br/>" ;
  }
  if ($i % 2) {
    return "$i" . " - нечетное число <br/>";
  } else {
    return "$i" . " - четное число <br/>";
  }
}
 
do {
  echo pow1($i);
  $i++;
} while ($i <= $b);   
    
    

// 3. задание   
    
$obl = [
    "Московская область" => [
        "Москва", "Зеленоград", "Клин", "Звенигород", "Коломна", "Алабино", "Барвиха"
    ],
    "Ленинградская область" => [
        "Санкт-Петербург", "Всеволожск", "Павловск", "Кронштадт", "Выборг", "Алексеевка", "Беседа"
    ],
    "Рязанская область" => [
        "Касимов", "Сасово", " Скопин", "Рязань", " Кораблино", "Берестянки", "Вышгород", "Ключ", "Аманово"
    ]
];
    
    
foreach ($obl as $key => $value) {
 echo "<br> <b>" . $key . ":<br> </b>";
 
    foreach ($value as $key => $value) {
      echo $value . ", ";
     }
};    
    

// 8. задание 

echo "<hr>";
    
foreach ($obl as $key => $value) {
   echo "<br> <b>" . $key . ":<br> </b>";
 
  foreach ($value as $key => $value) {
     if(mb_substr($value, 0, 1) == "К") {
        echo $value . ", ";
        }
    }
};
echo "<hr>";  
    
    
//7. задание

for ($j = 0; $j <= 9; print $j++ . ","){};    
   
    
//4., 5, 9 задание 
    
    
function rus2translit($string) {
    $conv = array(
        "а" => "a",   "б" => "b",   "в" => "v",
        "г" => "g",   "д" => "d",   "е" => "e",
        "ё" => "ye",  "ж" => "zh",  "з" => "z",
        "и" => "i",   "й" => "y",   "к" => "k",
        "л" => "l",   "м" => "m",   "н" => "n",
        "о" => "o",   "п" => "p",   "р" => "r",
        "с" => "s",   "т" => "t",   "у" => "u",
        "ф" => "f",   "х" => "h",   "ц" => "c",
        "ч" => "ch",  "ш" => "sh",  "щ" => "sch",
        "ь" => "\'",  "ы" => "y",   "ъ" => "\'",
        "э" => "e",   "ю" => "yu",  "я" => "ya",
        
        "А" => "A",   "Б" => "B",   "В" => "V",
        "Г" => "G",   "Д" => "D",   "Е" => "E",
        "Ё" => "Ye",  "Ж" => "Zh",  "З" => "Z",
        "И" => "I",   "Й" => "Y",   "К" => "K",
        "Л" => "L",   "М" => "M",   "Н" => "N",
        "О" => "O",   "П" => "P",   "Р" => "R",
        "С" => "S",   "Т" => "T",   "У" => "U",
        "Ф" => "F",   "Х" => "H",   "Ц" => "C",
        "Ч" => "Ch",  "Ш" => "Sh",  "Щ" => "Sch",
        "Ь" => "\'",  "Ы" => "Y",   "Ъ" => "\'",
        "Э" => "E",   "Ю" => "Yu",  "Я" => "Ya",
    );
    return strtr($string, $conv);
}
    
function str2url($str) {
    
    // переводим в транслит
    $str = rus2translit($str);
    
    // заменям " " на "_"
    $str = preg_replace("/\s+/", "_", $str);
   
    return $str;
}    
 
 ?>    

<h3>Строка для транслитерации:</h3>
<form name = "form" method = "get"> 
<input name = "str" type = "text" style = "width: 300px">
</form>          

<?php         
$value = $_GET["str"];
$modified_value =  str2url($value);  
echo "<p>Введенное значение</p>" . $value . "<br>";
echo "<p>Измененное значение</p>" . $modified_value . "<br>";     
    
?>   
 
     
</body>

</html> 
  