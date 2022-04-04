<?php
$altura = 1.8;
$peso = 70;

echo "Peso = $peso<BR>";
echo "Altura = $altura<BR><BR>";

$imc = $peso / ($altura**2);
echo "IMC = $imc <BR><BR>";

for($x = 1; $x <= 10; $x++)
{
    for($y = 0; $y <= 10; $y++)
    {
        $tempMultiplicacao = $x * $y;

        echo "$x * $y = $tempMultiplicacao<BR>";
    }
    echo "<BR>";
}