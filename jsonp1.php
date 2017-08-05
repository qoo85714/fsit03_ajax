function myFuncV2(){
	document.getElementByID('<?php echo $_GET[]?>').innerhtml = <?php echo rand(1,49);?>

}
myFuncV2();