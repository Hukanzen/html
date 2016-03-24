<?php
	function kataomoi($friend_ids,$followers_ids){

		$omoi_list=array();
	
		$i=0;
		foreach($friend_ids->ids as $friend_value){
			foreach($followers_ids->ids as $followers_value){
				if($friend_value == $followers_value){
					goto _omoi_loop;
				}
			}
			$omoi_list[$i]=$friend_value;
			$i++;
			_omoi_loop:
		}

		return $omoi_list;
	}

	function kataomoware($friend_ids,$followers_ids){
		$omoware_list=array();

		$i=0;
		foreach($followers_ids->ids as $followers_value){
			foreach($friend_ids->ids as $friend_value){
				if($followers_value == $friend_value){
					goto _omoware_loop;
				}
			}
			$omoware_list[$i]=$followers_value;
			$i++;
			_omoware_loop:
		}
		return $omoware_list;
	}

?>
