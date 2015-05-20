<?php
/**
 * Created by PhpStorm.
 * User: GOLDEN LOTUS
 * Date: 5/18/2015
 * Time: 5:34 AM
 */
$upload=array(
    "name"=>"img",
    "size"=>"25"
)
?>
<html>
<head>
    <meta charset="utf-8">
    <title>PAGE UPLOAD</title>
</head>
<body>
<?php
echo form_open_multipart(base_url()."index.php/upload/up_load");
echo form_label("Avatar").form_upload($upload)."</br>";
echo form_label(" ").form_submit("ok", "Upload");
echo form_close();
?>
</body>
</html>