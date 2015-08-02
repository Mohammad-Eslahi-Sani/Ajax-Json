<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="mystyle.css">
<script type="text/javascript" src="jquery-2.1.4.js"></script>
<script type="text/javascript" src="functions.js"></script>

	<title>Account Panel</title>
</head>

<body>
<h1>This page help you handle your account</h1>

<div "infos">
	<h2>Your current information in our service:</h2>
	<p><pre>
		Displaying Name:	<?php echo "DISPLAYING NAME MUST BE SHOWN"; ?><br>
		Personal-Image:		<?php echo "PERSONAL-IMAGE MUST BE SHOWN"; ?><br>
		Address:		<?php echo "ADDRESS MUST BE SHOWN"; ?><br>
		Job:			<?php echo "JOB MUST BE SHOWN"; ?><br>
	</pre></p>
</div>

<div "getInfos">
<h2>In this section you can get your inforrmation</h2>
<button id="getNameBtn">Get Your Name!</button>
<span id="getNameSpan"> something must come here</span>

</div>

<div >
	<h2>Set Information</h2>
	New Name: <input type="text" name="newName" value= "Insert A New Name" id="newNameInput" >	</input>
	<button id="submitNewName">OK!</button>
	<span id="newNameSpan"> </span>
</div>

</body>
</html>