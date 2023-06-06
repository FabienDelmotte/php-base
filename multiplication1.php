<?php
$html = <<<HTML
<!DOCTYPE html>
<html>
   <head>
      <meta charset="UTF-8">
      <title>Table de multiplication de 12</title>
      <link href="/css/style.css" rel="stylesheet" type="text/css">
    </head>
    <body>
    <div id='page'>
HTML;

$nb = 12 ;
$html .= <<<HTML
    <h1>Table de multiplication de {$nb}</h1>
HTML;

// Les lignes de multiplication
for ($i=0; $i<=10; $i++)
{
    $html .= "<p>$i&nbsp;&times;&nbsp;$nb&nbsp;=&nbsp;".($i*$nb)."\n" ;
}

$html .= <<<HTML
    </div>
    </body>
</html>
HTML;

echo $html ;