	<!DOCTYPE html>
	<html lang="en">
	<head>
		<link href="css/bootstrap.css" rel="stylesheet">
		<title>Signal Encoding</title>
	</head>

	<body>

		<div style="padding-top:80px; padding-left:80px" >
		
		<?php
			include_once("functions.php");
			$bits = $_GET['bits'];
			$n = strlen($bits);
		?>


		<table class="table"> 
			<thead> 
				<tr> 
					<th>Scheme</th><th>Graph</th>
				</tr>
			</thead>
			<tbody> 
				<tr>
					<th scope="row">NRZ</th>
					<td><?php
						NRZ($bits,$n);		 
					?></td>
				</tr>

				<tr>
					<th scope="row">NRZ</th>
					<td><?php
						INRZ($bits,$n);		 
					?></td>
				</tr>

				<tr>
					<th scope="row">AMI</th>
					<td><?php
						AMI($bits,$n);		 
					?></td>
				</tr>

				<tr>
					<th scope="row">Pseudoternary</th>
					<td><?php
						pseudo($bits,$n);		 
					?></td>
				</tr>

				<tr>
					<th scope="row">Manchester</th>
					<td><?php
						manchester($bits,$n);		 
					?></td>
				</tr>

				<tr>
					<th scope="row">Differential Manchester</th>
					<td><?php
						diffman($bits,$n);		 
					?></td>
				</tr>

				<tr>
					<th scope="row">B8ZS</th>
					<td><?php
						B8ZS($bits,$n);		 
					?></td>
				</tr>
			</tbody>
		</table>		

		<div class = "row">
			<div class="col-md-2"><i>Try with other input bits</i></div>
				<div class ="col-md-8">
					<form action="encoding.php" method="GET" class = "form-inline" autocomplete="off">
						<input name="bits" class="form-control" value = "<?php echo $_GET['bits'] ?>"  type="text" style = "width: 300px">
						<button type="submit" class="btn" type="button">Get Graph</button>
					</form>
				</div>
			</div>
		</div>
		
		</div>


	</body>
	</html>