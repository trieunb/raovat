<!DOCTYPE HTML>
<html>
<head>
<title>Admin</title>
<meta charset="UTF-8" />
<meta name="Designer" content="PremiumPixels.com">
<meta name="Author" content="$hekh@r d-Ziner, CSSJUNTION.com">



{{ HTML::style('assets/css/loginadmin.css') }}
{{ HTML::style('assets/css/bootstrap.min.css') }}
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
</head>

<body>
<div class="container">
    <div class="row">

        <div class="col-md-offset-5 col-md-3">
        @include('includes.notifications')
        {{ Form::open(array('url'=>'/admin/login','class'=>'box login')) }}
            <div class="form-login">
            <h4>Login Admin</h4>
            <input name="username" type="text" id="userName" class="form-control input-sm chat-input" placeholder="username" required />
            </br>
            <input name="password" type="password" id="userPassword" class="form-control input-sm chat-input" placeholder="password" required />
            </br>
            <div class="wrapper">
            <span class="group-btn">     
            	<input type="submit" class="btn btn-primary btn-md" value="Login" tabindex="4">
                <!-- <a href="#" class="btn btn-primary btn-md">login <i class="fa fa-sign-in"></i></a> -->
            </span>
            </div>
            </div>
            </form>
        
        </div>
    </div>
</div>
<!-- <div class="login">
{{ Form::open(array('url'=>'/admin/login','class'=>'box login')) }}
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
</div> -->
<!-- jQuery -->
		{{ HTML::script('assets/js/jquery-2.1.1.js') }}
		<!-- Bootstrap JavaScript -->
		{{ HTML::script('assets/js/bootstrap.min.js') }}
</body>
</html>
