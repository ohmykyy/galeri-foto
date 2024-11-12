<!doctype html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"  />

    <title>TaylorsVersion.com</title>
</head>

<header class="bg-white shadow-md">
    <div class="flex justify-between items-center py-2 px-5 border-b-2 border-gray-200">
        <div class="flex items-center">
            <!-- Logo -->
            <img src="image/roundedlog.png" alt="Logo de la empresa" class="w-120 h-12 ml-6">
        </div>

        <!-- Botones de Registro y Contacto -->
        <div class="flex items-center space-x-2">
            <a href="#" class="px-2 py-2 bg-gradient-to-r from-cyan-400 to-cyan-600 text-white font-semibold rounded-lg text-sm">Dashboard</a>
            <a href="/explore" class="px-2 py-2 bg-gradient-to-r from-cyan-400 to-cyan-600 text-white font-semibold rounded-lg text-sm">Setting</a>
            <a href="#" class="px-2 py-2 bg-gradient-to-r from-cyan-400 to-cyan-600 text-white font-semibold rounded-lg text-sm"></a>
            <a href="#" class="px-2 py-2 bg-gradient-to-r from-cyan-400 to-cyan-600 text-white font-semibold rounded-lg text-sm"></a>
        </div>
    </div>
    <div class="flex items-center justify-center py-4 md:py-8 flex-wrap">
        <a href="/dashboard">
            <button type="button" class="text-blue-700 hover:text-white border border-blue-600 bg-white hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-full text-base font-medium px-5 py-2.5 text-center me-3 mb-3 dark:border-blue-500 dark:text-blue-500 dark:hover:text-white dark:hover:bg-blue-500 dark:bg-gray-900 dark:focus:ring-blue-800">Album</button>
        </a>
        <button type="button" class="text-gray-900 border border-white hover:border-gray-200 dark:border-gray-900 dark:bg-gray-900 dark:hover:border-gray-700 bg-white focus:ring-4 focus:outline-none focus:ring-gray-300 rounded-full text-base font-medium px-5 py-2.5 text-center me-3 mb-3 dark:text-white dark:focus:ring-gray-800">Explore</button>
        <a href="/create">
            <button type="button" class="text-gray-900 border border-white hover:border-gray-200 dark:border-gray-900 dark:bg-gray-900 dark:hover:border-gray-700 bg-white focus:ring-4 focus:outline-none focus:ring-gray-300 rounded-full text-base font-medium px-5 py-2.5 text-center me-3 mb-3 dark:text-white dark:focus:ring-gray-800">Create</button>
        </a>
    </div>

   <!-- component -->
   <!DOCTYPE html>
   <html lang="id">
   <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Galeri dengan Like dan Komentar</title>
     <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
     <style>
       .gallery-item {
         max-width: 320px;
         margin-bottom: 20px;
       }
       .gallery-image {
         width: 100%;
         height: 200px;
         object-fit: cover;
       }
       .comment-box {
         max-height: 150px;
         overflow-y: auto;
       }
     </style>
   </head>
   <body class="bg-gray-100">


<!-- component -->
<!-- This is an example component -->
<<!-- component -->
<section class="text-gray-600 body-font">
    <div class="container px-5 py-24 mx-auto">
      <div class="flex flex-col text-center w-full mb-20">
        <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900"></h1>
        <p class="lg:w-2/3 mx-auto leading-relaxed text-base"></p>
      </div>
      <div class="flex flex-wrap -m-4">
        <!-- Foto 1 -->
        <div class="lg:w-1/3 sm:w-1/2 p-4">
          <div class="flex relative">
            <img alt="gallery" class="absolute inset-0 w-full h-full object-cover object-center" src="image/pict4.jpg">
            <div class="px-8 py-10 relative z-10 w-full border-4 border-gray-200 bg-white opacity-0 hover:opacity-100">
              <h2 class="tracking-widest text-sm title-font font-medium text-indigo-500 mb-1">THE SUBTITLE</h2>
              <h1 class="title-font text-lg font-medium text-gray-900 mb-3">Shooting Stars</h1>
              <p class="leading-relaxed">Photo booth fam kinfolk cold-pressed sriracha leggings jianbing microdosing tousled waistcoat.</p>
              <!-- Tombol Like -->
              <div class="mt-4 flex items-center space-x-2">
                <button class="text-indigo-500 hover:text-indigo-700">Like</button>
                <span class="text-gray-500">|</span>
                <button class="text-indigo-500 hover:text-indigo-700">Komentar</button>
              </div>
              <!-- Kolom Komentar -->
              <div class="mt-4">
                <textarea class="w-full p-2 border border-gray-300 rounded-md" rows="3" placeholder="Tulis komentar..."></textarea>
              </div>
            </div>
          </div>
        </div>

        <!-- Foto 2 -->
        <div class="lg:w-1/3 sm:w-1/2 p-4">
          <div class="flex relative">
            <img alt="gallery" class="absolute inset-0 w-full h-full object-cover object-center" src="image/pict11.jpg">
            <div class="px-8 py-10 relative z-10 w-full border-4 border-gray-200 bg-white opacity-0 hover:opacity-100">
              <h2 class="tracking-widest text-sm title-font font-medium text-indigo-500 mb-1">THE SUBTITLE</h2>
              <h1 class="title-font text-lg font-medium text-gray-900 mb-3">The Catalyzer</h1>
              <p class="leading-relaxed">Photo booth fam kinfolk cold-pressed sriracha leggings jianbing microdosing tousled waistcoat.</p>
              <!-- Tombol Like -->
              <div class="mt-4 flex items-center space-x-2">
                <button class="text-indigo-500 hover:text-indigo-700">Like</button>
                <span class="text-gray-500">|</span>
                <button class="text-indigo-500 hover:text-indigo-700">Komentar</button>
              </div>
              <!-- Kolom Komentar -->
              <div class="mt-4">
                <textarea class="w-full p-2 border border-gray-300 rounded-md" rows="3" placeholder="Tulis komentar..."></textarea>
              </div>
            </div>
          </div>
        </div>

        <!-- Foto 3 -->
        <div class="lg:w-1/3 sm:w-1/2 p-4">
          <div class="flex relative">
            <img alt="gallery" class="absolute inset-0 w-full h-full object-cover object-center" src="image/pict7.jpg">
            <div class="px-8 py-10 relative z-10 w-full border-4 border-gray-200 bg-white opacity-0 hover:opacity-100">
              <h2 class="tracking-widest text-sm title-font font-medium text-indigo-500 mb-1">THE SUBTITLE</h2>
              <h1 class="title-font text-lg font-medium text-gray-900 mb-3">The 400 Blows</h1>
              <p class="leading-relaxed">Photo booth fam kinfolk cold-pressed sriracha leggings jianbing microdosing tousled waistcoat.</p>
              <!-- Tombol Like -->
              <div class="mt-4 flex items-center space-x-2">
                <button class="text-indigo-500 hover:text-indigo-700">Like</button>
                <span class="text-gray-500">|</span>
                <button class="text-indigo-500 hover:text-indigo-700">Komentar</button>
              </div>
              <!-- Kolom Komentar -->
              <div class="mt-4">
                <textarea class="w-full p-2 border border-gray-300 rounded-md" rows="3" placeholder="Tulis komentar..."></textarea>
              </div>
            </div>
          </div>
        </div>

        <!-- Foto 4 -->
        <div class="lg:w-1/3 sm:w-1/2 p-4">
          <div class="flex relative">
            <img alt="gallery" class="absolute inset-0 w-full h-full object-cover object-center" src="image/pict13.jpg">
            <div class="px-8 py-10 relative z-10 w-full border-4 border-gray-200 bg-white opacity-0 hover:opacity-100">
              <h2 class="tracking-widest text-sm title-font font-medium text-indigo-500 mb-1">THE SUBTITLE</h2>
              <h1 class="title-font text-lg font-medium text-gray-900 mb-3">Neptune</h1>
              <p class="leading-relaxed">Photo booth fam kinfolk cold-pressed sriracha leggings jianbing microdosing tousled waistcoat.</p>
              <!-- Tombol Like -->
              <div class="mt-4 flex items-center space-x-2">
                <button class="text-indigo-500 hover:text-indigo-700">Like</button>
                <span class="text-gray-500">|</span>
                <button class="text-indigo-500 hover:text-indigo-700">Komentar</button>
              </div>
              <!-- Kolom Komentar -->
              <div class="mt-4">
                <textarea class="w-full p-2 border border-gray-300 rounded-md" rows="3" placeholder="Tulis komentar..."></textarea>
              </div>
            </div>
          </div>
        </div>

        <!-- Foto 5 -->
        <div class="lg:w-1/3 sm:w-1/2 p-4">
          <div class="flex relative">
            <img alt="gallery" class="absolute inset-0 w-full h-full object-cover object-center" src="image/pict12.jpg">
            <div class="px-8 py-10 relative z-10 w-full border-4 border-gray-200 bg-white opacity-0 hover:opacity-100">
              <h2 class="tracking-widest text-sm title-font font-medium text-indigo-500 mb-1">THE SUBTITLE</h2>
              <h1 class="title-font text-lg font-medium text-gray-900 mb-3">Holden Caulfield</h1>
              <p class="leading-relaxed">Photo booth fam kinfolk cold-pressed sriracha leggings jianbing microdosing tousled waistcoat.</p>
              <!-- Tombol Like -->
              <div class="mt-4 flex items-center space-x-2">
                <button class="text-indigo-500 hover:text-indigo-700">Like</button>
                <span class="text-gray-500">|</span>
                <button class="text-indigo-500 hover:text-indigo-700">Komentar</button>
              </div>
              <!-- Kolom Komentar -->
              <div class="mt-4">
                <textarea class="w-full p-2 border border-gray-300 rounded-md" rows="3" placeholder="Tulis komentar..."></textarea>
              </div>
            </div>
          </div>
        </div>

        <!-- Foto 6 -->
        <div class="lg:w-1/3 sm:w-1/2 p-4">
          <div class="flex relative">
            <img alt="gallery" class="absolute inset-0 w-full h-full object-cover object-center" src="image/pict10.jpg">
            <div class="px-8 py-10 relative z-10 w-full border-4 border-gray-200 bg-white opacity-0 hover:opacity-100">
              <h2 class="tracking-widest text-sm title-font font-medium text-indigo-500 mb-1">THE SUBTITLE</h2>
              <h1 class="title-font text-lg font-medium text-gray-900 mb-3">Alper Kamu</h1>
              <p class="leading-relaxed">Photo booth fam kinfolk cold-pressed sriracha leggings jianbing microdosing tousled waistcoat.</p>
              <!-- Tombol Like -->
              <div class="mt-4 flex items-center space-x-2">
                <button class="text-indigo-500 hover:text-indigo-700">Like</button>
                <span class="text-gray-500">|</span>
                <button class="text-indigo-500 hover:text-indigo-700">Komentar</button>
              </div>
              <!-- Kolom Komentar -->
              <div class="mt-4">
                <textarea class="w-full p-2 border border-gray-300 rounded-md" rows="3" placeholder="Tulis komentar..."></textarea>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>


</div>
<footer class="bg-gradient-to-r from-gray-100 via-[#bce1ff] to-gray-100">
<div class="max-w-screen-xl px-4 py-16 mx-auto sm:px-6 lg:px-8">
<div class="grid grid-cols-1 gap-8 lg:grid-cols-3">
<div>
    <img src="image/taylorbg.jpg" class="mr-5 h-6 sm:h-9" alt="logo" />
    <p class="max-w-xs mt-4 text-sm text-gray-600">
        Taylor Swift, she's one of my favorite idols, she's so inspiring to anyone who likes her.
    </p>
    <div class="flex mt-8 space-x-6 text-gray-600">
        <a class="hover:opacity-75" href target="_blank" rel="noreferrer">
            <span class="sr-only"> Facebook </span>
            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                <path fillRule="evenodd"
                    d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z"
                    clipRule="evenodd" />
            </svg>
        </a>
        <a class="hover:opacity-75" href target="_blank" rel="noreferrer">
            <span class="sr-only"> Instagram </span>
            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                <path fillRule="evenodd"
                    d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z"
                    clipRule="evenodd" />
            </svg>
        </a>
        <a class="hover:opacity-75" href target="_blank" rel="noreferrer">
            <span class="sr-only"> Twitter </span>
            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                <path
                    d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84" />
            </svg>
        </a>
        <a class="hover:opacity-75" href target="_blank" rel="noreferrer">
            <span class="sr-only"> GitHub </span>
            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                <path fillRule="evenodd"
                    d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z"
                    clipRule="evenodd" />
            </svg>
        </a>
    </div>
</div>
<div class="grid grid-cols-1 gap-8 lg:col-span-2 sm:grid-cols-2 lg:grid-cols-4">
    <div>
        <p class="font-medium">
            Company
        </p>
        <nav class="flex flex-col mt-4 space-y-2 text-sm text-gray-500">
            <a class="hover:opacity-75" href> About </a>
            <a class="hover:opacity-75" href> Meet the Team </a>
            <a class="hover:opacity-75" href> History </a>
            <a class="hover:opacity-75" href> Careers </a>
        </nav>
    </div>
    <div>
        <p class="font-medium">
            Services
        </p>
        <nav class="flex flex-col mt-4 space-y-2 text-sm text-gray-500">
            <a class="hover:opacity-75" href> Company Review </a>
            <a class="hover:opacity-75" href> Accounts Review </a>
            <a class="hover:opacity-75" href> Consulting </a>
        </nav>
    </div>
    <div>
        <p class="font-medium">
            Helpful Links
        </p>
        <nav class="flex flex-col mt-4 space-y-2 text-sm text-gray-500">
            <a class="hover:opacity-75" href> Contact </a>
            <a class="hover:opacity-75" href> Chat </a>
        </nav>
    </div>
    <div>
        <p class="font-medium">
            Legal
        </p>
        <nav class="flex flex-col mt-4 space-y-2 text-sm text-gray-500">
            <a class="hover:opacity-75" href> Privacy Policy </a>
            <a class="hover:opacity-75" href> Terms &amp; Conditions </a>
            <a class="hover:opacity-75" href> Returns Policy </a>
            <a class="hover:opacity-75" href> Accessibility </a>
        </nav>
    </div>
</div>
</div>
<p class="mt-8 text-xs text-gray-800">
© ujikom-test
</p>
</div>
</footer>


</body>

</html>
