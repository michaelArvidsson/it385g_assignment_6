<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/css?family=Roboto+Slab&display=swap" rel="stylesheet">
  <title>Newspaper article database</title>
  <style>
     body {
       font-family: 'Roboto Slab', serif;
     }
     #head {
        background-color: gold;
        color:darkslategrey;
        width:100%;
        font-size: 200%;
        font-weight: bold;
        letter-spacing: 5px;
        text-align: center;
        text-shadow: 2px 2px rgba(0, 0, 0, 0.1);
        padding:10px;
        margin-top:0px;
        margin-bottom:10px;
        box-shadow: 0px 0px 10px 2px inset;
    }
  form {
        width:600px;
        background-color: gold;
        padding:50px;
        margin:auto;      
        
        box-shadow: 0px 0px 10px 2px inset;
    }
    #form_body {
        Width:400px;
        margin:auto;
        font-weight:bold;
        font-size:15px;
    }

  </style>
</head>
<body>
<?php
$xslDoc = new DOMDocument();
$xslDoc->load("xslt_select.xsl");

$xml = file_get_contents('https://wwwlab.iit.his.se/gush/XMLAPI/articleservice/papers/');
$xmlDoc = new DomDocument;
$xmlDoc->preserveWhiteSpace = FALSE;
$xmlDoc->loadXML($xml);

$proc = new XSLTProcessor();
$proc->importStylesheet($xslDoc);
echo $proc->transformToXML($xmlDoc);
?>
</body>
</html>
