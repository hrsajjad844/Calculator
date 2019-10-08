<?php 
extract($_POST);
if(isset($save))
{
	switch($ch)
	{
		case '+':
		$res=$fn+$sn;
		break;
		
		case '-':
		$res=$fn-$sn;
		break;
		
		case '*':
		$res=$fn*$sn;
		break;


		case '/':
		$res= $fn/$sn;
		break;
		
	}
	
}

?>
<!DOCTYP html>
<html>
	<head>
		<title>Calculator- switch</title>

		<style>

			table{


				background-color: yellow;
			}



			

			body{

				background-color: gray;
			}

			h1{


				text-align: center;
				color: blue;
			}

			footer{


				color: green;

				text-align: right;
			}

			table, th, td {
					  border: 2px solid black;
					  border-collapse: collapse;
					  font-size: 18px;
					  
					  row-height: 10px;

					}





			
		</style>
		
	</head>
	<body>


		<h1>Calculator</h1>
		<form method="post">
		<table border="2" align="center" background-color="blue">
			
			
			<tr>
				<th>Enter your First number</th>
				<th><input type="number" name="fn" value="<?php  echo @$fn;?>"/></th>
			</tr> 
			<tr>
				<th>Enter your Second number</th>
				<th><input type="number" name="sn" value="<?php  echo @$sn;?>"/></th>
			</tr>
			<tr>
				<th>Select Your Choice</th>
				<th>
				<select name="ch">
					<option>+</option>
					<option>-</option>
					<option>*</option>
					<option>/</option>
				</select>
				</th>
			</tr>
			<tr>
				
				<th colspan="8">
				<input type="submit" 
				name="save" value="Show Result"/>
				</th>
			</tr>
			<tr>
				<th>Your Result</th>
				<th><input type="number" readonly="readonly" disabled="disabled" value="<?php  echo @$res;?>"/></th>
			</tr> 
		</table>
		</form>

		<footer>@Copyright by HRSAJJAD.</footer>
	</body>
</html>