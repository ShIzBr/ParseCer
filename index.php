<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Parser cer</title>
</head>
<body>
   Загрузите файл сертификата
    <form action="answer.php" method="post" enctype="multipart/form-data">
       <input type="hidden" name="MAX_FILE_SIZE" value="10000" />
        <input name="userfile" type="file" />
        <input type="submit" name="btn" value="Ok">
    </form>
</body>
</html>