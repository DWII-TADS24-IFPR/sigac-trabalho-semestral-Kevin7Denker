<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>{{ __('Login') }}</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
  body {
    min-height: 100vh;
    margin: 0;

    display: flex;
    align-items: center;
    justify-content: center;
    background: #f5f5f5;
    overflow: hidden;

  }

  .form-container {
    width: 350px;
    min-height: 500px;
    background-color: #fff;
    box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
    border-radius: 10px;
    box-sizing: border-box;
    padding: 20px 30px;
  }

  .title {
    text-align: center;
    font-family: "Lucida Sans", "Lucida Sans Regular", "Lucida Grande",
      "Lucida Sans Unicode", Geneva, Verdana, sans-serif;
    margin: 10px 0 30px 0;
    font-size: 28px;
    font-weight: 800;
    color: #7f1d1d;
  }

  .form {
    width: 100%;
    display: flex;
    flex-direction: column;
    gap: 18px;
    margin-bottom: 15px;
  }

  .input {
    border-radius: 20px;
    border: 1px solid #c0c0c0;
    outline: 0 !important;
    box-sizing: border-box;
    padding: 12px 15px;
    background: #f5f5f5;
    color: #222;
  }

  .page-link {
    text-decoration: underline;
    margin: 0;
    text-align: end;
    color: #7f1d1d;
    text-decoration-color: #7f1d1d;
  }

  .page-link-label {
    cursor: pointer;
    font-family: "Lucida Sans", "Lucida Sans Regular", "Lucida Grande",
      "Lucida Sans Unicode", Geneva, Verdana, sans-serif;
    font-size: 9px;
    font-weight: 700;
    color: #7f1d1d;
  }

  .page-link-label:hover {
    color: #000;
  }

  .form-btn {
    padding: 10px 15px;
    font-family: "Lucida Sans", "Lucida Sans Regular", "Lucida Grande",
      "Lucida Sans Unicode", Geneva, Verdana, sans-serif;
    border-radius: 20px;
    border: 0 !important;
    outline: 0 !important;
    background: #7f1d1d;
    color: white;
    cursor: pointer;
    box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
  }

  .form-btn:active {
    box-shadow: none;
  }

  .sign-up-label {
    margin: 0;
    font-size: 10px;
    color: #747474;
    font-family: "Lucida Sans", "Lucida Sans Regular", "Lucida Grande",
      "Lucida Sans Unicode", Geneva, Verdana, sans-serif;
  }

  .sign-up-link {
    margin-left: 1px;
    font-size: 11px;
    text-decoration: underline;
    text-decoration-color: #7f1d1d;
    color: #7f1d1d;
    cursor: pointer;
    font-weight: 800;
    font-family: "Lucida Sans", "Lucida Sans Regular", "Lucida Grande",
      "Lucida Sans Unicode", Geneva, Verdana, sans-serif;
  }

  .buttons-container {
    width: 100%;
    display: flex;
    flex-direction: column;
    justify-content: flex-start;
    margin-top: 20px;
    gap: 15px;
  }

  .apple-login-button,
  .google-login-button {
    border-radius: 20px;
    box-sizing: border-box;
    padding: 10px 15px;
    box-shadow: rgba(0, 0, 0, 0.16) 0px 10px 36px 0px,
      rgba(0, 0, 0, 0.06) 0px 0px 0px 1px;
    cursor: pointer;
    display: flex;
    justify-content: center;
    align-items: center;
    font-family: "Lucida Sans", "Lucida Sans Regular", "Lucida Grande",
      "Lucida Sans Unicode", Geneva, Verdana, sans-serif;
    font-size: 11px;
    gap: 5px;
    background: #f5f5f5;
    color: #222;
    border: 2px solid #e5e5e5;
  }

  .apple-login-button {
    border: 2px solid #7f1d1d;
    color: #7f1d1d;
    background: #fff;
  }

  .google-login-button {
    border: 2px solid #7f1d1d;
    color: #7f1d1d;
    background: #fff;
  }

  .apple-icon,
  .google-icon {
    font-size: 18px;
    margin-bottom: 1px;
    color: #7f1d1d;
  }

  body {
    min-height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
    background: #f5f5f5;
  }
  </style>
</head>

<body>
  <div class="form-container ">
    <p class="title">Welcome back</p>
    <form class="form" method="POST" action="{{ route('login') }}">
      @csrf
      <input type="email" class="input" name="email" placeholder="Email" value="{{ old('email') }}" required autofocus
        autocomplete="username">
      @if ($errors->has('email'))
      <span style="color:#b91c1c; font-size:12px;">{{ $errors->first('email') }}</span>
      @endif
      <input type="password" class="input" name="password" placeholder="Password" required
        autocomplete="current-password">
      @if ($errors->has('password'))
      <span style="color:#b91c1c; font-size:12px;">{{ $errors->first('password') }}</span>
      @endif
      <p class="page-link">
        @if (Route::has('password.request'))
        <a class="page-link-label" href="{{ route('password.request') }}">{{ __('Forgot Password?') }}</a>
        @endif
      </p>
      <button class="form-btn" type="submit">Log in</button>
    </form>
    <p class="sign-up-label">
      Don't have an account?
      @if (Route::has('register'))
      <a href="{{ route('register') }}" class="sign-up-link">Sign up</a>
      @endif
    </p>
    <div class="buttons-container">
      <div class="apple-login-button">
        <svg stroke="currentColor" fill="currentColor" stroke-width="0" class="apple-icon" viewBox="0 0 1024 1024"
          height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
          <path
            d="M747.4 535.7c-.4-68.2 30.5-119.6 92.9-157.5-34.9-50-87.7-77.5-157.3-82.8-65.9-5.2-138 38.4-164.4 38.4-27.9 0-91.7-36.6-141.9-36.6C273.1 298.8 163 379.8 163 544.6c0 48.7 8.9 99 26.7 150.8 23.8 68.2 109.6 235.3 199.1 232.6 46.8-1.1 79.9-33.2 140.8-33.2 59.1 0 89.7 33.2 141.9 33.2 90.3-1.3 167.9-153.2 190.5-221.6-121.1-57.1-114.6-167.2-114.6-170.7zm-105.1-305c50.7-60.2 46.1-115 44.6-134.7-44.8 2.6-96.6 30.5-126.1 64.8-32.5 36.8-51.6 82.3-47.5 133.6 48.4 3.7 92.6-21.2 129-63.7z">
          </path>
        </svg>
        <span>Log in with Apple</span>
      </div>
      <div class="google-login-button">
        <svg stroke="currentColor" fill="currentColor" stroke-width="0" version="1.1" x="0px" y="0px"
          class="google-icon" viewBox="0 0 48 48" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
          <path fill="#FFC107" d="M43.611,20.083H42V20H24v8h11.303c-1.649,4.657-6.08,8-11.303,8c-6.627,0-12-5.373-12-12
        c0-6.627,5.373-12,12-12c3.059,0,5.842,1.154,7.961,3.039l5.657-5.657C34.046,6.053,29.268,4,24,4C12.955,4,4,12.955,4,24
        c0,11.045,8.955,20,20,20c11.045,0,20-8.955,20-20C44,22.659,43.862,21.35,43.611,20.083z"></path>
          <path fill="#FF3D00" d="M6.306,14.691l6.571,4.819C14.655,15.108,18.961,12,24,12c3.059,0,5.842,1.154,7.961,3.039l5.657-5.657
        C34.046,6.053,29.268,4,24,4C16.318,4,9.656,8.337,6.306,14.691z"></path>
          <path fill="#4CAF50" d="M24,44c5.166,0,9.86-1.977,13.409-5.192l-6.19-5.238C29.211,35.091,26.715,36,24,36
        c-5.202,0-9.619-3.317-11.283-7.946l-6.522,5.025C9.505,39.556,16.227,44,24,44z"></path>
          <path fill="#1976D2"
            d="M43.611,20.083H42V20H24v8h11.303c-0.792,2.237-2.231,4.166-4.087,5.571
        c0.001-0.001,0.002-0.001,0.003-0.002l6.19,5.238C36.971,39.205,44,34,44,24C44,22.659,43.862,21.35,43.611,20.083z">
          </path>
        </svg>
        <span>Log in with Google</span>
      </div>
    </div>
  </div>
</body>

</html>
