<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title> Admin</title>
   <!-- Tailwind-CSS CDN  -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/1.4.6/tailwind.min.css" />
  </head>
  <!-- <body class="bg-blue-500" style="background-color:grey !important"> -->
  <body class="" style="background-color:#dddddd !important">
    <!-- Login Form -->
    <div class="container mx-auto p-2">
      <div class="max-w-sm mx-auto my-24 bg-white px-5 py-10 rounded shadow-xl">
        <div class="text-center mb-8">
          <h1 class="font-bold text-2xl font-bold">Anju Shree Inn</h1>
        </div>
        <form action="{{ route('login') }}" method="POST">
        @csrf
          <div class="mt-5">
            <label for="username">Email</label>
            <input type="email"  name="email"id="email" class="block w-full p-2 border rounded border-gray-500 @error('email') is-invalid @enderror"/>
            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong style="color:red">{{ $message }}</strong>
                </span>
            @enderror
          </div>
          <div class="mt-5">
            <label for="password">Password</label>
            <input type="password" name="password" id="password" class="block w-full p-2 border rounded border-gray-500 @error('password') is-invalid @enderror"/>
            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong style="color:red">{{ $message }}</strong>
                </span>
            @enderror
			    </div>
          <div class="mt-10">
            <input type="submit"  value="Login"  class="py-3 bg-green-500 hover:bg-green-600 rounded text-white text-center w-full" style="background-color: #d8bb78" />
          </div>
        </form>
      </div>
    </div>
  </body>
</html>
