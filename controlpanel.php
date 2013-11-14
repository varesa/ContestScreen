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
            margin-top: 100px;
            height: 100px;
            //background-color: #BBBBBB;
        }

        .button {
            background-color: #AAAAAA;
            padding: 20px;
            margin: 20px;
            border-radius: 10px;
            display: float;
            float: left;
        }
    </style>
</head>
<body>
    <div id="status_box" class="box">
        <p>Nykyinen tehtävä: <span id="task_name">Tehtävä 2</span></p>
    </div>

    <div id="buttons_box" class="box">
        <div id="button1" class="button">ABC</div>
        <div id="button2" class="button">DEF</div>
        <div id="button2" class="button">GHI</div>
    </div>
</body>
</html>