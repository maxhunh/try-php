<?php
    $aExtraInfo = getimagesize($_FILES['fupload-1']['tmp_name']);
    $sImage = "data:" . $aExtraInfo["mime"] . ";base64," . base64_encode(file_get_contents($_FILES['fupload-1']['tmp_name']));
?>
<!DOCTYPE html>
<html>
<head>
   <title>Demo get image</title>
</head>
<body>
    You image: <img src="<?php echo $sImage; ?>" alt=""> <br/>
    <a href="/index">Main page</a>
</body>
</html>