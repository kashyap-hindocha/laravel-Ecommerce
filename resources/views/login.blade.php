<html>
<body>
<table align="center">

                
                    <form method="POST" action="{{ route('login.success') }}">
                        @csrf

                        
                            <tr><td><label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Email') }}</label></td>

                            <td>
                                <input id="email" type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror</td></tr><br>
                            
                        
                            <tr><td><label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label></td>

                            <td>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </td>
                            </tr></br>
                        
                                    

<tr><td>
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button></td>
                            <td>
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button></td>
</tr>
                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            
</table>
</body>
</html>