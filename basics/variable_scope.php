<?php 

	function fscope($name="om"){
		echo "$name";
	}
	fscope();
	echo $name; //local variables cant be accessed gloabally

	$babe='nami';
	function honey(){
		global $babe; //to access global variable in local
		$babe="nam";
		echo "$babe"; 
	}
	honey();
	echo $babe; //value get overwritten if change the value of global value in local scope
 ?>