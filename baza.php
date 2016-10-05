<html>
    <head>
        <meta charset="UTF-8">
    </head>
    <body>
<?php 
$i = $_POST ["ime"];
$p = $_POST ["prezime"];
$ime = preg_split( '/(\s|&|,)/' , $_POST ["ime1"]);

        $link = mysqli_connect('localhost', 'PA3', 'HocuGore123', 'PA3') 
                or die("Ne mogu se spojiti na bazu" . mysqli_connect_error());
        $qry = "SELECT * FROM rijeci WHERE ID = 1";
        $rez = mysqli_query($link, $qry);
        
        while ($r = mysqli_fetch_array ($rez, MYSQLI_NUM)){
            $z = explode(",",$r[1]);
        } 
                $nizz = array_intersect($z, $ime);
                $y = array_keys($nizz);
                $yy = implode(",", $y);

                $nnizz = count($nizz);
                $a= implode("," , $nizz);
               
              mysqli_close($link);
                $con = mysqli_connect('localhost','PA3', 'HocuGore123', 'PA3') or 
                        die ("Malo si se zeznuo, sefe!".  mysqli_connect_error());
                    
                        $sql = "INSERT INTO PA3 . Rezultat_test1 (Ime, Prezime, Brojac, Pogodci, Pozicije) "
                                 . "VALUES ('$i', '$p', '$nnizz','$a','$yy')";
        
        
                        $upis = mysqli_query($con, $sql);
        
                        if(!$upis){
                                die("Pogreska".mysqli_error($con));
                         }
                      mysqli_close($con); 
 
           echo "<br>"."<br>"."<br>";
           echo "Vaše ime:"." ".$i."<br>"."<br>";
           echo "Vaše prezime:"." ".$p."<br>"."<br>";
           echo "Pogodili ste:"." ".$nnizz." "."riječi"."<br>"."<br>";
           echo "Pogođene riječi su:"." ".$a."<br>"."<br>";
           echo "Pogođene pozicije su:"." ".$yy;
           echo '<h3>Želite li ponoviti test?<h3>';
           echo '<button ><a href="http://arwen.unin.hr/~judizdar/zavrsni_projekt/index.php" style="text-decoration: none; color: black;"/>Pokusajte ponovno</button>';
                   ?>
           
    </body>
</html>
               
 













  
    
            
    




