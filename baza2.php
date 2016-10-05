<html>
    <head>
        <meta charset="UTF-8">
    </head>
    <body>

<?php
$ii = $_POST ["iime"];
$pp = $_POST ["pprezime"];
$iiii = $_POST["ime11"];
$proba = preg_split ('/(\s|&|,)/', $iiii);


       $link = mysqli_connect('localhost', 'PA3', 'HocuGore123', 'PA3') 
                or die("Ne mogu se spojiti na bazu" . mysqli_connect_error());
                $qry = "SELECT * FROM rijeci WHERE ID = 2";
                $rez = mysqli_query($link, $qry);
                while ($r = mysqli_fetch_array ($rez, MYSQLI_NUM)){
                    $moz = explode (",", $r[1]);
                }
             
                $niz1= array_intersect($moz, $proba);
                $niz2= array_keys($niz1);
                $ras = implode(",", $niz2);
                //print_r($niz1);
                $aa = implode(",", $niz1);
                
                $nnizzz = count($niz1);
               mysqli_close($link);
                $conn = mysqli_connect('localhost','PA3', 'HocuGore123', 'PA3') or 
                        die ("Malo si se zeznuo, sefe!".  mysqli_connect_error());
                    
                        $ssql = "INSERT INTO PA3 . Rezultati_test2 (Ime, Prezime, Brojac, Pogodci, Pozicije) "
                                 . "VALUES ('$ii', '$pp', '$nnizzz','$aa','$ras')";
        
        
                        $upis = mysqli_query($conn, $ssql);
        
                        if(!$upis){
                                die("Pogreska".mysqli_error($conn));
                         }
                        
                         mysqli_close($linkk);
                                mysqli_close($conn);
           echo "<br>"."<br>"."<br>";
           echo "Vaše ime:"." ".$ii."<br>"."<br>";
           echo "Vaše prezime:"." ".$pp."<br>"."<br>";
           echo "Pogodili ste:"." ".$nnizzz." "."riječi"."<br>"."<br>";
           echo "Pogođene riječi su:"." ".$aa."<br>"."<br>";
           echo "Pogođene pozicije su:"." ".$ras;
           echo '<h3>Želite li ponoviti test?<h3>';
           echo '<button ><a href="http://arwen.unin.hr/~judizdar/zavrsni_projekt/index.php" style="text-decoration: none; color: black;"/>Pokusajte ponovno</button>';
?>
    </body>
</html>
