<!DOCTYPE html>
<html>
<head>
<style type="text/css">
  form {
    margin: 25px auto;
    padding: 20px;
    border: 5px solid #ccc;
    width: 500px;
    background: #eee;
}
 
div.form-element {
    margin: 20px 0;
}
</style>
</head>
<body>


  
  <form method="POST" action="{{ route('login.success') }}">
                        @csrf

<table align="center">

    
	<a href="user_add">Create New Account</a>
	
    <div class="form-element">
      <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Email') }}</label>
      <input type="text" name="email" />
      @error('email')
            <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
           </span>
       @enderror
     </div>
     <div class="form-element">
      <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>
      <input type="password" name="password"/>

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
        </div>
      
      <button type="submit" name="login" value="login">Log In</button>
      </table>
	</form>
	


</body>
</html>
