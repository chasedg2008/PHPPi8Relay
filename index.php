<?php

$onoff = $_POST['onoff'];
$gpio = $_POST['gpio'];
$command = "sudo python relay.py $onoff $gpio";
$result = shell_exec($command);
echo($result);

?>

<html>
<head>

<style>
table, th, td {
	border: 0px;
	border-collapse: collapse;
}
th, td {
	padding: 10px;
}
th {
text-align: left;
}
</style>

</head>
<title>Raspberry Pi Relay Control Web Interface</title>

<body>
<p class="head">Welcome to the Relay Control system!</p>
<p class="head"> Use the below buttons to control the GPIO Relays:</p>
<table style="width:100%">
<tr>
<th>GPIO Number</th>
</tr>
<!-- GPIO 18 Starts HERE -->
<tr>
<td>GPIO 18</td>
<td>
<form action="" method="POST" name="form">
<input type="submit" id="on" value="ON">
<input type="hidden" name="onoff" value="0">
<input type="hidden" name="gpio" value="18">
</form>
</td>
<td>
<form action="" method="POST" name="form">
<input type="submit" id="off" value="OFF">
<input type="hidden" name="onoff" value="1">
<input type="hidden" name="gpio" value="18">
</form>
</td>
<!-- GPIO 18 Ends here -->
<!-- GPIO 9 Starts HERE -->
<tr>
<td>GPIO 9</td>
<td>
<form action="" method="POST" name="form">
<input type="submit" id="on" value="ON">
<input type="hidden" name="onoff" value="0">
<input type="hidden" name="gpio" value="9">
</form>
</td>
<td>
<form action="" method="POST" name="form">
<input type="submit" id="off" value="OFF">
<input type="hidden" name="onoff" value="1">
<input type="hidden" name="gpio" value="9">
</form>
</td>
<!-- GPIO 9 Ends here -->

<!-- GPIO 17 Starts HERE -->
<tr>
<td>GPIO 17</td>
<td>
<form action="" method="POST" name="form">
<input type="submit" id="on" value="ON">
<input type="hidden" name="onoff" value="0">
<input type="hidden" name="gpio" value="17">
</form>
</td>
<td>
<form action="" method="POST" name="form">
<input type="submit" id="off" value="OFF">
<input type="hidden" name="onoff" value="1">
<input type="hidden" name="gpio" value="17">
</form>
</td>
<!-- GPIO 17 Ends here -->

<!-- GPIO 27 Starts HERE -->
<tr>
<td>GPIO 27</td>
<td>
<form action="" method="POST" name="form">
<input type="submit" id="on" value="ON">
<input type="hidden" name="onoff" value="0">
<input type="hidden" name="gpio" value="27">
</form>
</td>
<td>
<form action="" method="POST" name="form">
<input type="submit" id="off" value="OFF">
<input type="hidden" name="onoff" value="1">
<input type="hidden" name="gpio" value="27">
</form>
</td>
<!-- GPIO 27 Ends here -->

<!-- GPIO 22 Starts HERE -->
<tr>
<td>GPIO 22</td>
<td>
<form action="" method="POST" name="form">
<input type="submit" id="on" value="ON">
<input type="hidden" name="onoff" value="0">
<input type="hidden" name="gpio" value="22">
</form>
</td>
<td>
<form action="" method="POST" name="form">
<input type="submit" id="off" value="OFF">
<input type="hidden" name="onoff" value="1">
<input type="hidden" name="gpio" value="22">
</form>
</td>
<!-- GPIO 22 Ends here -->

<!-- GPIO 10 Starts HERE -->
<tr>
<td>GPIO 10</td>
<td>
<form action="" method="POST" name="form">
<input type="submit" id="on" value="ON">
<input type="hidden" name="onoff" value="0">
<input type="hidden" name="gpio" value="10">
</form>
</td>
<td>
<form action="" method="POST" name="form">
<input type="submit" id="off" value="OFF">
<input type="hidden" name="onoff" value="1">
<input type="hidden" name="gpio" value="10">
</form>
</td>
<!-- GPIO 10 Ends here -->

<!-- GPIO 23 Starts HERE -->
<tr>
<td>GPIO 23</td>
<td>
<form action="" method="POST" name="form">
<input type="submit" id="on" value="ON">
<input type="hidden" name="onoff" value="0">
<input type="hidden" name="gpio" value="23">
</form>
</td>
<td>
<form action="" method="POST" name="form">
<input type="submit" id="off" value="OFF">
<input type="hidden" name="onoff" value="1">
<input type="hidden" name="gpio" value="23">
</form>
</td>
<!-- GPIO 23 Ends here -->

<!-- GPIO 24 Starts HERE -->
<tr>
<td>GPIO 24</td>
<td>
<form action="" method="POST" name="form">
<input type="submit" id="on" value="ON">
<input type="hidden" name="onoff" value="0">
<input type="hidden" name="gpio" value="24">
</form>
</td>
<td>
<form action="" method="POST" name="form">
<input type="submit" id="off" value="OFF">
<input type="hidden" name="onoff" value="1">
<input type="hidden" name="gpio" value="24">
</form>
</td>
<!-- GPIO 24 Ends here -->
</table>
</body></html>
