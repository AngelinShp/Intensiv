<?php
	function sub($x, $y){
		return $x - $y;
	}

	function mul($x, $y){
		return $x * $y;
	}

	function div($x, $y){
		return $x / $y;
	}

	function plus($x, $y){
		return $x + $y;
	}
    $x=3;
    $y=-1;

    if ($x >= 0 && $y >= 0)
    {
    echo "$x и $y положительные";
    }
    $sub = sub($x, $y);
    echo "<br> Разность: <br/> $sub <br/>";
    $plus = plus($x, $y);
    echo "Сумма: <br/> $plus <br/>";
    $mul = mul($x, $y);
    echo "Произведение: <br/> $mul <br/>";

	if ($y != 0)
	{
	    $div = div($x, $y);
	    echo "Частное: <br/> $div <br/>";

	}
	else
	{
	echo 'Ты ещё в универе не учишься, чтобы на ноль мог смело делить!';
	}

?>


