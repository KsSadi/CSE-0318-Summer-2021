<?php 

$error['title'] = true;
$error['message'] = true;

if(isset($_POST['submit'])){
	$error['title'] = form_check('title', $_POST['title']);
	$error['message'] = form_check('message', $_POST['message']);
	
	
	if(!in_array(false, $error)){
		
		$title = htmlspecialchars($_POST['title']);
		$message = htmlspecialchars($_POST['message']);
		$date = time();
		$is_published = 0;
		$files_uploaded = array();
		
		/* 
		 * File Handling started
		 */
		$file_no_ = 1;
		while(isset($_FILES['file_'.$file_no_])){
			$file_no = 'file_'.$file_no_;
			if(!empty($_FILES[$file_no]['name'])){
				
				
				$tmp = explode('.',$_FILES[$file_no]['name']);
				$file_name = reset($tmp);
				$tmp = explode('.',$_FILES[$file_no]['name']);
				$file_ext=strtolower(end($tmp));
				$file_size = $_FILES[$file_no]['size'];
				
				$supported_ext = array('pdf', 'doc', 'jpg', 'png');
				$supported_size = 25000000; // 25MB
				
				
				// Check file type is supported
				if(!in_array($file_ext, $supported_ext)){
					$message = callout('Failed', "One of your file has unsupported format ($file_name.$file_ext)", 'danger', false);
					return;
				}
				// Check file size is ok
				if($file_size > $supported_size){
					$message = callout('Failed', "One of your file size is bigger than 25 MB ($file_name.$file_ext)", 'danger', false);
					return;
				}
				//file is ok, upload it
				$target_file = '../assets/uploads/' . $file_name . '_' . time() .'.'. $file_ext;
				if(!move_uploaded_file( $_FILES[$file_no]['tmp_name'],$target_file)){
					$message = callout('Failed', "One of your file could not be uploaded ($file_name.$file_ext)", 'failed', false);
					
					
				}
				else $files_uploaded[] = substr($target_file, 3); // to remove '../'
			}
			$file_no_++;
		}
		
		$files = json_encode($files_uploaded);
		
		/* 
		 * File Handling finished
		 */
		
		$sql = "INSERT INTO public_notice (
			title,
			message,
			files,
			date,
			is_published
			) VALUES (
			'$title',
			'$message',
			'$files',
			'$date',
			'$is_published'
			)";
		
		if(mysqli_query($conn, $sql)){
			$message = callout('Success', "A new pubnic notice was added!", 'success', false);
			foreach ($_POST as &$value) {
				$value = '';
			}
		}
		else $message = callout('Failed', "Public notice could not be added. Try again. ".mysqli_error($conn), 'danger', false);
	}
}
?>