<!DOCTYPE html>
<html lang="en">
<head>
<title>Login</title>
</head>
<style>
body {
  background-image: url('2.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
}
        *
		{
			box-sizing:border-box;
		}
	.first
	{
		width:400px;
		height:50px;
		background-color:#000;
		color:#fff;
		line-height:50px;
		text-align:center;
		font-size:25px;
        font-weight: bold;
	}
	.frm
	{
        background-color:grey;
		width:400px;
		box-shadow:14px 10px 20px rgba(0,0,1,2);
		padding:20px;
	}
	.txt
	{
		width:230px;
		padding:2px;
		font-size:15px;
	}
	.btn
	{
		width:150px;
		padding:10px;
		float:right;
		background-color:#000;
		color:#fff;
		border:none;
        font-weight: bold;
	}
	.main
	{
		margin-left:700px;
		margin-top:50px;
	}
    td
    {
        font-weight: bold;
    }
</style>
<script>
function valid()
{
	var a=document.fnm.un.value;
	var b=document.fnm.pass.value;
	var c=document.fnm.email.value;
	var d=document.fnm.cpass.value;
	if(a=='')
	{
		document.getElementById("fun").innerHTML='<img src="error-transparent-cross-16.png" width="20px" height="20px"/>';
		document.getElementById("ff").style.border="2px solid red"
	}
	else
	{
		document.getElementById("fun").innerHTML='<img src="success-icon.png" width="20px" height="20px"/>';
				document.getElementById("ff").style.border="2px solid green"
	}
	if(b=='')
	{
		document.getElementById("fpass").innerHTML='<img src="error-transparent-cross-16.png" width="20px" height="20px"/>';
				document.getElementById("pp").style.border="2px solid red"
	}
	else
	{
		document.getElementById("fpass").innerHTML='<img src="success-icon.png" width="20px" height="20px"/>';
				document.getElementById("pp").style.border="2px solid green"
	}
	if(c=='')
	{
		document.getElementById("femail").innerHTML='<img src="error-transparent-cross-16.png" width="20px" height="20px"/>';
		document.getElementById("em").style.border="2px solid red"
	}
	else
	{
		document.getElementById("femail").innerHTML='<img src="success-icon.png" width="20px" height="20px"/>';
				document.getElementById("em").style.border="2px solid green"
	}
	if(d=='')
	{
		document.getElementById("fcpass").innerHTML='<img src="error-transparent-cross-16.png" width="20px" height="20px"/>';
		document.getElementById("cpp").style.border="2px solid red"
	}
	else
	{
		document.getElementById("fcpass").innerHTML='<img src="success-icon.png" width="20px" height="20px"/>';
				document.getElementById("cpp").style.border="2px solid green"
	}
}
</script>

<body>
<div class="main">
<div class="first">REGISTRATION</div>

<form class="frm" name="fnm" id="fid" action="services/register_user.php" method="POST">
<table>
<tr>
<td><input type="text" class="txt" name="fname" id="ff" placeholder="FIRST NAME"/>
<td><div id="fun" style="color:red;"></div></td></td>
</tr>
<td>&nbsp;</td>
<tr>
<td><input type="text" class="txt" name="lname" id="ff" placeholder="LAST NAME"/>
<td><div id="fun" style="color:red;"></div></td></td>
</tr>
<tr>
<td>&nbsp;</td>
</tr>
<tr>
<td><input placeholder="DATE OF BIRTH" class="txt" name="bday" id="bd" onfocus="(this.type='date')" /></td>
</tr>
<tr>
<td>&nbsp;</td>
</tr>
<tr>
<td><input type="text" class="txt" name="email" id="em" placeholder="EMAIL"/>
<td><div id="femail" style="color:red";></div></td></td>
</tr>
<tr>
	<td>
		<select name="gender">
			<option>-Select Gender-</option>
			<option value="0">Male</option>
			<option value="1">Female</option>
		</select>
	</td>
	<td>
		<div id="femail" style="color:red";></div>
	</td>
</tr>

<tr>
<td>&nbsp;</td>
</tr>
<tr>
<td><input type="number" class="txt" name="contact" id="contact" placeholder="CONTACT NUMBER"/>
<td><div id="cont" style="color:red";></div></td></td>
</tr>
<tr>
<td>&nbsp;</td>
</tr>
<tr>
<td><input type="password" class="txt" name="pass" id="pp" placeholder="PASSWORD"/>
<td><div id="fpass" style="color:red";></div></td></td>
</tr>
<tr>
<td>&nbsp;</td>
</tr>
<tr>
<td><input type="text" class="txt" name="cpass" id="cpp" placeholder="CONFIRM PASSWORD"/>
<td><div id="fcpass" style="color:red";></div></td></td>
</tr>
<tr>
<td>&nbsp;</td>
</tr>
<tr>
<td><input type="submit" name="sub" value="Register Now" class="btn" onclick="valid()" /></td>
</tr>
<tr>
<td>&nbsp;</td>
</tr>
<tr>
<td colspan="2" style="text-align:center"><small><a href="index.php" style="color:black">Already User? Sign In Here</a></small></td>
</tr>
<tr>
<td colspan="2" style="text-align:center"><a href=""style="color:black">Forgot Password?</a></td>
</tr>

</table>
</form>
</body>
</html>