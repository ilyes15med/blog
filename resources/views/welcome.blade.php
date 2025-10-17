<!-- crete a nav avec justify-around-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Controle Panel</title>
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
    <!--image==> background-image 
    
    
    -->

    <div class="w-full  mt-px h-screen">

          @if($posts->isEmpty())
              <p class="text-center text-gray-500">Aucun post trouvé.</p>
          @else
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                        @foreach ($posts as $post)
                          <a class="bg-white rounded-2xl shadow-md overflow-hidden hover:bg-cyan-200">
                             
                                  
                                    <h3 class="p-0.5 text-xl">{{$post->title}}</h3> 

                                    <img src="{{asset('storage/'.$post->image)}}" alt="{{$post->title}}"  class="max-w-48 min-h-24 object-cover rounded-lg shadow">
                                     <p class="p-0.5">{{$post->description}}</p>
                                
                                     
                                 
                             
                          </a>    
                        @endforeach
                </div>
          @endif

    



              

        
        


      
    


    </div>
     

    
</body>
</html>