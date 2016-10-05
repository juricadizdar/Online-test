<html>
    <head>
        <meta charset="UTF-8">
    </head>
    <body>
        <?php
$ij = $_POST ["iiime"];
$pr = $_POST ["ppprezime"];
$imme = preg_split( '/(\s|&|,)/' , $_POST ["ime111"]);


        $liink = mysqli_connect('localhost', 'PA3', 'HocuGore123', 'PA3') 
                or die("Ne mogu se spojiti na bazu" . mysqli_connect_error());
                $qrry = "SELECT * FROM rijeci WHERE ID = 3";
                $reez = mysqli_query($liink, $qrry);
                while ($rrr = mysqli_fetch_array ($reez, MYSQLI_NUM)){
                    $brk = explode(",", $rrr[1]);
                } 
              
            
                $niizz = array_intersect($brk, $imme);
                $pro_key = array_keys($niizz);
                $rast = implode(",", $pro_key);
                
                $nnnnizz = count($niizz);
                $ab= implode("," , $niizz);
               // echo $a;
               mysqli_close($liink);
                $coon = mysqli_connect('localhost','PA3', 'HocuGore123', 'PA3') or 
                        die ("Malo si se zeznuo, sefe!".  mysqli_connect_error());
                    
                        $sqlll = "INSERT INTO PA3 . Rezultati_test3 (Ime, Prezime, Brojac, Pogodci, Pozicije) "
                                 . "VALUES ('$ij', '$pr', '$nnnnizz','$ab','$rast')";
        
        
                        $upis2 = mysqli_query($coon, $sqlll);
        
                        if(!$upis2){
                                die("Pogreska".mysqli_error($coon));
                         }
                        
                                
                                mysqli_close($coon);
                                
           echo "<br>"."<br>"."<br>";
           echo "Vaše ime:"." ".$ij."<br>"."<br>";
           echo "Vaše prezime:"." ".$pr."<br>"."<br>";
           echo "Pogodili ste:"." ".$nnnnizz." "."riječi"."<br>"."<br>";
           echo "Pogođene riječi su:"." ".$ab."<br>"."<br>";
           echo "Pogođene pozicije su:"." ".$rast;
           echo '<h3>Želite li ponoviti test?<h3>';
           echo '<button ><a href="http://arwen.unin.hr/~judizdar/zavrsni_projekt/index.php" style="text-decoration: none; color: black;"/>Pokusajte ponovno</button>';
?>
    </body>
</html>
