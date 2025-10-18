
@php
    use Illuminate\Support\Str;
@endphp


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Oxygen</title>
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
  

    <div class="w-full  mt-px h-screen">

          @if($posts->isEmpty())
              <p class="text-center text-gray-500">Aucun post trouvé.</p>
          @else
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                        @foreach ($posts as $post)
                          <a href="{{route('post.postshow',$post->id)}}" class="bg-white rounded-2xl shadow-md overflow-hidden active:bg-cyan-200">
                             
                                  
                                   
                                   
                                    <div class="space-y-0.5">
                                      
                                                <img src="{{asset('storage/'.$post->image)}}" alt="{{$post->title}}"  class="min-w-full min-h-24 object-cover rounded-lg shadow">
                                   
                                     
                                       
                                                <p class="p-0.5 text-2xl line-clamp-3">
                                                  {{$post->title}}
                                                </p> 
                                           
                                     
                                          

                                                <p>{{$post->updated_at}}</p>
                               
                                                <p class="p-0.5">{{Str::limit($post->description,100,'...')}}</p>
                                                <p class="text-red-500 p-0.5">En savoir plus</p>
                                    
                                     
                                        </div>

                                
                                     
                                 
                             
                            </a>    
                          @endforeach
                </div>
          @endif

    



              

        
        


      
    


    </div>
     

    
</body>
</html>