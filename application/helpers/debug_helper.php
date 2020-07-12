<?php


if(!function_exists('debug')) {
	function debug() {
		$vars = func_get_args();
		if($vars && !empty($vars)) {
			echo "<pre>";
			foreach($vars as $item) {
				print_r($item);
				echo "<br />";
			}
			echo "</pre><br />";
		}
	}
}


?>