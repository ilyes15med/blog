
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Controle Panel</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
        <!--nav bar -->
    <div class="bg-teal-700 p-2">
        <div class="flex justify-around  ">
          <div class="hover:font-bold">
            <b class="text-bold">Oxygen</b>
          </div>
          <div class="space-x-4 ">
            <span class="hover:font-bold">Home</span>
            <span class="hover:font-bold">About us</span>
            <span class="hover:font-bold">contact</span>
          </div>
            <div>

               <ul>
                <li>{{ session('user_email') }}</li>
                <li><a class="rounded-null p-1 bg-white hover:bg-red-600" href="{{route('deconnecter.admin')}}">Déconnecter</a></li>
               </ul>
  
       
    
 

 
            </div>
        </div>    
    </div> 
    <div class="bg-slate-300">
        <p class="text-2xl text-bold  text-black">
        {{$categorie['categoriePere']}}/{{$categorie['categorieFils']}}
        </p>
        <a class="bg-green-600 hover:bg-green-700 p-1 " href="{{route('formAjouterPost.show',$categorie->id)}}">Ajouter un post</a>
    
    <table class="bg-white text-black text-xl">

     <thead>
        <tr>
           <th>title</th>
           <th>image</th>
           <th>description</th>
           <th>detail description</th>
           <th>action</th>
           
        </tr>
     </thead>
            <tbody  class="p-px">
            @foreach($posts as $post)
                <tr>
                   
                     <td>{{$post->title}}</td>
                        <td>
                            @if($post->image)
                              <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->title }}" class="max-w-48 min-h-24 object-cover rounded-lg shadow">
                       
                            @endif
                        </td>
                     <td>{{$post->description}}</td>
                     <td>{{$post->description_detail}}</td>
                     <td>
                      <a href="{{route('post.delete',[$categorie['id'],$post['id']])}}" class="bg-red-600 hover:bg-red-700 rounded-null p-px text-white text-bold">supprimer</a>
                     </td>


                   
                </tr>
            @endforeach
       
    
       

            </tbody>
    </table>
   
       


    </div>
</body>

</html>
