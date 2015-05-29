<!DOCTYPE HTML>
<html>
<head>
<title>Simple Login Form</title>
<meta charset="UTF-8" />
<meta name="Designer" content="PremiumPixels.com">
<meta name="Author" content="$hekh@r d-Ziner, CSSJUNTION.com">
{{ HTML::style('assets/css/login.css') }}
{{ HTML::style('assets/css/structure.css') }}
</head>

<body>

{{ Form::open(array('url'=>'/admin/login','class'=>'box login')) }}

@include('includes.notifications')
	<fieldset class="boxBody">
	  <label>Username</label>
	 
	  {{ Form::text('username',null,array('placeholder'=>'User Name','required')) }}
	  <label><a href="#" class="rLink" tabindex="5">Forget your password?</a>Password</label>
	  
	  {{ Form::password('password',array('placeholder'=>'password','required')) }}
	</fieldset>
	<footer>
	  <label><input name="remember" type="checkbox" tabindex="3">Keep me logged in</label>
	  <input type="submit" class="btnLogin" value="Login" tabindex="4">
	</footer>
</form>

</body>
</html>
