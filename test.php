<?php

	//Print the sorted array 
	function ChessBoard(&$chess)
	{
		$n = 8;
		//Print the final answer
		for ($i = 0; $i < $n; ++$i)
		{
			for ($j = 0; $j < $n; ++$j)
				echo $chess[$i][$j] . " ";

			echo "<br/>";
		}
	}
	//Traverse through tree and check conditions
	function CheckConditions(&$chess, $row, $col)
	{
		$n = 8;
		$i; $j;
		//check if any queen in the left
		for ($i = 0; $i < $col; ++$i)
			if ($chess[$row][$i])
				return false;
		//check if any queen in the left upper diagonal
		for ($i = $row, $j = $col; $i >= 0 && $j >= 0; --$i, --$j)
			if ($chess[$i][$j])
				return false;
		//check if any queen in the left lower diagonal
		for ($i = $row, $j = $col; $j >= 0 && $i < $n; ++$i, --$j)
			if ($chess[$i][$j])
				return false;

		return true;
	}
	//Store the queens in particular place
	function StoreQueen(&$chess, $col)
	{
		$n =8;
		
		if ($col >= $n)
			return true;
		//for each row, check if storing the queen is possible
		for ($i = 0; $i < $n; ++$i)
		{
			if (CheckConditions($chess, $i, $col))
			{
				//if possible, place the queen at place (i, col)
				$chess[$i][$col] = 1;

				if (StoreQueen($chess, $col + 1))
					return true;
				//When no place remove the queen
				$chess[$i][$col] = 0;
			}
		}

		return false;
	}

	function FinalAnswer()
	{
		// Define array 
		$chess = array( 
			array(0, 0, 0, 0,0, 0, 0, 0),
			array(0, 0, 0, 0,0, 0, 0, 0),
			array(0, 0, 0, 0,0, 0, 0, 0),
			array(0, 0, 0, 0,0, 0, 0, 0),
			array(0, 0, 0, 0,0, 0, 0, 0),
			array(0, 0, 0, 0,0, 0, 0, 0),
			array(0, 0, 0, 0,0, 0, 0, 0),
			array(0, 0, 0, 0,0, 0, 0, 0)
		);

		if (StoreQueen($chess, 0) == false)
			return false;

		ChessBoard($chess);
		return true;
	}
//Calling the function to print array
	FinalAnswer();
?>