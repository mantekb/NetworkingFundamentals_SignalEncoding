<?php

function NRZ($bits,$n)
{
	if ($bits[0] == 0)
	{
		echo "¯";
	}
	else
	{
		echo "_";
	}
	for ($i = 1;$i <= $n-1;$i++)
	{
		
		if ($bits[$i] == 0 && $bits[$i - 1] == 0)
		{
			echo "¯";
		}
		else if ($bits[$i] == 1 && $bits[$i - 1] == 1)
		{
			echo "_";
		}
		else if ($bits[$i] == 0 && $bits[$i - 1] == 1)
		{
			echo "|¯";
		}
		else if ($bits[$i] == 1 && $bits[$i - 1] == 0)
		{
			echo "|_";
		}

	}
}
	
function INRZ($bits,$n)
{
	$flag = 0;

	
	if ($bits[0] == 0)
	{
		echo "_";
		$flag = 0;
	}
	else
	{
		echo "¯";
		$flag = 1;
	}
	for ($i = 1;$i <= $n-1;$i++)
	{

		if ($bits[$i] == 0)
		{
			if ($flag == 0)
				echo "_";
			else
				echo "¯";
		}
		else
		{
			if ($flag == 0)
				$flag = 1;
			else
				$flag = 0;

			if ($flag == 0)
				echo "|_";
			else
				echo "|¯";
		}
	}
}

function AMI($bits,$n)
{
	$flag = 0;
	
	if ($bits[0] == 0)
	{
		echo "-";
	}
	else
	{
		echo "¯";
		$flag = 1;
	}
	for ($i = 1;$i <= $n-1;$i++)
	{

		if ($bits[$i] == 0)
		{
			echo "-";
		}
		else if ($bits[$i] == 1 && $flag == 1)
		{
			$flag = 0;
			echo "_";
		}
		else if ($bits[$i] == 1 && $flag ==0 )
		{
			$flag = 1;
			echo "¯";
		}
	}
}

function pseudo($bits,$n)
{
	$flag = 0;
	
	if ($bits[0] == 1)
	{
		echo "-";
	}
	else
	{
		echo "¯";
		$flag = 1;
	}
	for ($i = 1;$i <= $n-1;$i++)
	{

		if ($bits[$i] == 1)
		{
			echo "-";
		}
		else if ($bits[$i] == 0 && $flag == 1)
		{
			$flag = 0;
			echo "_";
		}
		else if ($bits[$i] == 0 && $flag == 0)
		{
			$flag = 1;
			echo "¯";
		}
	}
}


function manchester($bits,$n)
{
	
	if ($bits[0] == 0)
	{
		echo "¯|_";
	}
	else
	{
		echo "_|¯";
	}
	for ($i = 1;$i <= $n-1;$i++)
	{

		if ($bits[$i] == 0 )
		{
			echo "|¯|_";
		}
		else if ($bits[$i] == 1 && $bits[$i - 1] == 1)
		{
			echo "|_|¯";
		}
		else if ($bits[$i] == 0 && $bits[$i - 1] == 1)
		{
			echo "¯|_";
		}
		else if ($bits[$i] == 1 && $bits[$i - 1] == 0)
		{
			echo "_|¯";
		}

	}
}

function diffman($bits,$n)
{
	$flag = 0;
	
	if ($bits[0] == 0)
	{
		echo "|_|¯";
		$flag = 0;
	}
	else
	{
		echo "¯|_";
		$flag = 1;
	}
	for ($i = 1;$i <= $n-1;$i++)
	{

		if ($bits[$i] == 0)
		{
			if ($flag == 0)
				echo "|_|¯";
			else
				echo "|¯|_";
		}
		else
		{
			if ($flag == 0)
				$flag = 1;
			else
				$flag = 0;

			if ($flag == 0)
				echo "_|¯";
			else
				echo "¯|_";
		}

	}
}

function B8ZS($bits,$n)
{
	$flag = 0;
	
	if ($bits[0] == 0)
	{
		echo "-";
		$flag = 0;
	}
	else
	{
		echo "¯";
		$flag = 1;
	}
	for ($i = 1;$i <= $n-1;$i++)
	{

		if ($i < $n-1 && $bits[$i] == 0 && $bits[$i + 1] == 0 && $bits[$i + 2] == 0 && $bits[$i + 3] == 0 && $bits[$i + 4] == 0 && $bits[$i + 5] == 0 && $bits[$i + 6] == 0 && $bits[$i + 7] == 0)
		{	
			echo "---";
			if ($flag == 1)
			{
				echo "¯_-_¯";
			}
			else
				echo "_¯-¯_";

			$i = $i + 8;
		}
		if ($bits[$i] == 0)
		{
			echo "-";
		}
		else if ($bits[$i] == 1 && $flag == 1)
		{
			$flag = 0;
			echo "_";
		}
		else if ($bits[$i] == 1 && $flag == 0)
		{
			$flag = 1;
			echo "¯";
		}
	}
}

?>