<?php
	$times_selected = array();

	$julien = array("J", "u", "l", "i", "e", "n");
	$rand7array = array();

	$N = 1;         // one dimension of $rand7array
	$M = 1;         // other dimension of the array
	$filler = 1;    // will be the 1..7 values in the array

	while($N <= 5)
	{
		while($M <= 5)
		{
		        if($M == 5 && $N > 1)
			{
			        $rand7array[$N][$M] = "x";
			}
			else
			{
		                $rand7array[$N][$M] = $filler;
			}
			$M++;
		        $filler++;
			if($filler == 8)
			{
			        $filler = 1;
			}
		}
		$N++;
		$M = 1;
	}

	
	function rand5()
	{
		return(rand(1,5));
	};
	
	$name = "";
	$x_selected = 0;
	while($name != "Julien")
	{
		$random7 = $rand7array[rand5()][rand5()];
		if($random7 == "x")
		{
		        $name = $name . $julien[$x_selected];
		        $x_selected ++;
		        continue;
		}
		$times_selected[$random7]++;
	}

	foreach($times_selected as $N => $times)
	{
		echo "<br/>" . $N . " was selected " . $times . " times.";
	}

	echo "<p>x was selected " . $x_selected . " times.</p>";
?>