<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    @vite('resources/css/app.css')

    <title>SIBATIK | Sign up</title>
  </head>

  <body>
      <div class="flex items-center justify-center h-screen">
        <div class="border shadow-md py-12 px-24 rounded-md">
          <h1 class="text-4xl font-bold text-center mb-12">Welcome SIBATIK</h1>
          @auth
          <div class="font-semibold text-center mb-6">
            <p>{{ auth('web')->user()->name }}</p>
            <p>{{ auth('web')->user()->email }}</p>
          </div>
          <div class="text-center mb-6">
            <a href="/test" class="hover:underline italic">Test SIBATIK AI</a>
            <br>
            @if(auth('web')->user()->role == 'admin')
              <a href="/dashboard" class="hover:underline italic">Dashboard</a>
            @endif
          </div>
          <div class="flex justify-center items-center">
            <form action="{{ route('logout') }}" method="post">
              @csrf
              <button class="inline-flex bg-red-500 text-white font-semibold text-xl rounded-lg h-8 px-8" type="submit">Logout</button>
            </form>
          </div>
          @else
          <div class="flex justify-center items-center">
            <a href="{{ route('redirect') }}" class="inline-flex bg-slate-800 text-white rounded-lg py-2 px-4 items-center space-x-2">
              <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="25" height="25" viewBox="0 0 48 48">
                <path fill="#fbc02d" d="M43.611,20.083H42V20H24v8h11.303c-1.649,4.657-6.08,8-11.303,8c-6.627,0-12-5.373-12-12	s5.373-12,12-12c3.059,0,5.842,1.154,7.961,3.039l5.657-5.657C34.046,6.053,29.268,4,24,4C12.955,4,4,12.955,4,24s8.955,20,20,20	s20-8.955,20-20C44,22.659,43.862,21.35,43.611,20.083z"></path><path fill="#e53935" d="M6.306,14.691l6.571,4.819C14.655,15.108,18.961,12,24,12c3.059,0,5.842,1.154,7.961,3.039	l5.657-5.657C34.046,6.053,29.268,4,24,4C16.318,4,9.656,8.337,6.306,14.691z"></path><path fill="#4caf50" d="M24,44c5.166,0,9.86-1.977,13.409-5.192l-6.19-5.238C29.211,35.091,26.715,36,24,36	c-5.202,0-9.619-3.317-11.283-7.946l-6.522,5.025C9.505,39.556,16.227,44,24,44z"></path><path fill="#1565c0" d="M43.611,20.083L43.595,20L42,20H24v8h11.303c-0.792,2.237-2.231,4.166-4.087,5.571	c0.001-0.001,0.002-0.001,0.003-0.002l6.19,5.238C36.971,39.205,44,34,44,24C44,22.659,43.862,21.35,43.611,20.083z"></path>
              </svg>
              <p>Login with Google</p>
            </a>
          </div>
          @endauth
        </div>
      </div>
  </body>
</html>