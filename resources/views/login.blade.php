<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Beasiswa IT Del</title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <link href="{{url(asset('Assets/css/style.css'))}}" rel="stylesheet">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous"> -->
    <link rel="icon" href="{{url(asset('Assets/logo.png'))}}">
  </head>

  <body>

    <div class="flex items-center min-h-screen bg-gray-50">
      <div class="flex-1 h-full max-w-4xl mx-auto bg-white rounded-lg shadow-xl">
        <div class="flex flex-col md:flex-row">
          <div class="h-32 md:h-auto md:w-1/2">

          <section class="showcase">
          <img class="object-cover w-full h-full" src="{{asset('Assets/login-bg.png')}}" alt="img"/>
            <div class="overlay">
              <h2>Hello.<br>Welcome<br>Back!</h2>
            </div>
          </section>

            <!-- <img class="object-cover w-full h-full" src="{{asset('Assets/login-bg.png')}}" alt="img"/> -->
          </div>
          <div class="flex items-center justify-center p-6 sm:p-12 md:w-1/2">
            <div class="w-full">
              <div class="flex justify-center mb-10">
              <img src="{{asset('Assets/logobeasiswa.png')}}"/>
                <!-- <svg xmlns="http://www.w3.org/2000/svg" class="w-20 h-20 text-blue-600" fill="none"
                  viewBox="0 0 24 24" stroke="currentColor">
                  <path d="M12 14l9-5-9-5-9 5 9 5z" />
                  <path
                    d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z" />
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222" />
                </svg> -->
              </div>
              <!-- <h1 class="mb-4 text-2xl font-bold text-center text-gray-700">
                Beasiswa
              </h1> -->
              <form action="{{route('login')}}" method="POST">
                @csrf
                  <div> 
                      <label class="block text-sm ">
                      Username
                      </label>
                      <input type="text"
                      class="w-full px-4 py-2 text-sm border-b-2 border-black outline-none opacity-50 focus:border-blue-400 form-control @error('username') tidak valid @enderror" id="username" name="username" placeholder="Enter your username" autocomplete="off" />
                      @error('username')
                          <div class="text-sm pl-2">{{ $message }}</div>
                      @enderror
                  </div>
                  <div>
                      <label class="block mt-4 text-sm">
                      Password
                      </label>
                      <input
                      class="w-full px-4 py-2 text-sm border-b-2 border-black outline-none opacity-50 focus:border-blue-400 form-control @error('password') tidak valid @enderror" id="password" name = "password" placeholder="Enter your password"
                      type="password" />
                      @error('password')
                          <div class="text-sm pl-2 ">{{ $message }}</div>
                      @enderror
                  </div>

                  <div class="mt-8 flex justify-between items-center">
                  <div clas="form-check">
                    <input type="checkbox" id="rememberMe" name="rememberMe" class="form-check-input"/>
                    <label for="rememberMe" class="form-check-label text-xs cursor-pointer">Remember me?</label>
                  </div>
                  <button class="font-bold text-sm text-white rounded py-1 px-4" id="login">Sign In</button>
                  @error('login')
                      <div class="text-danger pl-2">{{ $message }}</div>
                  @enderror
                </div>
                </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>

</html>