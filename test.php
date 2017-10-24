<!DOCTYPE HMTL>
<html>
<head>
	<title>Tes</title>
</head>
<body>
	<div>
		<h1>First</h1>
		<input type="text" id="first_variable" value="1"  readonly/>
		<input type="text" id="second_variable" value="3"  readonly/>

		<h1>First Result</h1>
		<input type="text" id="first_result" readonly="" />
		<input type="text" id="second_result" readonly=""/>
	</div>
	
	<div>
		<h1>Second</h1>
		<input type="text" id="first" value="5"  readonly/>
		<input type="text" id="second" value="9" />

		<h1>Second Result</h1>
		<input type="text" id="first_res" readonly=""  readonly/>
		<input type="text" id="second_res" readonly="" readonly/>
	</div>
	

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function() {
			var a = parseInt($('#first_variable').val());
			var b = parseInt($('#second_variable').val());

			if( a < b) {
				var a = a + 2;
				var b = b - 2;
				$('#first_result').val(a);
				$('#second_result').val(b);
			}
			if (b > a) {

			}
				
		});	
		$(document).ready(function() {
			var a = parseInt($('#first').val());
			var b = parseInt($('#second').val());

			if( a <= b) {
				var a = a + 4;
				var b = b - 4;
				$('#first_res').val(a);
				$('#second_res').val(b);
			}
			if (b > a) {

			}
				
		});	
	</script>
</body>
</html>