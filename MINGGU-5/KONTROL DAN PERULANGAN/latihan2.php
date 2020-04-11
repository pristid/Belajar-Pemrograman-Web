<html>
<form action="latihan2.php" method="POST">
 
Masukkan Angka : <input name="angka" type="text">
<br>
<input name="faktorial" type="submit" value="Hitung">
 
</form>
</html>

<?php
   $angka=$_POST["angka"];
   if($angka>=1)
{
  echo "Faktorial :<br>";
         
  for($i=1; $i <= $angka; $i++)
  {
     $faktorial = 1;
     echo $i. "! = "; 
         
     for($j=$i; $j > 0; $j--)
     {
         if($j == 1)
            {
                echo " 1 = " .$faktorial;
            }
         else
            {
                echo $j ." x ";
            }
    ;        $faktorial*=$j;
     }
     echo "</br>";
  }
}
else if($angka == 0)
{
   echo "0! = 1";
}
else
{
   echo "Coba Lagi!";
}
?>