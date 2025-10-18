



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> post</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-slate-900">
        <!--nav bar -->
    <div class="bg-teal-700 p-2 text-xl" >
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
  

    <div class="text-white items-center  min-h-screen bg-slate-900">
          <span class="block mt-4">
                <p class="text-xl font-bold"> {{$post->title}}</p>
          </span>
          <span class="block mt-4">
            <img src="{{asset('storage/'.$post->image)}}" alt="{{$post->title}}" class=" max-w-96 min-h-64 object-cover rounded-lg shadow">
          </span>
          <span class="block mt-4">
            <p>
              {{$post->description}}
            </p>

          </span>
          <span class="block mt-4">
            {{$post->description_detail}}

          </span>


      </div>
         
    </div>
     

    
</body>
</html>