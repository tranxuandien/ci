<?php
/**
 * Created by PhpStorm.
 * User: GOLDEN LOTUS
 * Date: 5/17/2015
 * Time: 8:47 PM
 */
$user=array(
    "name" => "username",
    "size" => "25",
);
$pass=array(
    "name" => "pass",
    "size" => "25",
);
$email=array(
    "name" => "email",
    "size" => "25",
);
$gender1=array(
    "name" => "gender",
    "value" => "m",
    "checked" => TRUE,
);
$gender2=array(
    "name" => "gender",
    "value" => "f",
);
$opt=array(
    "1" => "Viet Nam",
    "2" => "Cambodia",
    "3" => "Malaysia",
);
$note=array(
    "name" => "note",
    "cols" => "40",
    "rows" => "5",
);
?>
<html>
<head>
    <meta charset="utf-8">
    <h2>DEMO FORM HELPER</h2>
</head>
<body>
<?php
echo validation_errors();
echo form_open(base_url()."index.php/form/index");
echo form_fieldset("Member Register");
echo form_label("Fullname: ").form_input($user)."<br />";
echo form_label("Password: ").form_password($pass)."<br />";
echo form_label("Email: ").form_input($email)."<br />";
echo form_label("Gender: ").form_radio($gender1)."Male".form_radio($gender2)."Female<br />";
echo form_label("Country: ").form_dropdown("Country: ", $opt, 1)."<br />";
echo form_label("Note: ").form_textarea($note)."<br />";
echo form_label(" ").form_submit("ok",  "Register");
echo form_fieldset_close();
echo form_close();
?>
</body>
</html>