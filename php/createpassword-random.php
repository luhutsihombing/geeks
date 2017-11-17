<?php
function acakangkahuruf($n)
	{    	$karakter= 'ABCDEFGHIJKL';    
			$string = '';    
			for ($i = 0; $i < $n; $i++) 
				{   $pos 	 = rand(0, strlen($karakter)-1);
					$string .= $karakter{$pos};    
				}    
	return $string;
	}
echo acakangkahuruf(4);
?>