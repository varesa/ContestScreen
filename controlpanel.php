<?php
    if(array_key_exists('id', $_GET)) {
	file_put_contents("./currenttask.txt", $_GET['id']);
    }
    
    $files = Array();
    
    $dir = opendir("tasks/");
    
    while (false !== ($file = readdir($dir))) {
	if(substr($file, 0, 1) != ".") {
	    array_push($files, $file);
	}
    }
?>

<!DOCTYPE html>
<html>
<head>
    <title>Hallinta</title>
    <style type="text/css">

        p {
            font-size: 30px;
        }

        .box {
            display: block;
            width: 80%;
            margin: auto auto;
            padding: 10px;
            border-radius: 30px;
        }

        #status_box {
            margin-top: 100px;
            height: 100px;
            background-color: #BBBBBB;
        }

        #status_box p{
            text-align: center;
        }

        #buttons_box {
            margin: auto auto;
            margin-top: 100px;
            height: 200px;
            background-color: #BBBBBB;
        }

        #buttons_box p {
            text-align: center;
        }

        #buttons_table {
            text-align: center;
            //display: block;
            width: 100%;
            height: 100px;
        }

        .button {
            background-color: #AAAAAA;
            padding: 20px;
            margin: 0 auto ;
            border-radius: 10px;
        }
    </style>
</head>
<body>
    <div id="status_box" class="box">
        <p>Nykyinen tehtävä: <span id="task_name"><?php
    	$name = file_get_contents("currenttask.txt");
    	$title = implode(array_slice(file("tasks/" . $name), 0, 1), "");
    	print($title);
        ?></span></p>
    </div>

    <div id="buttons_box" class="box">
        <p>Vaihda tehtävää:</p>
        <table id="buttons_table">
            <tr>
        	<?php
                foreach ($files as $file) {
            	    //$id = implode(array_slice(explode($file, "."), 0, -1), ".");
            	    $name = implode(array_splice(file("tasks/" . $file), 0, 1));
            	    print("<td><button id=\"button1\" class=\"button\" onClick=\"parent.location='controlpanel.php?id=$file' \">$name</button></td>");
            	}
                ?>
            </tr>
        </table>
    </div>
</body>
</html>