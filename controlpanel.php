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
        <p>Nykyinen tehtävä: <span id="task_name">Tehtävä 2</span></p>
    </div>

    <div id="buttons_box" class="box">
        <p>Vaihda tehtävää:</p>
        <table id="buttons_table">
            <tr>
                <td><button id="button1" class="button">ABC</button></td>
                <td><button id="button2" class="button">DEF</button></td>
                <td><button id="button2" class="button">GHIJ</button></td>
            </tr>
        </table>
    </div>
</body>
</html>