<!-- crete a nav avec justify-around-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Controle Panel</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="font-bold">
        <!--nav bar -->
    <div class="bg-teal-700 p-2" >
        <div class="flex justify-around  ">
          <div class="hover:font-bold">
            <h2 class="text-bold">Oxygen</h2>
          </div>
          <div class="space-x-4 ">
            <span class="hover:font-bold">Home</span>
            <span class="hover:font-bold">About us</span>
            <span class="hover:font-bold">contact</span>
          </div>
          <div class="space-x-12">
            <a class="hover:font-bold rounded-null bg-red-800 active:bg-lime-500 p-1" href="{{route('subscribe.user')}}">Subscribe </a>
            <a class="hover:font-bold rounded-null bg-violet-200 active:bg-lime-500 p-1" href="{{route('SeConnecterForm')}}">Se connecter</a>
          </div>

        </div>
       

    </div>
    <!--image==> background-image -->
    <div class="w-full mt-px h-screen bg-[url('/assets/3698488.jpg')] bg-cover bg-center">

      @yield('mycontent');


    </div>
     

    
</body>
</html>