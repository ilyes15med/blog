<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fake news</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    
<div class="bg-slate-300 h-screen flex justify-center space-x-36">
        <div>
                 <h1 class="m-8 text-2xl font-bold">
                 Oxygene


                </h1>
                 <p class="m-8 text-xl font-bold">connexion mon compte</p>
        </div>
        <div class="flex">
          <form method="post" action="{{route('Seconnecter.admin')}}">
            @csrf
   
                <label>
  
                    <span class="block text-sm font-bold text-slate-700">Email</span>
                    <input type="email" name="email" class="peer p-2"/>
                </label>    
                <label for="">
                    <span class="block text-sm font-bold text-slate-700">password</span>
                    <input type="password" name="password" class="peer p-2"/>
                  </label>
                  <br>
                  <label>
                    <button class="rounded-null bg-sky-700 text-sm font-bold p-2 mt-2"type="submit">Se connecter</button>
                
                   </label>
                  
          </form>
       </div>
 

</div>
</body>