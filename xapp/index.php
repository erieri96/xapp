<!DOCTYPE html>
<html>
	
	<head>
		<title>XApp</title>
		<style type="text/css">
			body {
				font-family: arial,helvetica;
				font-size: 15px;
			}
			tr,td,th {
				padding: 10px;
			}
			table{
				padding: 25px;
				float: left;
			}
			input[type=text]{
				border: none;
				border-bottom: 1px solid black;
				width: 100%;
			}
			input[type=text]:focus{
				border-bottom: 1px solid orange;
				outline-width: 0;
			}
			#sig-canvas {
			  border: 2px dotted orange;
			  border-radius: 15px;
			  cursor: crosshair;
			}
			button {
				width: 100px;
				height: 25px;
				color: orange;
				border: 1px solid orange;
				border-radius: 10px;
				background-color: white;
			}
			button:hover{
				background-color: orange;
				color: white;
			}
			button:focus{
			 	outline: none;
			}
			input[type=submit] {
				width: 100px;
				height: 25px;
				color: orange;
				border: 1px solid orange;
				border-radius: 10px;
				background-color: white;
			}
			input[type=submit]:hover{
				background-color: orange;
				color: white;
			}
			input[type=submit]:focus{
			 	outline: none;
			}
		</style>
	
	</head>
	
	<body>
		<div>
			<h2>Welcome to XApp</h2>
			<h3>Xceleration HEC's Student Application Database</h3>
		</div>

		<form action="#" method="post" autocomplete="off">
			
			<table cellspacing="0">
				<tr><th colspan="2"><h3>Basic Details</h3></th></tr>
				<tr>
					<td colspan="2"><input type="text" name="surname" autocomplete="off" placeholder="Surname" required></td>
				</tr>
				<tr>
					<td colspan="2"><input type="text" name="name" autocomplete="off" placeholder="Given Name" required></td>
				</tr>
				<tr>
					<td>Date of Birth</td><td><input type="date" name="dob"></td>
				</tr>
				<tr>
					<td colspan="2"><input type="text" name="pob" autocomplete="off" placeholder="Place of Birth"></td>
				</tr>
				<tr>
					<td colspan="2"><input type="text" name="ic" autocomplete="off" placeholder="IC Number" required></td>
				</tr>
				<tr>
					<td colspan="2"><input type="text" name="passportNumber" autocomplete="off" placeholder="Passport Number"></td>
				</tr>
				<tr>
					<td colspan="2"><input type="text" name="finNumber" autocomplete="off" placeholder="FIN Number"></td>
				</tr>
				<tr>
					<td colspan="2"><input type="text" name="nationality" autocomplete="off" placeholder="Nationality"></td>
				</tr>
				<tr>
					<td>Gender</td><td>
						<select name="gneder">
							<option value="" selected="selected">Select...</option>
							<option value="Male">Male</option>
							<option value="Female">Female</option>
						</select>
					</td>
				</tr>
				<tr>
					<td>Marital Status</td><td>
						<select name="maritalStatus">
							<option value="" selected="selected">Select...</option>
							<option value="Single">Single</option>
							<option value="Married">Married</option>
							<option value="Divorced">Divorced</option>
							<option value="Widowed">Widowed</option>
						</select>
					</td>
				</tr>
				<tr>
					<td colspan="2"><input type="text" name="race" autocomplete="off" placeholder="Race"></td>
				</tr>
				<tr>
					<td>Religion</td><td>
						<select name="religion" onchange="if (this.value=='Others'){userselect.style.visibility='visible'}else {userselect.style.visibility='hidden'};">
							<option value="" selected="selected">Select...</option>
							<option value="Muslim">Muslim</option>
							<option value="Buddhist">Buddhist</option>
							<option value="Christian">Christian</option>
							<option value="Hindu">Hindu</option>
							<option value="Others">Others</option>
						</select>
						<input type="text" name="Others" id="otherReligion" placeholder="Please specify" style="visibility: hidden;">
					</td>
				</tr>
			</table>

			<table cellspacing="0">
				<tr><th colspan="2"><h3>Contact</h3></th></tr>
				<tr>
					<td colspan="2"><input type="text" name="telephone" placeholder="Telephone"></td>
				</tr>
				<tr>
					<td colspan="2"><input type="text" name="mobileNumber" placeholder="Mobile Number"></td>
				</tr>
				<tr>
					<td colspan="2"><input type="text" name="fax" placeholder="Fax Number"></td>
				</tr>
				<tr>
					<td colspan="2"><input type="text" name="email" placeholder="E-mail"></td>
				</tr>
				<tr>
					<td colspan="2">
						<textarea rows="3" cols="50" placeholder="Address" name="address"></textarea>
					</td>
				</tr>
				<tr>
					<td colspan="2">
						<textarea rows="3" cols="50" placeholder="Postal Address (if different from Address)" name="postalAddress"></textarea>
					</td>
				</tr>

					
			</table>

				<!-- Content -->
			<div class="container" style="clear: both">
				<div class="row">
					<div class="col-md-12">
						<h3>Signature</h3>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
				 		<canvas id="sig-canvas" width="500" height="150">
				 			Get a better browser, bro.
				 		</canvas>
				 	</div>
				</div>
				<br>
				<button onclick="window.location.reload();">Reset</button>
				<button onclick="window.print();return false;">Print</button>
				<input type="submit" name="submit" value="Submit">
				<!--
				<div class="row">
					<div class="col-md-12">
						<button class="btn btn-primary" id="sig-submitBtn">Submit Signature</button>
						<button class="btn btn-default" id="sig-clearBtn">Clear Signature</button>
					</div>
				</div>
				<br/>-->
				<div class="row" style="visibility:hidden;">
					<div class="col-md-12">
						<textarea name="signatureDataUrl" id="sig-dataUrl" class="form-control" rows="5">Data URL for your signature will go here!</textarea>
					</div>
				</div>
				<br/>
				<!--
				<div class="row">
					<div class="col-md-12">
						<img id="sig-image" src="" alt="Your signature will go here!"/>
					</div>
				</div>
				-->
			</div>

		</form>

		<!--Scripts-->

		<script>
			var userselect = document.getElementById('otherReligion');
		</script>
		<script src="sign.js"></script>

	</body>
</html>