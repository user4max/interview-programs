<?php

$s = array(4, 5, 7, 11, 13);

foreach ($s as $elem)
{
	echo $elem. "\n";
}

while($argc == 2)
{
	$i = 0;
	while ($s[$i] &&  $i <= 5)
	{
		$j = 0;
		while ($s[$j] && $j <= 5)
		{
			if ($s[$i] + $s[$j] == $argv[1])
			{
				echo "s[" .$i. "] + s[" .$j. "]= " .$argv[1]. "\n";
				return 0;
			}
			$j++;
		}
		$i++;
	}
}
?>
