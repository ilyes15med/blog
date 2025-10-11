
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <title>Posts form</title>
</head>
<body>
  

<div class="max-w-2xl mx-auto mt-10 bg-white p-6 rounded-lg shadow-md">
    <h1 class="text-2xl font-bold text-center mb-6">Ajouter un post</h1>
    

    <form method="post" enctype="multipart/form-data" action="{{route('post.store',$category->id)}}" >
      @csrf
     

      <!-- Titre -->
      <label class="block mb-4">
        <span class="block text-sm font-semibold text-slate-700 mb-1">Titre :</span>
        <input type="text" name="title" required
               class="w-full p-2 border rounded-md border-slate-300 placeholder-slate-400 focus:outline-none focus:ring-2 focus:ring-teal-600"/>
      </label>

      <!-- Image -->
      <label class="block mb-4">
        <span class="block text-sm font-semibold text-slate-700 mb-1">Image :</span>
        <input type="file" name="image"
               class="w-full p-2 border rounded-md border-slate-300 focus:outline-none focus:ring-2 focus:ring-teal-600" required/>
      </label>

      <!-- Description -->
      <label class="block mb-4">
        <span class="block text-sm font-semibold text-slate-700 mb-1">Description :</span>
        <input type="text" name="description" required
               class="w-full p-2 border rounded-md border-slate-300 placeholder-slate-400 focus:outline-none focus:ring-2 focus:ring-teal-600"/>
      </label>

      <!-- Détail de la description -->
      <label class="block mb-6">
        <span class="block text-sm font-semibold text-slate-700 mb-1">Détail description :</span>
        <textarea name="detail" rows="4" required
                  class="w-full p-2 border rounded-md border-slate-300 placeholder-slate-400 focus:outline-none focus:ring-2 focus:ring-teal-600"></textarea>
      </label>

      <!-- Bouton -->
      <button type="submit"
              class="w-full bg-sky-700 text-white font-semibold py-2 rounded-md hover:bg-sky-800 transition">
        Ajouter le post
      </button>
    </form>
  </div>

  </body>
</html>