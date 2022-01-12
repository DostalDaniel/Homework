function PrintResult($distance, $vrchol)
{
	global $INF;

	for ($i = 0; $i < $vrchol; ++$i)
	{
		for ($j = 0; $j < $vrchol; ++$j)
		{
			if ($distance[$i][$j] == $INF)
				echo str_pad("INF", 7);
			else
				echo str_pad($distance[$i][$j], 7);
		}

		echo "<br/>";
	}
	echo  "</pre>";
}

function FloydWarshall($graph, $vrchol)
{
	$distance = array();

	for ($i = 0; $i < $vrchol; ++$i)
		for ($j = 0; $j < $vrchol; ++$j)
			$distance[$i][$j] = $graph[$i][$j];