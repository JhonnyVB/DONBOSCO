<!-- 
* Copyright 2016 Carlos Eduardo Alfaro Orellana
-->
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<title>RESULTADO</title>
	
     <!-- Normalize CSS -->
	<link rel="stylesheet" href="css/normalize.css">
    
     <!-- Materialize CSS -->
	<link rel="stylesheet" href="css/materialize.min.css">
    
     <!-- Material Design Iconic Font CSS -->
	<link rel="stylesheet" href="css/material-design-iconic-font.min.css">
    
    <!-- Malihu jQuery custom content scroller CSS -->
	<link rel="stylesheet" href="css/jquery.mCustomScrollbar.css">
    
    <!-- Sweet Alert CSS -->
    <link rel="stylesheet" href="css/sweetalert.css">
    
    <!-- MaterialDark CSS -->
	<link rel="stylesheet" href="css/style.css">
</head>
<body class="font-cover" id="login">
    <div class="container-login center-align">
        <div style="margin:15px 0;">

            <B>PROFESOR FELIX VINO VINO</B><br>   
        </div>
      
        <form method="post" action="index.html">
            <?php
                $p1 = $_REQUEST['P1'];
                $p2 = $_REQUEST['P2'];
                $p3 = $_REQUEST['P3'];
            
echo "<table class='egt'>";

echo "  <tr>";

echo "    <td>";

        echo "<b><P align='left'> PASO N 1:</p>";
        echo "<center>".$p1. " &nbsp  &nbsp &nbsp &nbsp ".$p3."<BR>";
        echo      " --- &nbsp = &nbsp ---<BR>";
        echo $p2. " &nbsp  &nbsp &nbsp &nbsp X </center>";

echo "    </td>";

echo "    <td>";

        echo "<b><P align='left'>PASO N 2:</p>";
        echo "<center>&nbsp &nbsp &nbsp &nbsp &nbsp".$p2. " x ".$p3."<BR>";
        echo      " X &nbsp = &nbsp --------<BR>";
        echo "&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp".$p1."<center>";
        

echo "    </td>";

echo "  </tr>";

echo "  <tr>";

echo "    <td>";

        echo "<b><P align='left'>PASO N 3:</p>";
        echo "<center>&nbsp &nbsp &nbsp &nbsp &nbsp".$p2 * $p3."<BR>";
        echo      " X &nbsp = &nbsp --------<BR>";
        echo "&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp".$p1."<center>";
        $px = ($p2 * $p3)/ $p1;

echo "    </td>";
echo "    <td>";

        echo "<b><P align='left'>PASO N 4:</p><br><br>";
        echo "<center> X = ".$px."</b>";

echo "    </td>";

echo "  </tr>";

echo "</table>";


            ?>


            
          <p> <center> <button class="waves-effect waves-teal btn-flat"> <b>REGRESAR &nbsp; </button></center>
        </form>
        <div class="divider" style="margin: 20px 0;"></div>
        
    </div>
    
    <!-- Sweet Alert JS -->
    <script src="js/sweetalert.min.js"></script>
    
    <!-- jQuery -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
	<script>window.jQuery || document.write('<script src="js/jquery-2.2.0.min.js"><\/script>')</script>
    
    <!-- Materialize JS -->
	<script src="js/materialize.min.js"></script>
    
    <!-- Malihu jQuery custom content scroller JS -->
	<script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
    
    <!-- MaterialDark JS -->
	<script src="js/main.js"></script>
</body>
</html>