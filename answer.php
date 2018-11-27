<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Answer</title>
</head>
<body>
  
  <?php 
    function der2pem($der_data) {
       $pem = chunk_split(base64_encode($der_data), 64, "\n");
       $pem = "-----BEGIN CERTIFICATE-----\n".$pem."-----END CERTIFICATE-----\n";
    return $pem;
    }
    ?>
  
   <?php 
        $x509data = file_get_contents($_FILES['userfile']['tmp_name']);
        $certPem = der2pem($x509data);
        $certParse = openssl_x509_parse($certPem);
        ?>
     <pre>
         <?php 
            print_r($certParse);
         ?>
     </pre>
</body>
</html>