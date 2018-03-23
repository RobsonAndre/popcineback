<?php
	class Qry {
		
		//query
		public function query($s){
			$r = mysql_query($s) or die(mysql_error());
			return $r;
		
		}
		//rows
		public function rows($r){
			
			return mysql_num_rows($r);
		}
		//array
		public function arr($r){
			while($row = mysql_fetch_array($r)){
				$data[]=$row;
			}
			return $data;
			/** /
			$arr = array();
			while($d = mysql_fetch_array($r)){
				$arr[count($arr)] = $d;
			}
			return $arr;
			/**/
		}
	}
?>