<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php
    $xslDoc = new DOMDocument();
    $xslDoc->load("xslt_response.xsl");

    $xml = file_get_contents('https://wwwlab.iit.his.se/gush/XMLAPI/articleservice/articles/');
    $xmlDoc = new DomDocument;
    $xmlDoc->preserveWhiteSpace = FALSE;
    $xmlDoc->loadXML($xml);

    $proc = new XSLTProcessor();
    $proc->importStylesheet($xslDoc);
    echo $proc->transformToXML($xmlDoc);
  ?>                                         
</body>
</html>