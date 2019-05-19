<?php
	$janken_array = [
		'cpu'=>'choki',
		'result'=>'win'
	];

	if ($_GET["player"] == "グー") {
		echo json_encode($janken_array);
	} else {
		$janken_array = [
			'cpu'=>'other',
			'result'=>'any'
		];
		echo json_encode($janken_array);
	}

/*

	//"手を選んでください(0=グー, 1=チョキ, 2=パーを入力)" と表示する
	//0, 1, 2を入力させる
	//コンピュータの手をランダムで決める
	//もし　プレイヤーとコンピュータの手が同じなら
	//「あいこです」と表示する
	//もし　プレイヤーが0　でコンピュータが1　なら
	//「勝ちです」と表示する
	//もし　プレイヤーが0　でコンピュータが2　なら
	//「負けです」と表示する
	//以下なんかそんなかんじ
	do {
		echo "手を選んでください(0=グー, 1=チョキ, 2=パーを入力)".PHP_EOL;
		//相手の入力および手の表示
		$hand = ['グー', 'チョキ', 'パー'];
		if(isset($_GET['player'])){
			$player = $_GET['player'];
		}
		$playernum = intval($player);
		echo "あなた「".$hand[$playernum]."」\n";
		//こちらの手の選択および表示
		$rand = array_rand($hand);
		echo "相手「".$hand[$rand]."！」\n";
		$comp = intval($rand);

		//グーのとき
		if ($player == 0 && $comp == 0) {
		echo "あいこです！もう一度\n".PHP_EOL;
		}
		if ($player == 0 && $comp == 1) {
		echo "あなたの勝ちです！".PHP_EOL;
		}
		if ($player == 0 && $comp == 2) {
		echo "あなたの負けです……".PHP_EOL;
		}
	
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
	} while ($player == $comp);
*/
