<!DOCTYPE html>
<html>
	<head>
		<title>Scopriamo il PHP</title>
	</head>
	<body background="https://th.bing.com/th/id/R.3a1c23a89aa905ab0d09187c5a18c395?rik=W%2bwIdDcvlXAEQQ&pid=ImgRaw&r=0">
	  <h1 style="font-size:50px;"><center style="color:Orange;">PHP</center></h1>
		<p><center style="color:Orange;font-size:20px;">PHP è un linguaggio di programmazione server side</center></p>
 	 			<center><img src="https://th.bing.com/th/id/R.13e7fc2bedc43afcce04e66cf5d4127f?rik=R3QtfZfWphWfDg&riu=http%3a%2f%2fpngimg.com%2fuploads%2fphp%2fphp_PNG27.png&ehk=8HINuT7854%2fOiSLQkiLRE2W4ZcuEib%2bHKiLpgEKMBbQ%3d&risl=&pid=ImgRaw&r=0" alt="PHP" height="200px" widht="200px"></center>
        <p><center style="color:Orange; font-size:20px;"><b>Con PHP,possiamo elaborare delle istruzioni altrimenti impossibili da realizzare solo con HTML</b></center></p>
		<h1><center style="color:Orange;">Questo,per esempio</center></h1>
		<center><img src= "https://i.ibb.co/Bc3fBqC/Foto1.png" alt="PHPMick"></center>
		<p><center style="color:Orange;font-size:20px">Si traduce in</center></p>
		
		<p><center style="color:Orange;"><?php 
		 echo "Michele Carrano <br>";
		$txt = "W3Schools.com";
		echo "I love " . $txt . " ! <br>";
		?></center></p>
        <h1><center style="color:Orange;">Operazioni come sottrazioni,divisioni,moltiplicazioni ed addizioni simili</center></h1>
        <center><img src= "https://i.ibb.co/Kbn1dPm/Foto2.png"></center></p>
        <p><center style="color:Orange;font-size:30px;">
        <h1><center style="color:Orange;">Si traducono in</center></h1>

        <?php
$x=4;
$y=4;
$z=1;
$somma=$x+$y+$z;
$media=$somma/3;

echo "I numeri sono " . $x . " " . $y . " " . $z . '<br>'; //Stampa dei numeri
echo "La somma è " . $somma . '<br>'; //Stampa della somma
echo "La media è " . $media . '<br>'; //Stampa della media
echo "Divisione per 2 di X,Y,Z " . $x/2 . " " . $y/2 . " " . $z/2 . '<br>' ; //Divisione
echo "Moltiplicazione per 3 di X,Y,Z " . $x*3 . " " . $y*3 . " " . $z*3 . '<br>' ; //Moltiplicazione
echo "Addizione per sè stesso di X,Y,Z " . $x+$x . " " . $y+$y . " " . $z+$z . '<br>'; //Numero addizionato a sè stesso
?></center></p>
		<h1><center style="color:Orange;">Abbiamo anche i costrutti If,Else</center></h1>
		<h2><center style="color:Orange;">I cicli For e While</center></h2>
        <h3><center style="color:Orange;">E le funzioni dove andiamo a richiamare i parametri in ingresso</center></h3>


        <p><center><img src="https://i.ibb.co/pbzCTtV/Foto3.png"></center></p>

        <p><center style="color:Orange;font-size:30px;">In questo caso,il risultato è il seguente</center></p>

        <p><center style="color:Orange;font-size:30px;">
        <?php
        function stampacolfor($stampa,$volte) //Funzione Stampa 
        {
            for ($i=0;$i<$volte;$i++) 
            {
                echo $stampa. '<br>';
            }
        }

            $repeat = 2;
            $operaio = 1300;
            $manager = 1800;
            $direttore = 2500;
            $stipendio = 2499;
            $risultato; //Variabile dove viene inserito il "ruolo" in base allo stipendio
            $cont=0; //Variabile da incremento per il while

            if ($stipendio<$operaio) //If Else per la stampa a video del ruolo in base allo stipendio
            {
                $risultato="Stagista";
            }
            else if (($stipendio>=$operaio) and ($stipendio<$manager))
            {
                $risultato="Operaio";
            }
            else if (($stipendio>=$manager) and ($stipendio<$direttore))
            {
                $risultato="Manager";
            }
            else if ($stipendio>=$direttore)
                $risultato="Direttore";

            echo "Ciclo For x3 <br>";

            for ($i=0;$i<3;$i++) //Ciclo For
            {
                echo $risultato. '<br>';
            }

            echo "Ciclo While x4 <br>";
            while ($cont<4) //Ciclo While
            {
                echo $risultato. '<br>';
                $cont++;
            }

            echo "Funzione stampa x2 <br>";

            $risultato = "MICHELE";
            stampacolfor($risultato,$repeat); //Funzione stampa con parametro in ingresso
            ?></center></p>

	</body>
</html>