<!DOCTYPE html>
<html lang="hu">
<head>
    <style>
        tr p{
            margin: 0;
            padding-top: 20px;
            height: 80px;
            font-size: x-large;
        }
        
    </style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Ülésrend</title>
</head>
<body>
    <?php
    
        $osztaly = array(
            array("1. oszlop", "Üres oszlop", "2. oszlop", "3. sor","Üres oszlop" , "4. sor", "5. sor"),
            array("Schwarcz Balázs","", "Halir Szabolcs", "Fehér László", "", "Gulcsik Zoltán", "Harsányi Ferenc"),
            array("Kiss Márton","", "Bartha László", "Krenner Dominik", "", "Járfás Dániel", "Végh Szabolcs"),
            array("Bella Marcell","", "Simon Attila", "", "Hadnagy Márk", "Rácz Dávid"),
            array("","","","Tanarur:D","","Toprecer Márton")
        );
    
    ?>

    <div class="container-fluid w-75 pt-5">
        <table class="table table-bordered table-sm border">
            <?php
                foreach($osztaly as $sorIndex => $sor){
                    echo "<tr>";
                    foreach($sor as $oszlop => $nev){
                        if($sorIndex == 0){
                            echo "<th scope=col width=5%>".$nev."</th>";
                        }else{
                            $class = "tanulo";
                            if(!$nev){
                                $class = "tolto";
                            }elseif($sorIndex == 3 and $oszlop == 3){
                                $class = "tanar";
                            }
                            echo "<td class=".$class.">".$nev."</td>";
                        }
                    }
                    echo "</tr>";
                }
            ?>
        </table>
    </div>
    <div class="container-fluid w-75 pt-5">
        <table class="table table-bordered table-sm border">
            <thead>
                <tr class="text-center">
                    <th scope="col" width="5%">#</th>
                    <th scope="col" width="12%">1. oszlop</th>
                    <th scope="col" width="12%">Üres oszlop</th>
                    <th scope="col" width="12%">2. oszlop</th>
                    <th scope="col" width="12%">3. oszlop</th>
                    <th scope="col" width="12%">Üres oszlop</th>
                    <th scope="col" width="12%">4. oszlop</th>
                    <th scope="col" width="12%">5. oszlop</th>
                </tr>
            </thead>
            <tr class="text-center align-middle">
                <th scope="row">1. sor</th>
                <td class="bg-success">
                    <p><?php echo $osztaly[0][0];?></p>
                </td>
                <td>
                    <p></p>
                </td>
                <td class="bg-primary">
                    <p>Halir Szabolcs</p>
                </td>
                <td class="bg-info">
                    <p>Fehér László</p>
                </td>
                <td>
                    <p></p>
                </td>
                <td class="bg-warning">
                    <p>Gulcsik Zoltán</p>
                </td>
                <td class="bg-danger">
                    <p>Harsányi Ferenc</p>
                </td>
            </tr>
            <tr class="text-center align-middle">
                <th scope="row">2. sor</th>
                <td class="bg-danger">
                    <p>Kiss Márton</p>
                </td>
                <td>
                    <p></p>
                </td>
                <td class="bg-success">
                    <p>Bartha László</p>
                </td>
                <td class="bg-primary">
                    <p>Krenner Dominik</p>
                </td>
                <td>
                    <p></p>
                </td>
                <td class="bg-info">
                    <p>Járfás Dániel</p>
                </td>
                <td class="bg-warning">
                    <p>Végh Szabolcs</p>
                </td>
            </tr>
            <tr class="text-center align-middle">
                <th scope="row">3. sor</th>
                <td class="bg-warning">
                    <p>Bella Marcell</p>
                </td>
                <td>
                    <p></p>
                </td>
                <td class="bg-danger">
                    <p>Simon Attila</p>
                </td>
                <td>
                    <p></p>
                </td>
                <td>
                    <p></p>
                </td>
                <td class="bg-primary">
                    <p>Hadnagy Márk</p>
                </td>
                <td class="bg-info">
                    <p>Rácz Dávid</p>
                </td>
            </tr>
            <tr class="text-center align-middle">
                <th scope="row">4. sor</th>
                <td colspan="4">
                    <p></p>
                </td>
                <td class="bg-dark text-light">
                    <p>Tanarur :D</p>
                </td>
                <td colspan="1">
                    <p></p>
                </td>
                <td class="bg-primary">
                    <p>Topercer Márton</p>
                </td>
            </tr>
            
        </table>
    </div>
</body>
</html>