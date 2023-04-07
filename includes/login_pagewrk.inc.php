<h2>Login</h2>
<style type="text/css">
	#submit{
		width: 200px;
		height: 40px;
		border-radius: 7px;
		margin-left: 100px;
		background: darkblue;
		color: white;
		background: -moz-linear-gradient(#23395d, #23395d);
  background: -o-linear-gradient(#23395d, #23395d);
  background: -webkit-linear-gradient(#23395d, #23395d);
   border-radius: 15px 15px 15px 15px;
  -moz-border-radius: 15px 15px 15px 15px;
  -webkit-border: 15px 15px 15px 15px;
  -webkit-box-shadow: rgba(0, 0, 0, 0.5) 0px 0px 5px;
  -moz-box-shadow: rgba(0, 0, 0, 0.5) 0px 0px 5px;
  box-shadow: rgba(0, 0, 0, 0.5) 0px 0px 5px;
  text-transform: uppercase;
  letter-spacing: 0.1em;
font-size: 90%;
	}
</style>
<form action="admin-page.php" method="post">
	<p><label class="label" for="email">Email Address:</label>
	<input id="email" type="text" name="email" size="30" maxlength="60" value="<?php if (isset($_POST['email'])) echo $_POST['email']; ?>" > </p>
		<p><label class="label" style="padding-left: 30px; " for="psword">Password:</label>
	<input id="psword" type="password"  name="psword" size="30" maxlength="60"  value="<?php if (isset($_POST['psword'])) echo $_POST['psword']; ?>" ><span>&nbsp;Between 8 and 12 characters.</span></p>
	<p><input class="" id="submit" type="submit"size="30"  name="submit" value="Login"></p>
</form><br>