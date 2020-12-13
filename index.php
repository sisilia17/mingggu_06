<!DOCTYPE html>
<html>
<head>
	<script type="text/javascript" src="jquery-3.5.1.min.js"></script>
	<title>Sisilia_118140167</title>
</head>
<body>
	<div id="tampil">Informasi akan ditampilkan disinia</div>
	<button id="btn_tampil">Tampilkan</button>
	<script type="text/javascript">
		$(document).ready(function(){
			$('#btn_tampil').click(function(){
				$('#tampil').load('demo.php');
			});
		}); 
	</script>

</body>
</html>
