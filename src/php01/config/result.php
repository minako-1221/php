<?php
$name = htmlspecialchars($_POST['name'], ENT_QUOTES);
$select = htmlspecialchars($_POST['select'], ENT_QUOTES);
$number = htmlspecialchars($_POST['number'], ENT_QUOTES);

print "私の名前は" . $name . "<br />";
print "ご希望の商品は、" . $select . "<br />";
print "注文数は、" . $number;