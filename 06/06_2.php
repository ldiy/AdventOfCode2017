<?php
$input='2	8	8	5	4	2	3	1	5	5	1	2	15	13	5	14';
for($i=0; $i<2;$i++){
$numbers=explode("\t",$input);
$prevnumbers='';
$y=0;
$ok=1;
$output=0;
while($ok){
	$x=0;
	$prevnumbers[$y]=implode("\t",$numbers);
	$y++;
	$maxnumber=max($numbers);
	while($maxnumber != $numbers[$x]){
		$x++;
	}
	$numbers[$x]=0;
	$x++;
	while($maxnumber > 0){
		$maxnumber--;
		if($x==16){$x=0;}
		
		$numbers[$x]++;
		$x++;
	}
	//echo implode("\t",$numbers) . "\n";
	$z=$y;
	$z--;
	while($z>=0){
		if($numbers==explode("\t",($prevnumbers[$z])))
		{
			$ok=0;
		}
		$z--;
	}
	$output++;
}
$input=implode("\t",$numbers);
}
echo $output;
?>