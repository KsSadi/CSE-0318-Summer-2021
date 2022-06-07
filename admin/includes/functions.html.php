<?php

function callout($title = '', $message='', $type='danger', $echo = true){
	$result = '
                <div class="callout callout-'.$type.'">
                    '.($title == '' ? '':'<h4>'.$title.'</h4>').'
                    '.($message == '' ? '':'<p>'.$message.'</p>').'
				</div>';
	if($echo) echo $result;
	else return $result;
}





?>