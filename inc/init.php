<?php

// Store array key and values to a modularized function
function showLoops($key, $value) {
	echo '<li>' . $key . ": " . $value . '</li>';
}
// Store title for each statement
function titleArr() {
	$title = array(
		'This is an Indexed Arrays',
		'This is an Associative Arrays',
		'This is a Multidimensional Arrays',
		'IF Condition',
		'Switch Statement',
		'This is a Ternary Operator',
		'While Statement',
		'Do ... While Statement',
		'For Statement',
		'Foreach Statement (Indexed Arrays)',
		'Foreach Statement (Associative Arrays)',
		'Foreach Statement (Break, Continue)',
		'Function (Modularizing your code)',
		'Wrap "title" using arrays',
		'Function (Variable inside function, remains exclusive)',
		'Returning Values from Function (Different Variable)',
		'Multidimensional Array (Arrays nested on an Associative Arrays)'
	);
	return $title;
}
function doubleIt($number) {
	$number *= 2;
	echo $number;
}
function newLine() { // for new line
	$newLine = '<br />';
	return $newLine;
}
// returning values from function
// didn't use echo within its function
// declare new variable, then echo it
function doubleNew($numNew) {
	return $numNew *= 2;
}
function array_default_key($array) {
    
	$quest_id_list = array(
		'kayu' => array( 1013004210, 1013004211, 1013004212, 1013004213 ),
		'kapas' => array( 1013004214,1013004215,1013004216,1013004217 ),
		'besi' => array( 1013004218,1013004219,1013004220,1013004221 ),
		'padi' => array( 1013004222,1013004223,1013004224,1013004225 ),
		'gunung' => array( 1013004226,1013004227,1013004228,1013004229 ),
		'ekspedisi' => array( 1013004230,1013004231,1013004232,1013004233 )
	);
	
	$arrayTemp = array();
    $i = 0;
    foreach ($quest_id_list as $key => $val) {
        $arrayTemp[$i] = $val;
        $i++;
    }
    return $arrayTemp;
}
function delUserQuestEachWeek()
{

	// if(count($quest_id_list) == 0)
	// {
		// return true;
	// }

	// $dba = DatabaseAccess::singleton();
	// $ur = User::singleton();
	
	// $id_params = array();
	// $id_params['key'] = '';
	// $id_params['val'] = array();
	
	// for($i=0; $i<count($quest_id_list);$i++)
	// {
		// if($i == 0)
		// {
			// $id_params['key'] .= '?'; 
			// array_push($id_params['val'], $quest_id_list[$i] );
		// }
		// else
		// {
			// $id_params['key'] .= ',?'; 
			// array_push($id_params['val'], $quest_id_list[$i] );
		// }
	// }
	
	// $sql_key = $id_params['key'];
	// $sql_val = $id_params['val'];
	
	$quest_id_list = array(
		'kayu' => array( 1013004210, 1013004211, 1013004212, 1013004213 ),
		'kapas' => array( 1013004214,1013004215,1013004216,1013004217 ),
		'besi' => array( 1013004218,1013004219,1013004220,1013004221 ),
		'padi' => array( 1013004222,1013004223,1013004224,1013004225 ),
		'gunung' => array( 1013004226,1013004227,1013004228,1013004229 ),
		'ekspedisi' => array( 1013004230,1013004231,1013004232,1013004233 )
	);
	
	// $quest_arr = array();
	// $quest_val = array_values($quest_id_list);
	// foreach ($quest_id_list as $key => $value) {
		// for ($i = 0; $i < count($quest_val); $i++) {
			// for ($m = 0; $m < count($quest_val[$i]); $m++) {
				// array_push($quest_arr, $quest_val[$i][$m]);
			// }
		// }
	// }

	// $quest_list = implode(', ', $quest_arr);
	// $quest_group = count($quest_arr);
	if (array_key_exists('kayu', $quest_id_list)) {
		$kayu_arr = array();
		$kayu = array_values($quest_id_list['kayu']);
		
		for ($i = 0; $i < count($kayu); $i++) {
			array_push($kayu_arr, $quest_id_list['kayu'][$i]);
		}
		return $kapas_arr;
	} else if (array_key_exists('kapas', $quest_id_list)) {
		$kapas_arr = array();
		$kapas = array_values($quest_id_list['kapas']);
		
		for ($i = 0; $i < count($kapas); $i++) {
			array_push($kapas_arr, $quest_id_list['kapas'][$i]);
		}
		return $kapas_arr;
	}
	for ($i = 0; $i < count($quest_id_list); $i++) {
		$imp_arr = implode();
	}
	return($imp_arr);
	/*else if (array_key_exists('kapas', $quest_id_list)) {
		print $quest_list;
	} else if (array_key_exists('besi', $quest_id_list)) {
		print $quest_list;
	} else if (array_key_exists('padi', $quest_id_list)) {
		print $quest_list;
	} else if (array_key_exists('gunung', $quest_id_list)) {
		print $quest_list;
	} else if (array_key_exists('ekspedisi', $quest_id_list)) {
		print $quest_list;
	} */
	
	// SQL to check Group ID
	// $sql_str  = "SELECT quest_id FROM quest_mst WHERE quest_id IN ( $val )";
	
	// SQL to Prepare
	// $stmt = $dba->db->prepare($sql_str);
	// $stmt->execute($id_params['val']);
	// $quest_id_list = array();
	// while ($row = $stmt->fetch(PDO::FETCH_ASSOC))
	// {
		// array_push ($quest_id_list, $row['quest_id']);
	// }
	
	// $quest_id_string = implode(',',$quest_id_list); //101300410,101300411
	
	// $quest_group_cnt = count($quest_id_list);
	
	// if ($quest_group_cnt == 0)
	// {
		// return false;
	// }
	
	// SQLを生成
	// $sql_str  = "SELECT COUNT(*) AS count FROM user_quest_tbl ";
	// $sql_str .= "WHERE quest_id IN ( $quest_id_string ) ";
	// $sql_str .= "AND end_flg = 1 AND user_id = ?";
	
	// SQLを実行
	// $usr_val = array($ur->user_id);
	// $stmt = $dba->db->prepare($sql_str);
	// $stmt->execute($usr_val);
	// if($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
		// $quest_cnt = intval($row['count'],10);
	// } else {
		// $quest_cnt = 0;
	// }
	
	// SQL, Total quest yang ada
	// if($quest_cnt != $quest_group_cnt) {
		// var_dump($val);
		// return false;
	// } else {
		// $del = "DELETE FROM user_quest_tbl WHERE quest_id IN ( $quest_id_string )";
		// $stmt = $dba->db->prepare($del);
		// $stmt->execute();
		// return true;
	// }
}