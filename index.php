<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        #customers {
            font-family: Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        #customers td, #customers th {
            border: 1px solid #ddd;
            padding: 8px;
        }
        #customers tr:nth-child(even){background-color: silver;}

        #customers tr:hover {background-color: #ddd;}

        #customers th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
            background-color: cadetblue;
            color: white;
        }
    </style>
</head>

<body>
    <table id="customers">
        <tr>
            <th>Nama</th>
            <th>Nim</th>
            <th>Fakultas</th>
            <th>Jurusan</th>
            <th>Kelas</th>
        </tr>
        <tr>
            <?php
            for ($i=0; $i < 1000; $i++) { 
                echo "<tr>";
                echo "<td> Sudarman djumati </td>";
                echo "<td> 19024014065 </td>";
                echo "<td> Teknik </td>";
                echo "<td> Informatika </td>";
                echo "<td> A2/B </td>";
                echo "</tr>";
            }
        ?>
        </tr>
    </table>
</body>

</html>