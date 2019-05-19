<?php

	$hand = ['goo', 'choki', 'pa'];
	$player = $_GET['player'];

	$rand = array_rand($hand);

	$comp = intval($rand);
	$janken_array = [
		'cpu'=>$hand[$rand],
		'result'=>''
	];

	//グーのとき
	if ($player == 0 && $comp == 1) {
		$janken_array['result'] = 'win!';
	}
	if ($player == 0 && $comp == 0) {
		$janken_array['result'] = 'draw';
	}
	if ($player == 0 && $comp == 2) {
		$janken_array['result'] = 'lose...';
	}
	
	//チョキのとき
	if ($player == 1 && $comp == 2) {
		$janken_array['result'] = 'win!';
	}
	if ($player == 1 && $comp == 1) {
		$janken_array['result'] = 'draw';
	}
	if ($player == 1 && $comp == 0) {
		$janken_array['result'] = 'lose...';
	}
	//パーのとき
	if ($player == 2 && $comp == 0) {
		$janken_array['result'] = 'win!';
	}
	if ($player == 2 && $comp == 2) {
		$janken_array['result'] = 'draw';
	}
	if ($player == 2 && $comp == 1) {
		$janken_array['result'] = 'lose...';
	}
	
	echo json_encode($janken_array);

	// } while ($player == $comp);

