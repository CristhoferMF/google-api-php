<?php
require_once __DIR__.'/../vendor/autoload.php';
require_once __DIR__.'/../classes/AuthDrive.php';

$objAuthDrive=new AuthDrive();

$archivo=$_FILES['file'];

try{
	echo "ID: ".$objAuthDrive->subirArchivo("1OV5mOyEZ_8WzfZs837Rsc0A7h4UQw8VR",$archivo);
	?>
	<script>
	setTimeout(() => {
		location.assign('<?= HTTP; ?>');
	}, 1500);
	</script>
	<?php
}catch(Exception $e){
	echo $e->getMessage();
}
?>