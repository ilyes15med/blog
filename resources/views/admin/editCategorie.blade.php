


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>modifier Categories</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-slate-300 h-screen flex justify-center items-center">

  <form method="post" action="{{route('Category.update',$categorie->id)}}">
            @csrf
            @method('put')
    <h1 class="text-2xl font-bold text-center mb-4">modifier une catégorie</h1>

    <!-- Categorie père -->
    <label class="block">
      <span class="block text-sm font-bold text-slate-700">Nom catégorie (Père)</span>
      <select id="CategoriesPere" name="Categorie_Pere" onchange="choisirCategorie()" class="border p-2 rounded-md w-full" required>
        <option value="">{{$categorie->categoriePere}}</option>
        <option value="sport">Sport</option>
        <option value="info">Informatique</option>
        <option value="emploie">Emploi</option>
      </select>
    </label>

    <!-- Categorie fils -->
    <label class="block">
      <span class="block text-sm font-bold text-slate-700">Nom Catégorie (Fils)</span>
      <select id="CategorieFils" name="Categorie_Fils" class="border p-2 rounded-md w-full" required>
        <option value="">{{$categorie->categorieFils}}</option>
      </select>
    </label>

    <button type="submit" class="w-full bg-sky-700 text-white font-bold py-2 rounded-md hover:bg-sky-800">
      modifier la catégorie
    </button>
  </form>

  <script>
    function choisirCategorie() {
      const pere = document.getElementById("CategoriesPere").value;
      const fils = document.getElementById("CategorieFils");

      // نحذف كل الخيارات القديمة
      fils.innerHTML = "";

      if (pere === "sport") {
        fils.innerHTML = `
          <option value="football">Football</option>
          <option value="basketball">Basketball</option>
          <option value="tennis">Tennis</option>
        `;
      } else if (pere === "info") {
        fils.innerHTML = `
          <option value="design">Design</option>
          <option value="SI">Système d'information</option>
          <option value="DAW">Programmation web</option>
        `;
      } else if (pere === "emploie") {
        fils.innerHTML = `
          <option value="infirmier">Infirmier</option>
          <option value="medecin">Médecin</option>
          <option value="programmer">Programmeur</option>
        `;
      } else {
        fils.innerHTML = `<option value="">-- Choisir d'abord une catégorie père --</option>`;
      }
    }
  </script>
</body>
</html>


