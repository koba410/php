<?php
$name = htmlspecialchars($_POST['name'], ENT_QUOTES);
print "お名前は、" . $name."<br/>";
$content = htmlspecialchars($_POST['content'], ENT_QUOTES);
print "ご注文は、" . $content."<br/>";
$number = htmlspecialchars($_POST['number'], ENT_QUOTES);
print "注文数は" . $number;