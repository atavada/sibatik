<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <script src="https://kit.fontawesome.com/53d82b54ee.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="{{ asset('auth/style.css') }}" />

    <title>SIBATIK | Sign In</title>
  </head>
  <body>
    <div class="container">
        <div class="forms-container">
          <div class="signin-signup">
            <div class="form sign-in-form">
              <h2 class="title">Join us or Sign in</h2>
              <a href="{{ route('redirect') }}" class="input-field" style="text-decoration: none">
                <i class="fab fa-google"></i>
                <p>Google Account</p>
              </a>
              <p class="social-text">Become our member, sign up using your google account</p>
            </div>
          </div>
        </div>

        <div class="panels-container">
          <div class="panel left-panel">
            <div class="content">
            </div>
            <img src="{{ asset('auth/img/log.svg') }}" class="image" alt="" />
          </div>
        </div>
      </div>

    <script src="{{ asset('auth/app.js') }}"></script>
  </body>
</html>