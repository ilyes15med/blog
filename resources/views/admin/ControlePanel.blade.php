
<!-- crete a nav avec justify-around-->

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
          <div>

               <ul>
                <li>{{ session('user_email') }}</li>
                <li><a class="rounded-null p-1 bg-white hover:bg-red-600" href="{{route('deconnecter.admin')}}">Déconnecter</a></li>
               </ul>
  
       
    
 

 
            </div>

         
         

        </div>
       

    </div>
   
    <!--image==> background-image -->
    <div class="w-full mt-px h-screen bg-[url('/assets/3698488.jpg')] bg-cover bg-center">
        <div class="p-1 mt-2">
            <a class="bg-green-600 hover:bg-green-700 p-1" href="{{route('Category.form')}}">Ajouter un categorie</a>
            <table class="mt-1 p-2 w-full bg-gray-100 border border-gray-300 text-center ">

            <thead>
                <tr class="text-red-600">
                    <th>Categorie pere</th>
                    <th>Categorie fils</th>
                    <th>date poste</th>
                    <th>action</th>
                </tr>
               
            </thead>
            <tbody>
                @foreach( $categories as $categorie)
                    <tr>
                        <td><a href="" class="font-bold hover:text-cyan-500">{{$categorie['categoriePere']}}</a></td>
                        <td>{{$categorie['categorieFils']}}</td>
                        <td>{{$categorie['updated_at']}}</td>
                        <td class="my-0.5">
                             <a class="bg-red-600 text-white rounded hover:bg-red-700 pb-px" href="{{route('categorie.destroy',$categorie['id'])}}">Supprimer</a>
                             <a class="bg-yellow-500 text-black rounded hover:bg-yellow-600 pb-px" href="{{ route('categorie.edit',$categorie['id']) }}">Modifier</a>
                        </td>
                        
                        
                    </tr>
                @endforeach;

            
            </tbody>
            </table>
            



        </div>

    


    </div>
     

    
</body>
</html>

    



@include('frot-end.footer')