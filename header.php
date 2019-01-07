<script>
  var x = setInterval(function() {
  var now = new Date();
  var offset = -300;
  var est = new Date(now.getTime() + offset*60);
  document.getElementById("dateContainer").innerHTML = est }, 1000);
</script>

<!DOCTYPE html>
<html lang = "en">

<head>
  <meta charset="utf-8">
  <title>Q4</title>

	<style>
		body {background-color:#FAEE82;}
		label {font-weight:bold;}
		.fieldset1 {border-color: #0101FF; background-color:#F3B3F1;}
		.legend1 {color: #0101FF; font-size: 25px;}
		.fieldset2 {border-color: #099F27; background-color:#ADDEAD; }
		.legend2 {color: #099F27; font-size: 25px;}
    .fieldset3 ul {font-weight:bold;}
    .legend3 {color: #099F27; font-size: 25px;}
    .date {color: #af0404; font-size: 20px;}
    .footer {background-color:#03a9f4; border-style: double; margin-top: inherit;display: flex;
            align-items: center; justify-content: center;}
    .disclaimer {color:#f1ffd1; font-weight:bold; font-size: 20px; text-decoration: underline;}
    .loginContainer {display: flex; justify-content: flex-end;}
    .login {background-color: #2dc6d4; border-style: outset; color: black; padding: 5px 20px;
            font-size: 16px;}
    .loginSpecifications {color: black; font-size: 20px;}
    .loginIncomplete {color: blue; font-size: 20px;}
    .loginIncorrect {color: #ce0000; font-size: 20px;}
    .pointer {cursor: pointer;}
    .welcome {font-size: 20px; display: flex; justify-content: flex-end;}

	</style>

</head>

<body>

<table>
	<tr>
		<td><a href='Q4.php'>
			<img alt = 'house' src = 'Cottage.jpg' width= '200' height= '125'></a></td>
		<td><h1> Cottage Search Form </h1> </td>
  </tr>
</table>
<div id='dateContainer' class='date'>
</div><br/><br/>
