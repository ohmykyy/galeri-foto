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
            <a href="/explore" class="px-2 py-2 bg-gradient-to-r from-cyan-400 to-cyan-600 text-white font-semibold rounded-lg text-sm">oo</a>
            <a href="#" class="px-2 py-2 bg-gradient-to-r from-cyan-400 to-cyan-600 text-white font-semibold rounded-lg text-sm"></a>
            <a href="#" class="px-2 py-2 bg-gradient-to-r from-cyan-400 to-cyan-600 text-white font-semibold rounded-lg text-sm"></a>
        </div>
    </div>
    <div class="flex items-center justify-center py-4 md:py-8 flex-wrap">
        <a href="/album">
        <button type="button" class="text-blue-700 hover:text-white border border-blue-600 bg-white hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-full text-base font-medium px-5 py-2.5 text-center me-3 mb-3 dark:border-blue-500 dark:text-blue-500 dark:hover:text-white dark:hover:bg-blue-500 dark:bg-gray-900 dark:focus:ring-blue-800">Album</button>
        </a>
        <a href="/explore">
        <button type="button" class="text-gray-900 border border-white hover:border-gray-200 dark:border-gray-900 dark:bg-gray-900 dark:hover:border-gray-700 bg-white focus:ring-4 focus:outline-none focus:ring-gray-300 rounded-full text-base font-medium px-5 py-2.5 text-center me-3 mb-3 dark:text-white dark:focus:ring-gray-800">Explore</button>
        </a>
        <a href="/create">
        <button type="button" class="text-gray-900 border border-white hover:border-gray-200 dark:border-gray-900 dark:bg-gray-900 dark:hover:border-gray-700 bg-white focus:ring-4 focus:outline-none focus:ring-gray-300 rounded-full text-base font-medium px-5 py-2.5 text-center me-3 mb-3 dark:text-white dark:focus:ring-gray-800">Create</button>
    </a>
    </div>
</header>

<!-- component -->
<div class="bg-gray-500 h-screen w-screen sm:px-8 md:px-16 sm:py-8">
    <main class="container mx-auto max-w-screen-lg h-full">
      <!-- file upload modal -->
      <article aria-label="File Upload Modal" class="relative h-full flex flex-col bg-white shadow-xl rounded-md" ondrop="dropHandler(event);" ondragover="dragOverHandler(event);" ondragleave="dragLeaveHandler(event);" ondragenter="dragEnterHandler(event);">
        <!-- overlay -->
        <div id="overlay" class="w-full h-full absolute top-0 left-0 pointer-events-none z-50 flex flex-col items-center justify-center rounded-md">
          <i>
            <svg class="fill-current w-12 h-12 mb-3 text-blue-700" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
              <path d="M19.479 10.092c-.212-3.951-3.473-7.092-7.479-7.092-4.005 0-7.267 3.141-7.479 7.092-2.57.463-4.521 2.706-4.521 5.408 0 3.037 2.463 5.5 5.5 5.5h13c3.037 0 5.5-2.463 5.5-5.5 0-2.702-1.951-4.945-4.521-5.408zm-7.479-1.092l4 4h-3v4h-2v-4h-3l4-4z" />
            </svg>
          </i>
          <p class="text-lg text-blue-700">Drop files to upload</p>
        </div>

        <!-- scroll area -->
        <section class="h-full overflow-auto p-8 w-full h-full flex flex-col">
          <header class="border-dashed border-2 border-gray-400 py-12 flex flex-col justify-center items-center">
            <p class="mb-3 font-semibold text-gray-900 flex flex-wrap justify-center">
              <span>Drag and drop your</span>&nbsp;<span>files anywhere or</span>
            </p>
            <input id="hidden-input" type="file" multiple class="hidden" />
            <button id="button" class="mt-2 rounded-sm px-3 py-1 bg-gray-200 hover:bg-gray-300 focus:shadow-outline focus:outline-none">
              Upload a file
            </button>
          </header>

          <h1 class="pt-8 pb-3 font-semibold sm:text-lg text-gray-900">
            Upload photos you like here!!
          </h1>

          <ul id="gallery" class="flex flex-1 flex-wrap -m-1">
            <li id="empty" class="h-full w-full text-center flex flex-col items-center justify-center items-center">
              <img class="mx-auto w-32" src="https://user-images.githubusercontent.com/507615/54591670-ac0a0180-4a65-11e9-846c-e55ffce0fe7b.png" alt="no data" />
              <span class="text-small text-gray-500">No files selected</span>
            </li>
          </ul>
        </section>

        <!-- sticky footer -->
        <footer class="flex justify-end px-8 pb-8 pt-4">
          <button id="submit" class="rounded-sm px-3 py-1 bg-blue-700 hover:bg-blue-500 text-white focus:shadow-outline focus:outline-none">
            Upload now
          </button>
          <button id="cancel" class="ml-3 rounded-sm px-3 py-1 hover:bg-gray-300 focus:shadow-outline focus:outline-none">
            Cancel
          </button>
        </footer>
      </article>
    </main>
  </div>

  <!-- using two similar templates for simplicity in js code -->
  <template id="file-template">
    <li class="block p-1 w-1/2 sm:w-1/3 md:w-1/4 lg:w-1/6 xl:w-1/8 h-24">
      <article tabindex="0" class="group w-full h-full rounded-md focus:outline-none focus:shadow-outline elative bg-gray-100 cursor-pointer relative shadow-sm">
        <img alt="upload preview" class="img-preview hidden w-full h-full sticky object-cover rounded-md bg-fixed" />

        <section class="flex flex-col rounded-md text-xs break-words w-full h-full z-20 absolute top-0 py-2 px-3">
          <h1 class="flex-1 group-hover:text-blue-800"></h1>
          <div class="flex">
            <span class="p-1 text-blue-800">
              <i>
                <svg class="fill-current w-4 h-4 ml-auto pt-1" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                  <path d="M15 2v5h5v15h-16v-20h11zm1-2h-14v24h20v-18l-6-6z" />
                </svg>
              </i>
            </span>
            <p class="p-1 size text-xs text-gray-700"></p>
            <button class="delete ml-auto focus:outline-none hover:bg-gray-300 p-1 rounded-md text-gray-800">
              <svg class="pointer-events-none fill-current w-4 h-4 ml-auto" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                <path class="pointer-events-none" d="M3 6l3 18h12l3-18h-18zm19-4v2h-20v-2h5.711c.9 0 1.631-1.099 1.631-2h5.316c0 .901.73 2 1.631 2h5.711z" />
              </svg>
            </button>
          </div>
        </section>
      </article>
    </li>
  </template>

  <template id="image-template">
    <li class="block p-1 w-1/2 sm:w-1/3 md:w-1/4 lg:w-1/6 xl:w-1/8 h-24">
      <article tabindex="0" class="group hasImage w-full h-full rounded-md focus:outline-none focus:shadow-outline bg-gray-100 cursor-pointer relative text-transparent hover:text-white shadow-sm">
        <img alt="upload preview" class="img-preview w-full h-full sticky object-cover rounded-md bg-fixed" />

        <section class="flex flex-col rounded-md text-xs break-words w-full h-full z-20 absolute top-0 py-2 px-3">
          <h1 class="flex-1"></h1>
          <div class="flex">
            <span class="p-1">
              <i>
                <svg class="fill-current w-4 h-4 ml-auto pt-" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                  <path d="M5 8.5c0-.828.672-1.5 1.5-1.5s1.5.672 1.5 1.5c0 .829-.672 1.5-1.5 1.5s-1.5-.671-1.5-1.5zm9 .5l-2.519 4-2.481-1.96-4 5.96h14l-5-8zm8-4v14h-20v-14h20zm2-2h-24v18h24v-18z" />
                </svg>
              </i>
            </span>

            <p class="p-1 size text-xs"></p>
            <button class="delete ml-auto focus:outline-none hover:bg-gray-300 p-1 rounded-md">
              <svg class="pointer-events-none fill-current w-4 h-4 ml-auto" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                <path class="pointer-events-none" d="M3 6l3 18h12l3-18h-18zm19-4v2h-20v-2h5.711c.9 0 1.631-1.099 1.631-2h5.316c0 .901.73 2 1.631 2h5.711z" />
              </svg>
            </button>
          </div>
        </section>
      </article>
    </li>
  </template>

<script>
const fileTempl = document.getElementById("file-template"),
imageTempl = document.getElementById("image-template"),
empty = document.getElementById("empty");

// use to store pre selected files
let FILES = {};

// check if file is of type image and prepend the initialied
// template to the target element
function addFile(target, file) {
const isImage = file.type.match("image.*"),
  objectURL = URL.createObjectURL(file);

const clone = isImage
  ? imageTempl.content.cloneNode(true)
  : fileTempl.content.cloneNode(true);

clone.querySelector("h1").textContent = file.name;
clone.querySelector("li").id = objectURL;
clone.querySelector(".delete").dataset.target = objectURL;
clone.querySelector(".size").textContent =
  file.size > 1024
    ? file.size > 1048576
      ? Math.round(file.size / 1048576) + "mb"
      : Math.round(file.size / 1024) + "kb"
    : file.size + "b";

isImage &&
  Object.assign(clone.querySelector("img"), {
    src: objectURL,
    alt: file.name
  });

empty.classList.add("hidden");
target.prepend(clone);

FILES[objectURL] = file;
}

const gallery = document.getElementById("gallery"),
overlay = document.getElementById("overlay");

// click the hidden input of type file if the visible button is clicked
// and capture the selected files
const hidden = document.getElementById("hidden-input");
document.getElementById("button").onclick = () => hidden.click();
hidden.onchange = (e) => {
for (const file of e.target.files) {
  addFile(gallery, file);
}
};

// use to check if a file is being dragged
const hasFiles = ({ dataTransfer: { types = [] } }) =>
types.indexOf("Files") > -1;

// use to drag dragenter and dragleave events.
// this is to know if the outermost parent is dragged over
// without issues due to drag events on its children
let counter = 0;

// reset counter and append file to gallery when file is dropped
function dropHandler(ev) {
ev.preventDefault();
for (const file of ev.dataTransfer.files) {
  addFile(gallery, file);
  overlay.classList.remove("draggedover");
  counter = 0;
}
}

// only react to actual files being dragged
function dragEnterHandler(e) {
e.preventDefault();
if (!hasFiles(e)) {
  return;
}
++counter && overlay.classList.add("draggedover");
}

function dragLeaveHandler(e) {
1 > --counter && overlay.classList.remove("draggedover");
}

function dragOverHandler(e) {
if (hasFiles(e)) {
  e.preventDefault();
}
}

// event delegation to caputre delete events
// fron the waste buckets in the file preview cards
gallery.onclick = ({ target }) => {
if (target.classList.contains("delete")) {
  const ou = target.dataset.target;
  document.getElementById(ou).remove(ou);
  gallery.children.length === 1 && empty.classList.remove("hidden");
  delete FILES[ou];
}
};

// print all selected files
document.getElementById("submit").onclick = () => {
alert(`Submitted Files:\n${JSON.stringify(FILES)}`);
console.log(FILES);
};

// clear entire selection
document.getElementById("cancel").onclick = () => {
while (gallery.children.length > 0) {
  gallery.lastChild.remove();
}
FILES = {};
empty.classList.remove("hidden");
gallery.append(empty);
};

</script>

<style>
.hasImage:hover section {
background-color: rgba(5, 5, 5, 0.4);
}
.hasImage:hover button:hover {
background: rgba(5, 5, 5, 0.45);
}

#overlay p,
i {
opacity: 0;
}

#overlay.draggedover {
background-color: rgba(255, 255, 255, 0.7);
}
#overlay.draggedover p,
#overlay.draggedover i {
opacity: 1;
}

.group:hover .group-hover\:text-blue-800 {
color: #2b6cb0;
}
</style>

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

