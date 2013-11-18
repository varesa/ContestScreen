<?php

$id = $_GET['id'];

$template = file_get_contents("screen.html");

$info_url = "info/"  . $id . ".txt";
$img_url  = "info/"  . $id . ".jpg";
$task_url = "tasks/";

$info = file("info/" . $id . ".txt");

//print_r($info);
$name = implode(array_slice($info,0,1));
$text = implode(array_slice($info, 1));

$taskid = file_get_contents("currenttask.txt");

$task = file($task_url . $taskid);
$task_name = implode(array_slice($task, 0, 1),"<br>");
$task_text = implode(array_slice($task, 1), "<br>");



$replacements = array("<cont_name>"=>$name, "<cont_text>"=>$text, "<cont_img>"=>"img_url", "<task_name>"=>$task_name, "<task_text>"=>$task_text);
$template = str_replace(array_keys($replacements), $replacements, $template);
print($template);

?>
