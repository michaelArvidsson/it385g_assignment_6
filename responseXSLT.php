<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/css?family=Roboto+Slab&display=swap" rel="stylesheet">
  <title>Document</title>
  <style>
  
  body {
       font-family: 'Roboto Slab', serif;
     }
  table {
        border-collapse: collapse;
        margin:auto;
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
  #head_a {
        color:darkslategrey;
        font-weight:bold;
        font-size:120%;
        max-width: 40px;
        transform: rotate(180deg);
        white-space: nowrap;
        text-align: center;
        text-shadow: 2px 2px rgba(0, 0, 0, 0.1);
        border-right:0px;
    }
    #head_b {
        color:darkslategrey;
        max-width: 60px;
        transform: rotate(180deg);
        white-space: nowrap;
        text-align: center;
        border-left:0px;
        border-right:0px;
    }
    #head_c {
        color:darkslategrey;
        max-width: 60px;
        transform: rotate(180deg);
        white-space: nowrap;
        text-align: center;
        border-left:0px;
    }
    h3 {
        text-align:center;
        text-decoration: underline; 
    }
  div{
    max-width: 800px;
    box-shadow: 1px 1px 1px 1px;
    padding: 10px;
    margin: 5px;
  }
  p {
    box-shadow: 1px 1px 1px 1px;
    padding: 3px;
  }
  span {
    margin:5px;
  }
  </style>
</head>
<body>
  <?php
    //Check POST if empty show nothing
    if(isset($_POST['paper'])){
        $paper=$_POST['paper'];
    }else{
        $paper="";
    }
    
    $xslDoc = new DOMDocument();
    $xslDoc->load("xslt_response.xsl");

    $xml = file_get_contents("https://wwwlab.iit.his.se/gush/XMLAPI/articleservice/articles?paper=".$paper);
    $xmlDoc = new DomDocument;
    $xmlDoc->preserveWhiteSpace = FALSE;
    $xmlDoc->loadXML($xml);

    $proc = new XSLTProcessor();
    $proc->importStylesheet($xslDoc);
    echo $proc->transformToXML($xmlDoc);
    
  ?>                                         
</body>
</html>