<?php
         $content = "<h2> Задание 4.</h2>";
         $day = date("d.m.Y");
$html = <<<php
      <!doctipe html>
      <html lang = "en"></html>
      <head>
      <meta charset = "UTF-8">
      <meta mane = "vieport" content = "width = device-width, user- scalable = no, initial-scale = 1.0, maximum-scale = 1.0,  minimum-scale = 1.0">
      <meta http-equiv="X-UA-Compatible" content = "ie=edge">
      <title>Document</title>
      </head>
      <body>
        {$content}
       <h3>{$day}</h3>
      </body>
      </html>
      php;
echo $html;
?>   