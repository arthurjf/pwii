<html>

<body>
    <?php $elements = array(array(0, 0, 0), array(0, 0, 0), array(0, 0, 0));

    for ($x = 0; $x < 3; $x++) {
        $linha = "";
        for ($y = 0; $y < 3; $y++) {
            $element = $elements[$x][$y];
            $linha .= "<button>" . getChar($element) . "</button>";
            if ($y >= 2) {
                echo "<p>" . $linha . "</p>";
            }
        }
    } ?>
</body>

</html>

<?php

function getChar($player)
{
    switch ($player) {
        case 0:
            return "-";
            break;
        case 1:
            return "X";
            break;
        case 2:
            return "O";
            break;
    }
}

function changeGridTeam($grid, $x, $y, $team){

}

?>