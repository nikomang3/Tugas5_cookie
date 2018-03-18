<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Penghitung Website</title>
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet"href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link href="https://fonts.googleapis.com/css?family=Archivo+Narrow|Lobster" rel="stylesheet">
        <style type="text/css">
            body{
                background-color: #fff3a0;
            }
            #satu{
                height: 25%;
                width: 80%;
                margin: auto;
                text-align: center;
                background-color: #6bd6b7;
                color: #3a4c49;
                border: solid;
                border-width: 5px;
                border-color: #3a4c49;
                padding: 10px;
                box-sizing: border-box;
                margin-bottom: 24px;
                font-size: 14pt;
            }
        </style>
    </head>
    <body>
        <div id="satu">
            <?php  
                if (!isset($_COOKIE['count'])){
                    echo "<h3><b>Sebuah Website Belum Pernah Dikunjungi</b></h3>";
                }
                else{
                    $jumlah = $_COOKIE['count'];
                    echo "<h3><b>Sebuah Website Sudah Pernah Dikunjungi Sebanyak $jumlah kali</b> </h3><br>";
                    $tanggal = $_COOKIE['date'];
                    $waktu = $_COOKIE['time'];
                    echo "<table>";
                    echo "<tr>
                            <th>______Tanggal______</th>
                            <th>_______Pukul_______</th> 
                        </tr>
                        <tr>";
                    echo "<td>$tanggal</td>";
                    echo "<td>$waktu</td>";
                    echo "</tr> </table>";
                }
            ?>    
        </div>   
    </body>
</html>    
    
    
