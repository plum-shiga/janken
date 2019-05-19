<?php

	$hand = ['goo', 'choki', 'pa'];
	$player = $_GET['player'];

	// $playernum = intval($player);
	// echo "あなた「".$hand[$playernum]."」\n";
	//こちらの手の選択および表示

	$rand = array_rand($hand);

	// echo "相手「".$hand[$rand]."！」\n";
	$comp = intval($rand);
	$janken_array = [
		'cpu'=>$hand[$rand],
		'result'=>''
	];

	//グーのとき
	if ($player == 0 && $comp == 0) {
		$janken_array['result'] = 'aaa';
	}
	if ($player == 0 && $comp == 1) {
		$janken_array['result'] = 'bbb';
	}
	if ($player == 0 && $comp == 2) {
		$janken_array['result'] = 'ccc';
	}
	
	echo json_encode($janken_array);


/*
		//チョキのとき
		if ($player == 1 && $comp == 1) {
		echo "あいこです！もう一度\n".PHP_EOL;
		}
		if ($player == 1 && $comp == 2) {
		echo "あなたの勝ちです！".PHP_EOL;
		}
		if ($player == 1 && $comp == 0) {
		echo "あなたの負けです……".PHP_EOL;
		}
	
		//パーのとき
		if ($player == 2 && $comp == 2) {
		echo "あいこです！もう一度\n".PHP_EOL;
		}
		if ($player == 2 && $comp == 0) {
		echo "あなたの勝ちです！".PHP_EOL;
		}
		if ($player == 2 && $comp == 1) {
		echo "あなたの負けです……".PHP_EOL;
		}
*/

	// } while ($player == $comp);

