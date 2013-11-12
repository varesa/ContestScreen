<?php

$id = $_GET['id'];

$template = file_get_contents("screen.html");

$info_url = "info/"  . $id . ".txt";
$img_url  = "info/"  . $id . ".jpg";
$task_url = "tasks/" . "task1.txt";

$info = file("info/" . $id . ".txt");

//print_r($info);
$name = implode(array_slice($info,0,1));
$text = implode(array_slice($info, 1));

//print("Test: " . $name);

$replacements = array("<cont_name>"=>$name, "<cont_text>"=>$text, "<cont_img>"=>"img_url", "<task>"=>"task text");
$template = str_replace(array_keys($replacements), $replacements, $template);
print($template);

?>
