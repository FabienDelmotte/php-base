<?php
$html = <<<HTML
<!DOCTYPE html>
<html>
   <head>
      <meta charset="UTF-8">
      <title>Table de multiplication d'un nombre</title>
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

$nb = 0 ;
if (isset($_GET['n']) && !empty($_GET['n']) && ctype_digit($_GET['n'])) {
    $nb = (int) $_GET['n'];
}

$html .= <<<HTML
    <a href='/nombre.html'>Retour au générateur</a>
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