<html>
	<head>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<style>
			*{
				margin:auto;
			}
		</style>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script>
			$(document).on('change',"#input-file-id",function(){
				$("#input-label-id").html($(this).val())
			})
		</script>
	</head>
	<body>
		<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
			<form action="POST/upload.php" method="POST" role="form" enctype="multipart/form-data">
			<legend>Subir archivo mediante Google Drive API</legend>
		
			<div class="input-group mb-3">
			  <div class="input-group-prepend">
			    <span class="input-group-text">Subir</span>
			  </div>
			  <div class="custom-file">
			    <input type="file" class="custom-file-input" name="file" id="input-file-id" required="">
			    <label class="custom-file-label" for="input-file-id" id="input-label-id">Escoger Archivo</label>
			  </div>
			</div>
		
			
		
			<button type="submit" class="btn btn-primary">Subir Archivo</button>
		</form>
		</div>

	</body>
</html>