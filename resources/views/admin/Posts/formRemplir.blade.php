
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
    <div class="bg-slate-300 text-black">
        <form method="post" action="">
            @csrf
            @method('put')
            <h1 class="text-2xl font-bold text-center mb-4">ajouter un post</h1>
            <label class="block">
                <span class="block text-sm font-bold text-slate-700">Title :</span>
                <input type="text" class="p-1 border-slate-200 placeholder-slate-400 contrast-more:border-slate-400 contrast-more:placeholder-slate-500"/>
   
      
           </label>
           <label class="block">
                <span class="block text-sm font-bold text-slate-700">image :</span>
                <input type="text" class="p-1 border-slate-200 placeholder-slate-400 contrast-more:border-slate-400 contrast-more:placeholder-slate-500"/>
   
      
           </label>
           <label class="block">
                <span class="block text-sm font-bold text-slate-700">decription :</span>
                <input type="text" class="p-1 border-slate-200 placeholder-slate-400 contrast-more:border-slate-400 contrast-more:placeholder-slate-500"/>
   
      
           </label>
           <label class="block">
                <span class="block text-sm font-bold text-slate-700">détail description  :</span>
                <textarea  class="p-1 border-slate-200 placeholder-slate-400 contrast-more:border-slate-400 contrast-more:placeholder-slate-500"></textarea>
   
      
           </label>
           <button type="submit" class="p-1 bg-sky-700 text-white font-bold py-2 rounded-md hover:bg-sky-800">
             ajouter la post
           </button>




        </form>
   
       


    </div>
</body>

</html>
