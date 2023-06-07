<?php
$html = <<<HTML
<!DOCTYPE html>
<html>
   <head>
      <meta charset="UTF-8">
      <title>Table de multiplication de 12</title>
      <link href="/css/style.css" rel="stylesheet" type="text/css">
      <style type='text/css'>
        td {
            text-align : right;
        }
      </style>
    </head>
    <body>
    <div id='page'>
HTML;

$nb = 12 ;
$html .= <<<HTML
    <a href='/'>Retour à l'index</a>
    <h1>Table de multiplication de {$nb}</h1>
    <table>
HTML;

// Les lignes de multiplication
for ($i=0; $i<=10; $i++)
{
    $html .= "<tr><td>$i&nbsp;&times;&nbsp;$nb&nbsp;=&nbsp;<td>".($i*$nb)."</tr>\n" ;
}

$html .= <<<HTML
    </table>
    </div>
    </body>
</html>
HTML;

echo $html ;