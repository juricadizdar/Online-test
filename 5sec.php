<html>
    <head>
        <meta charset="UTF-8">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
        <title></title>
        <script>
            function skriven(){
                $('#forma_2').hide();
                $('#drugi_div').hide();
            }
            var brojac = 6;
            var x = setInterval(timer,1000);
            function timer(){
               
                    brojac--;
                    $('#test_2').html(brojac);
                  
                if (brojac === 0){
                    $('#test_2').hide();
                    $('#drugi_div').show();
                }
                if (brojac === -5){
                    $('#drugi_div').hide();
                    $('#forma_2').show();
                } }
            
              function testiraj_2(){
                var x=document.getElementById("iime").value;
                var y=document.getElementById("pprezime").value;
               
                if (x==="" && y===""){
                    alert("Niste unijeli osobne podatke");
                }
            }
        </script>
        <style>
            p {display: inline;}
            #forma_1{margin-left: 2%; margin-right: 2%;}
            #prvi_div{height: 100%;}
            .div_1{ width: 100%; height: 47%;}
            .div_1_left{ width: 52%; float: left;}
            .div_1_right{ width: 48%; float: right;}
            .div_2{ width: 100%; height: 47%;}
            .div_2_left{ width: 52%; float: left;}
            .div_2_right{ width: 48%; float: right;}
            .div_3{ width: 100%;}
            .div_3_left{ width: 52%; float: left;}
            .div_3_right{ width: 48%; float: right;}
        </style>
    </head>
    <body onload="skriven()">
       
            <div id="test_2" style="font-size: 80px; text-align: center; margin-top: 300px;"></div>
        <div id="drugi_div">
        <?php
            $link = mysqli_connect('localhost', 'PA3', 'HocuGore123', 'PA3') 
            or die("Ne mogu se spojiti na bazu" . mysqli_connect_error());
    //echo "Spojen na bazu podataka PA3<br>";
    $qry = "SELECT * FROM rijeci WHERE ID = 2";
   // echo "Upit je $qry <br>";
    $rez = mysqli_query($link, $qry);
    if($rez){
        while ($r = mysqli_fetch_array ($rez, MYSQLI_NUM)) {
            $ss = explode(",", $r[1]);
            {?>
         
       
            <div class="div_1" style=" font-size: 30px; display: inline-block;">
                <div class="div_1_left">
                    <div class="p_1" style=" float: left;"><?php echo $ss[0]; ?></div>
                    <div class="p_2" style=" float: right;"><?php echo $ss[1]; ?></div>
                </div>
                <div class="div_1_right">
                    <div class="p_3" style=" float: right;"><?php echo $ss[2]; ?></div>
                </div>
            </div>
            <div class="div_2" style=" font-size: 30px;">
            <div class="div_2_left">
                <div class="p_4" style=" float: left;"><?php echo $ss[3]; ?></div>
                <div class="p_5" style=" float: right;"><?php echo $ss[4]; ?></div>
                </div>
                <div class="div_2_right">
                <div class="p_6" style=" float: right;"><?php echo $ss[5]; ?></div>
                </div>
            </div>
            <div class="div_3" style=" font-size: 30px;">
                <div class="div_3_left">
                    <div class="p_7" style=" float: left;"><?php echo $ss[6]; ?></div>
                    <div class="p_8" style=" float: right;"><?php echo $ss[7]; ?></div>
                </div>
                <div class="div_3_right">
                    <div style=" float: right;"><?php echo $ss[8]; ?></div>
                </div>
            </div><?php }  } } mysqli_close($link);?>
        </div>
            <form id="forma_2" method="post" action="baza2.php">
                
               <div style=" text-align: left;"><br>
                   <h2>Riječi moraju biti odvojene zarezom!!!</h2> 
                   <input type="text" name="ime11" id="ime11" size="90"/><br><br>
                   <div style=" text-align: left;">
                        <h2>Molimo Vas da prije potvrde unesete osobne podatke:</h2><br>
                        <p>Upišite svoje ime:</p><br><br>
                        <input type="text" name="iime" id="iime"/><br><br>
                        <p>Upišite svoje prezime:</p><br><br>
                        <input type="text" name="pprezime" id="pprezime"/><br><br>
                        <input type="submit" value="potvrdi" onclick="testiraj_2()"/>
                    </div>
                    </div>
           </form>
    </body>
</html>
