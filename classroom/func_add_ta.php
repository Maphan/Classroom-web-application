<?php
function add_TA($std_id,$class_id){
	$stmt_insert_TA=$GLOBALS['sql']->prepare("INSERT INTO teacher_assistant (std_id, class_id) VALUES (?,?)");
	$stmt_insert_TA->bindParam(1, $std_id);
	$stmt_insert_TA->bindParam(2, $class_id);
	
	if($stmt_insert_TA->execute()){
		return(true);
	}else{
		return(false);
	}
}

?>