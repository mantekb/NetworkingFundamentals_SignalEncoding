<!DOCTYPE html>
<html lang="en">
<head>
	<link href="css/bootstrap.css" rel="stylesheet">
	<title>Signal Encoding</title>
	<style>
		td{
			color: green;
			font-size: 30px;
		}
	</style>
</head>

<body>
	<div style="padding-top:100px" align="center" >
	<h1>Assignment - Chapter #5: Signal Encoding</h1>
	<h5>Arjun Malik ( arjunm@bgsu.edu ) | Mantek Singh Bhatiya ( mantekb@bgsu.edu) | Sagar Sharma ( ssharm@bgsu.edu )</h5>


		<form action="index.php" method="GET" class = "form-inline" autocomplete="off">
			<input name="bits" class="form-control" placeholder="Enter input bits..." type="number" value = "<?php echo $_GET['bits'] ?>" style = "width: 300px">
			<button type="submit" class="btn" type="button">Get Graph</button>
		</form>

		<?php
			include_once("functions.php");
			$bits = isset($_GET['bits']) ? $_GET['bits'] : NULL;
				
			$n = strlen($bits);
		
		if(isset($_GET['bits'])){
			?>

		<table class="table"> 
			<thead> 
				<tr> 
					<th>Scheme</th><th>Graph</th>
				</tr>
			</thead>
			<tbody> 
				<tr>
					<th scope="row">NRZ L</th>
					<td><?php
						NRZ($bits,$n);		 
					?></td>
				</tr>

				<tr>
					<th scope="row">NRZ I</th>
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

				<tr>
					<th scope="row">HDB3</th>
					<td><?php
						HDB3($bits,$n);		 
					?></td>
				</tr>

			</tbody>
		</table>
		<?php } ?>
	
	</div>

</body>
</html>
