<?php
function array_swap(&$arr, $num){
	$temp1 = $arr[$num];
	$arr[$num] = $arr[0];
	$arr[0] = $temp1;
	return $arr;
}

$arr = [4, 5, 8, 9, 1, 7, 2];


$cnt = count( $arr );
for( $i=0; $i < $cnt; $i++ ){
	$max = 0;
	$position = 0;

	for( $j = 0; $j < $cnt - $i; $j++ ){
        if( $arr[ $j ] > $max ){
        	$max = $arr[ $j ];
        	$position = $j;
        }
	}

    if( $position > 0 ){
	    $arr = array_swap( $arr, $position );
	}

	if( $cnt - $i - 1 > 0 ){
		$arr = array_swap( $arr, $cnt - $i - 1 );
    }
}

var_dump($arr);

?>