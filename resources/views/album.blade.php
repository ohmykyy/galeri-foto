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
    <div>
        <div class="bg-white py-4 sm:py-6">
            <div class="mx-auto max-w-7xl px-6 lg:px-8">
                <div class="mx-auto w-full lg:mx-0">
                    <h2 style="color: Gray" class="text-3xl font-bold tracking-tight text-green-900 sm:text-4xl">
                        Taylor's Version Gallery
                    </h2>
                    <p class="mt-6 text-lg leading-8 text-gray-600">
                        Welcome To The Gallery
                    </p>

                </div>
                <ul role="list"
                    class="mx-auto mt-10 grid max-w-2xl grid-cols-1 gap-x-0 gap-y-0 sm:grid-cols-2 lg:mx-0 lg:max-w-none lg:grid-cols-3">
                    <li v-for="person in people" :key="person.name">
                        <ul role="list" class="mt-3 flex gap-x-3">
                            <div class="m-2 space-y-2">
                                <div class="group flex flex-col gap-1 rounded-lg p-5 text-gray" tabindex="1">
                                    <div style="width:320px;"
                                        class="group relative m-0 flex h-72 w-72 rounded-xl ring-gray-900/5 sm:mx-auto sm:max-w-lg">
                                        <div
                                            class="z-10 h-full w-full overflow-hidden rounded-xl border border-gray-200 opacity-80 transition duration-300 ease-in-out group-hover:opacity-100 dark:border-gray-700 dark:opacity-70">
                                            <img src="image/red.taylor.jpg"
                                                class="animate-fade-in block h-full w-full scale-100 transform object-cover object-center opacity-100 transition duration-300 group-hover:scale-110"
                                                alt="" />
                                        </div>
                                        <div style="background-color: Gray; width:70%;"
                                            class="p-3 rounded-xl opacity-60 absolute bottom-0 z-20 m-0 pb-4 ps-4 transition duration-300 ease-in-out group-hover:-translate-y-1 group-hover:translate-x-3 group-hover:scale-110 group-hover:opacity-100">
                                            <h1 class="text-lg font-bold text-white ">Red</h1>
                                            <h2 class="text-m font-light text-gray-200 ">(taylor's version)(From The Vault)</h2>
                                        </div>

                                    </div>
                                    <p class="pl-5 text-gray-400 hover:text-gray-500"><a target="_blank"
                                            <svg style="display: inline;" class="h-5 w-5" fill="currentColor"
                                                viewBox="0 0 20 20" aria-hidden="true">
                                                <path fill-rule="evenodd"
                                                    d="M16.338 16.338H13.67V12.16c0-.995-.017-2.277-1.387-2.277-1.39 0-1.601 1.086-1.601 2.207v4.248H8.014v-8.59h2.559v1.174h.037c.356-.675 1.227-1.387 2.526-1.387 2.703 0 3.203 1.778 3.203 4.092v4.711zM5.005 6.575a1.548 1.548 0 11-.003-3.096 1.548 1.548 0 01.003 3.096zm-1.337 9.763H6.34v-8.59H3.667v8.59zM17.668 1H2.328C1.595 1 1 1.581 1 2.298v15.403C1 18.418 1.595 19 2.328 19h15.34c.734 0 1.332-.582 1.332-1.299V2.298C19 1.581 18.402 1 17.668 1z"
                                                    clip-rule="evenodd" />
                                            </svg>&nbsp;<span style="font-size: .8em; font-style: italic;"></span>
                                        </a>
                                    </p>

                                    <div
                                        class="invisible h-auto max-h-0 p-5 items-center opacity-0 transition-all group-focus:visible group-focus:max-h-screen group-focus:opacity-100 group-focus:duration-1000">

                                        <p style="font-size: .9em;" v-html="This is all about John"></p>
                                    </div>
                                </div>
                            </div>
                        </ul>
                    </li>
                    <li v-for="person in people" :key="person.name">
                        <ul role="list" class="mt-3 flex gap-x-3">
                            <div class="m-2 space-y-2">
                                <div class="group flex flex-col gap-1 rounded-lg p-5 text-gray" tabindex="1">
                                    <div style="width:320px;"
                                        class="group relative m-0 flex h-72 w-72 rounded-xl ring-gray-900/5 sm:mx-auto sm:max-w-lg">
                                        <div
                                            class="z-10 h-full w-full overflow-hidden rounded-xl border border-gray-200 opacity-80 transition duration-300 ease-in-out group-hover:opacity-100 dark:border-gray-700 dark:opacity-70">
                                            <img src="image/taylor1989.jpg"
                                                class="animate-fade-in block h-full w-full scale-100 transform object-cover object-center opacity-100 transition duration-300 group-hover:scale-110"
                                                alt="" />
                                        </div>
                                        <div style="background-color: Gray; width:70%;"
                                            class="p-3 rounded-xl opacity-60 absolute bottom-0 z-20 m-0 pb-4 ps-4 transition duration-300 ease-in-out group-hover:-translate-y-1 group-hover:translate-x-3 group-hover:scale-110 group-hover:opacity-100">
                                            <h1 class="text-lg font-bold text-white ">1989</h1>
                                            <h2 class="text-m font-light text-gray-200 ">(Taylor's Version)</h2>
                                        </div>

                                    </div>
                                    <p class="pl-5 text-gray-400 hover:text-gray-500"><a target="_blank"
                                            <svg style="display: inline;" class="h-5 w-5" fill="currentColor"
                                                viewBox="0 0 20 20" aria-hidden="true">
                                                <path fill-rule="evenodd"
                                                    d="M16.338 16.338H13.67V12.16c0-.995-.017-2.277-1.387-2.277-1.39 0-1.601 1.086-1.601 2.207v4.248H8.014v-8.59h2.559v1.174h.037c.356-.675 1.227-1.387 2.526-1.387 2.703 0 3.203 1.778 3.203 4.092v4.711zM5.005 6.575a1.548 1.548 0 11-.003-3.096 1.548 1.548 0 01.003 3.096zm-1.337 9.763H6.34v-8.59H3.667v8.59zM17.668 1H2.328C1.595 1 1 1.581 1 2.298v15.403C1 18.418 1.595 19 2.328 19h15.34c.734 0 1.332-.582 1.332-1.299V2.298C19 1.581 18.402 1 17.668 1z"
                                                    clip-rule="evenodd" />
                                            </svg>&nbsp;<span style="font-size: .8em; font-style: italic;"></span>
                                        </a>
                                    </p>

                                    <div
                                        class="invisible h-auto max-h-0 p-5 items-center opacity-0 transition-all group-focus:visible group-focus:max-h-screen group-focus:opacity-100 group-focus:duration-1000">

                                        <p style="font-size: .9em;" v-html="This is all about John"></p>
                                    </div>
                                </div>
                            </div>
                        </ul>
                    </li>
                    <li v-for="person in people" :key="person.name">
                        <ul role="list" class="mt-3 flex gap-x-3">
                            <div class="m-2 space-y-2">
                                <div class="group flex flex-col gap-1 rounded-lg p-5 text-gray" tabindex="1">
                                    <div style="width:320px;"
                                        class="group relative m-0 flex h-72 w-72 rounded-xl ring-gray-900/5 sm:mx-auto sm:max-w-lg">
                                        <div
                                            class="z-10 h-full w-full overflow-hidden rounded-xl border border-gray-200 opacity-80 transition duration-300 ease-in-out group-hover:opacity-100 dark:border-gray-700 dark:opacity-70">
                                            <img src="image/taylor.fearless.jpg"
                                                class="animate-fade-in block h-full w-full scale-100 transform object-cover object-center opacity-100 transition duration-300 group-hover:scale-110"
                                                alt="" />
                                        </div>
                                        <div style="background-color: Gray; width:70%;"
                                            class="p-3 rounded-xl opacity-60 absolute bottom-0 z-20 m-0 pb-4 ps-4 transition duration-300 ease-in-out group-hover:-translate-y-1 group-hover:translate-x-3 group-hover:scale-110 group-hover:opacity-100">
                                            <h1 class="text-lg font-bold text-white ">Fearless</h1>
                                            <h2 class="text-m font-light text-gray-200 ">(Taylor's Version)</h2>
                                        </div>

                                    </div>
                                    <p class="pl-5 text-gray-400 hover:text-gray-500"><a target="_blank"
                                            <svg style="display: inline;" class="h-5 w-5" fill="currentColor"
                                                viewBox="0 0 20 20" aria-hidden="true">
                                                <path fill-rule="evenodd"
                                                    d="M16.338 16.338H13.67V12.16c0-.995-.017-2.277-1.387-2.277-1.39 0-1.601 1.086-1.601 2.207v4.248H8.014v-8.59h2.559v1.174h.037c.356-.675 1.227-1.387 2.526-1.387 2.703 0 3.203 1.778 3.203 4.092v4.711zM5.005 6.575a1.548 1.548 0 11-.003-3.096 1.548 1.548 0 01.003 3.096zm-1.337 9.763H6.34v-8.59H3.667v8.59zM17.668 1H2.328C1.595 1 1 1.581 1 2.298v15.403C1 18.418 1.595 19 2.328 19h15.34c.734 0 1.332-.582 1.332-1.299V2.298C19 1.581 18.402 1 17.668 1z"
                                                    clip-rule="evenodd" />
                                            </svg>&nbsp;<span style="font-size: .8em; font-style: italic;"></span>
                                        </a>
                                    </p>

                                    <div
                                        class="invisible h-auto max-h-0 p-5 items-center opacity-0 transition-all group-focus:visible group-focus:max-h-screen group-focus:opacity-100 group-focus:duration-1000">

                                        <p style="font-size: .9em;" v-html="This is all about John"></p>
                                    </div>
                                </div>
                            </div>
                        </ul>
                    </li>
                    <li v-for="person in people" :key="person.name">
                        <ul role="list" class="mt-3 flex gap-x-3">
                            <div class="m-2 space-y-2">
                                <div class="group flex flex-col gap-1 rounded-lg p-5 text-gray" tabindex="1">
                                    <div style="width:320px;"
                                        class="group relative m-0 flex h-72 w-72 rounded-xl ring-gray-900/5 sm:mx-auto sm:max-w-lg">
                                        <div
                                            class="z-10 h-full w-full overflow-hidden rounded-xl border border-gray-200 opacity-80 transition duration-300 ease-in-out group-hover:opacity-100 dark:border-gray-700 dark:opacity-70">
                                            <img src="image/taylor.lover.jpg"
                                                class="animate-fade-in block h-full w-full scale-100 transform object-cover object-center opacity-100 transition duration-300 group-hover:scale-110"
                                                alt="" />
                                        </div>
                                        <div style="background-color: Gray; width:70%;"
                                            class="p-3 rounded-xl opacity-60 absolute bottom-0 z-20 m-0 pb-4 ps-4 transition duration-300 ease-in-out group-hover:-translate-y-1 group-hover:translate-x-3 group-hover:scale-110 group-hover:opacity-100">
                                            <h1 class="text-lg font-bold text-white ">Lovers</h1>
                                            <h2 class="text-m font-light text-gray-200 ">(Taylor's Version)</h2>
                                        </div>

                                    </div>
                                    <p class="pl-5 text-gray-400 hover:text-gray-500"><a target="_blank"
                                            <svg style="display: inline;" class="h-5 w-5" fill="currentColor"
                                                viewBox="0 0 20 20" aria-hidden="true">
                                                <path fill-rule="evenodd"
                                                    d="M16.338 16.338H13.67V12.16c0-.995-.017-2.277-1.387-2.277-1.39 0-1.601 1.086-1.601 2.207v4.248H8.014v-8.59h2.559v1.174h.037c.356-.675 1.227-1.387 2.526-1.387 2.703 0 3.203 1.778 3.203 4.092v4.711zM5.005 6.575a1.548 1.548 0 11-.003-3.096 1.548 1.548 0 01.003 3.096zm-1.337 9.763H6.34v-8.59H3.667v8.59zM17.668 1H2.328C1.595 1 1 1.581 1 2.298v15.403C1 18.418 1.595 19 2.328 19h15.34c.734 0 1.332-.582 1.332-1.299V2.298C19 1.581 18.402 1 17.668 1z"
                                                    clip-rule="evenodd" />
                                            </svg>&nbsp;<span style="font-size: .8em; font-style: italic;"></span>
                                        </a>
                                    </p>

                                    <div
                                        class="invisible h-auto max-h-0 p-5 items-center opacity-0 transition-all group-focus:visible group-focus:max-h-screen group-focus:opacity-100 group-focus:duration-1000">

                                        <p style="font-size: .9em;" v-html="This is all about John"></p>
                                    </div>
                                </div>
                            </div>
                        </ul>
                    </li>
                    <li v-for="person in people" :key="person.name">
                        <ul role="list" class="mt-3 flex gap-x-3">
                            <div class="m-2 space-y-2">
                                <div class="group flex flex-col gap-1 rounded-lg p-5 text-gray" tabindex="1">
                                    <div style="width:320px;"
                                        class="group relative m-0 flex h-72 w-72 rounded-xl ring-gray-900/5 sm:mx-auto sm:max-w-lg">
                                        <div
                                            class="z-10 h-full w-full overflow-hidden rounded-xl border border-gray-200 opacity-80 transition duration-300 ease-in-out group-hover:opacity-100 dark:border-gray-700 dark:opacity-70">
                                            <img src="image/taylorfolklore.jpg"
                                                class="animate-fade-in block h-full w-full scale-100 transform object-cover object-center opacity-100 transition duration-300 group-hover:scale-110"
                                                alt="" />
                                        </div>
                                        <div style="background-color: Gray; width:70%;"
                                            class="p-3 rounded-xl opacity-60 absolute bottom-0 z-20 m-0 pb-4 ps-4 transition duration-300 ease-in-out group-hover:-translate-y-1 group-hover:translate-x-3 group-hover:scale-110 group-hover:opacity-100">
                                            <h1 class="text-lg font-bold text-white ">Folklore</h1>
                                            <h2 class="text-m font-light text-gray-200 ">Taylor Swift</h2>
                                        </div>

                                    </div>
                                    <p class="pl-5 text-gray-400 hover:text-gray-500"><a target="_blank"
                                            <svg style="display: inline;" class="h-5 w-5" fill="currentColor"
                                                viewBox="0 0 20 20" aria-hidden="true">
                                                <path fill-rule="evenodd"
                                                    d="M16.338 16.338H13.67V12.16c0-.995-.017-2.277-1.387-2.277-1.39 0-1.601 1.086-1.601 2.207v4.248H8.014v-8.59h2.559v1.174h.037c.356-.675 1.227-1.387 2.526-1.387 2.703 0 3.203 1.778 3.203 4.092v4.711zM5.005 6.575a1.548 1.548 0 11-.003-3.096 1.548 1.548 0 01.003 3.096zm-1.337 9.763H6.34v-8.59H3.667v8.59zM17.668 1H2.328C1.595 1 1 1.581 1 2.298v15.403C1 18.418 1.595 19 2.328 19h15.34c.734 0 1.332-.582 1.332-1.299V2.298C19 1.581 18.402 1 17.668 1z"
                                                    clip-rule="evenodd" />
                                            </svg>&nbsp;<span style="font-size: .8em; font-style: italic;"></span>
                                        </a>
                                    </p>

                                    <div
                                        class="invisible h-auto max-h-0 p-5 items-center opacity-0 transition-all group-focus:visible group-focus:max-h-screen group-focus:opacity-100 group-focus:duration-1000">

                                        <p style="font-size: .9em;" v-html="This is all about John"></p>
                                    </div>
                                </div>
                            </div>
                        </ul>
                    </li>
                    <li v-for="person in people" :key="person.name">
                        <ul role="list" class="mt-3 flex gap-x-3">
                            <div class="m-2 space-y-2">
                                <div class="group flex flex-col gap-1 rounded-lg p-5 text-gray" tabindex="1">
                                    <div style="width:320px;"
                                        class="group relative m-0 flex h-72 w-72 rounded-xl ring-gray-900/5 sm:mx-auto sm:max-w-lg">
                                        <div
                                            class="z-10 h-full w-full overflow-hidden rounded-xl border border-gray-200 opacity-80 transition duration-300 ease-in-out group-hover:opacity-100 dark:border-gray-700 dark:opacity-70">
                                            <img src="image/reputation.jpg"
                                                class="animate-fade-in block h-full w-full scale-100 transform object-cover object-center opacity-100 transition duration-300 group-hover:scale-110"
                                                alt="" />
                                        </div>
                                        <div style="background-color: Gray; width:70%;"
                                            class="p-3 rounded-xl opacity-60 absolute bottom-0 z-20 m-0 pb-4 ps-4 transition duration-300 ease-in-out group-hover:-translate-y-1 group-hover:translate-x-3 group-hover:scale-110 group-hover:opacity-100">
                                            <h1 class="text-lg font-bold text-white ">Reputation</h1>
                                            <h2 class="text-m font-light text-gray-200 ">(Taylor Swift)</h2>
                                        </div>

                                    </div>
                                    <p class="pl-5 text-gray-400 hover:text-gray-500"><a target="_blank"
                                            <svg style="display: inline;" class="h-5 w-5" fill="currentColor"
                                                viewBox="0 0 20 20" aria-hidden="true">
                                                <path fill-rule="evenodd"
                                                    d="M16.338 16.338H13.67V12.16c0-.995-.017-2.277-1.387-2.277-1.39 0-1.601 1.086-1.601 2.207v4.248H8.014v-8.59h2.559v1.174h.037c.356-.675 1.227-1.387 2.526-1.387 2.703 0 3.203 1.778 3.203 4.092v4.711zM5.005 6.575a1.548 1.548 0 11-.003-3.096 1.548 1.548 0 01.003 3.096zm-1.337 9.763H6.34v-8.59H3.667v8.59zM17.668 1H2.328C1.595 1 1 1.581 1 2.298v15.403C1 18.418 1.595 19 2.328 19h15.34c.734 0 1.332-.582 1.332-1.299V2.298C19 1.581 18.402 1 17.668 1z"
                                                    clip-rule="evenodd" />
                                            </svg>&nbsp;<span style="font-size: .8em; font-style: italic;"></span>
                                        </a>
                                    </p>

                                    <div
                                        class="invisible h-auto max-h-0 p-5 items-center opacity-0 transition-all group-focus:visible group-focus:max-h-screen group-focus:opacity-100 group-focus:duration-1000">

                                        <p style="font-size: .9em;" v-html="This is all about John"></p>
                                    </div>
                                </div>
                            </div>
                        </ul>
                    </li>
                    <li v-for="person in people" :key="person.name">
                        <ul role="list" class="mt-3 flex gap-x-3">
                            <div class="m-2 space-y-2">
                                <div class="group flex flex-col gap-1 rounded-lg p-5 text-gray" tabindex="1">
                                    <div style="width:320px;"
                                        class="group relative m-0 flex h-72 w-72 rounded-xl ring-gray-900/5 sm:mx-auto sm:max-w-lg">
                                        <div
                                            class="z-10 h-full w-full overflow-hidden rounded-xl border border-gray-200 opacity-80 transition duration-300 ease-in-out group-hover:opacity-100 dark:border-gray-700 dark:opacity-70">
                                            <img src="image/speaknowtaylor.jpg"
                                                class="animate-fade-in block h-full w-full scale-100 transform object-cover object-center opacity-100 transition duration-300 group-hover:scale-110"
                                                alt="" />
                                        </div>
                                        <div style="background-color: Gray; width:70%;"
                                            class="p-3 rounded-xl opacity-60 absolute bottom-0 z-20 m-0 pb-4 ps-4 transition duration-300 ease-in-out group-hover:-translate-y-1 group-hover:translate-x-3 group-hover:scale-110 group-hover:opacity-100">
                                            <h1 class="text-lg font-bold text-white ">Speak Now</h1>
                                            <h2 class="text-m font-light text-gray-200 ">(Taylo's version)</h2>
                                        </div>

                                    </div>
                                    <p class="pl-5 text-gray-400 hover:text-gray-500"><a target="_blank"
                                            <svg style="display: inline;" class="h-5 w-5" fill="currentColor"
                                                viewBox="0 0 20 20" aria-hidden="true">
                                                <path fill-rule="evenodd"
                                                    d="M16.338 16.338H13.67V12.16c0-.995-.017-2.277-1.387-2.277-1.39 0-1.601 1.086-1.601 2.207v4.248H8.014v-8.59h2.559v1.174h.037c.356-.675 1.227-1.387 2.526-1.387 2.703 0 3.203 1.778 3.203 4.092v4.711zM5.005 6.575a1.548 1.548 0 11-.003-3.096 1.548 1.548 0 01.003 3.096zm-1.337 9.763H6.34v-8.59H3.667v8.59zM17.668 1H2.328C1.595 1 1 1.581 1 2.298v15.403C1 18.418 1.595 19 2.328 19h15.34c.734 0 1.332-.582 1.332-1.299V2.298C19 1.581 18.402 1 17.668 1z"
                                                    clip-rule="evenodd" />
                                            </svg>&nbsp;<span style="font-size: .8em; font-style: italic;"></span>
                                        </a>
                                    </p>

                                    <div
                                        class="invisible h-auto max-h-0 p-5 items-center opacity-0 transition-all group-focus:visible group-focus:max-h-screen group-focus:opacity-100 group-focus:duration-1000">

                                        <p style="font-size: .9em;" v-html="This is all about John"></p>
                                    </div>
                                </div>
                            </div>
                        </ul>
                    </li>
                    <li v-for="person in people" :key="person.name">
                        <ul role="list" class="mt-3 flex gap-x-3">
                            <div class="m-2 space-y-2">
                                <div class="group flex flex-col gap-1 rounded-lg p-5 text-gray" tabindex="1">
                                    <div style="width:320px;"
                                        class="group relative m-0 flex h-72 w-72 rounded-xl ring-gray-900/5 sm:mx-auto sm:max-w-lg">
                                        <div
                                            class="z-10 h-full w-full overflow-hidden rounded-xl border border-gray-200 opacity-80 transition duration-300 ease-in-out group-hover:opacity-100 dark:border-gray-700 dark:opacity-70">
                                            <img src="image/taylorwsift1.jpg"
                                                class="animate-fade-in block h-full w-full scale-100 transform object-cover object-center opacity-100 transition duration-300 group-hover:scale-110"
                                                alt="" />
                                        </div>
                                        <div style="background-color: Gray; width:70%;"
                                            class="p-3 rounded-xl opacity-60 absolute bottom-0 z-20 m-0 pb-4 ps-4 transition duration-300 ease-in-out group-hover:-translate-y-1 group-hover:translate-x-3 group-hover:scale-110 group-hover:opacity-100">
                                            <h1 class="text-lg font-bold text-white ">Taylor Swift</h1>
                                            <h2 class="text-m font-light text-gray-200 ">(1st Album Debut)</h2>
                                        </div>

                                    </div>
                                    <p class="pl-5 text-gray-400 hover:text-gray-500"><a target="_blank"
                                            <svg style="display: inline;" class="h-5 w-5" fill="currentColor"
                                                viewBox="0 0 20 20" aria-hidden="true">
                                                <path fill-rule="evenodd"
                                                    d="M16.338 16.338H13.67V12.16c0-.995-.017-2.277-1.387-2.277-1.39 0-1.601 1.086-1.601 2.207v4.248H8.014v-8.59h2.559v1.174h.037c.356-.675 1.227-1.387 2.526-1.387 2.703 0 3.203 1.778 3.203 4.092v4.711zM5.005 6.575a1.548 1.548 0 11-.003-3.096 1.548 1.548 0 01.003 3.096zm-1.337 9.763H6.34v-8.59H3.667v8.59zM17.668 1H2.328C1.595 1 1 1.581 1 2.298v15.403C1 18.418 1.595 19 2.328 19h15.34c.734 0 1.332-.582 1.332-1.299V2.298C19 1.581 18.402 1 17.668 1z"
                                                    clip-rule="evenodd" />
                                            </svg>&nbsp;<span style="font-size: .8em; font-style: italic;"></span>
                                        </a>
                                    </p>

                                    <div
                                        class="invisible h-auto max-h-0 p-5 items-center opacity-0 transition-all group-focus:visible group-focus:max-h-screen group-focus:opacity-100 group-focus:duration-1000">

                                        <p style="font-size: .9em;" v-html="This is all about John"></p>
                                    </div>
                                </div>
                            </div>
                        </ul>
                    </li>
                    <li v-for="person in people" :key="person.name">
                        <ul role="list" class="mt-3 flex gap-x-3">
                            <div class="m-2 space-y-2">
                                <div class="group flex flex-col gap-1 rounded-lg p-5 text-gray" tabindex="1">
                                    <div style="width:320px;"
                                        class="group relative m-0 flex h-72 w-72 rounded-xl ring-gray-900/5 sm:mx-auto sm:max-w-lg">
                                        <div
                                            class="z-10 h-full w-full overflow-hidden rounded-xl border border-gray-200 opacity-80 transition duration-300 ease-in-out group-hover:opacity-100 dark:border-gray-700 dark:opacity-70">
                                            <img src="image/thetortured.jpg"
                                                class="animate-fade-in block h-full w-full scale-100 transform object-cover object-center opacity-100 transition duration-300 group-hover:scale-110"
                                                alt="" />
                                        </div>
                                        <div style="background-color: Gray; width:70%;"
                                            class="p-3 rounded-xl opacity-60 absolute bottom-0 z-20 m-0 pb-4 ps-4 transition duration-300 ease-in-out group-hover:-translate-y-1 group-hover:translate-x-3 group-hover:scale-110 group-hover:opacity-100">
                                            <h1 class="text-lg font-bold text-white ">The Tortured Poets Departemen The Anthology</h1>
                                            <h2 class="text-m font-light text-gray-200 ">(Taylor Swift)</h2>
                                        </div>

                                    </div>
                                    <p class="pl-5 text-gray-400 hover:text-gray-500"><a target="_blank"

                                            <svg style="display: inline;" class="h-5 w-5" fill="currentColor"
                                                viewBox="0 0 20 20" aria-hidden="true">
                                                <path fill-rule="evenodd"
                                                    d="M16.338 16.338H13.67V12.16c0-.995-.017-2.277-1.387-2.277-1.39 0-1.601 1.086-1.601 2.207v4.248H8.014v-8.59h2.559v1.174h.037c.356-.675 1.227-1.387 2.526-1.387 2.703 0 3.203 1.778 3.203 4.092v4.711zM5.005 6.575a1.548 1.548 0 11-.003-3.096 1.548 1.548 0 01.003 3.096zm-1.337 9.763H6.34v-8.59H3.667v8.59zM17.668 1H2.328C1.595 1 1 1.581 1 2.298v15.403C1 18.418 1.595 19 2.328 19h15.34c.734 0 1.332-.582 1.332-1.299V2.298C19 1.581 18.402 1 17.668 1z"
                                                    clip-rule="evenodd" />
                                            </svg>&nbsp;<span style="font-size: .8em; font-style: italic;"></span>
                                        </a>
                                    </p>

                                    <div
                                        class="invisible h-auto max-h-0 p-5 items-center opacity-0 transition-all group-focus:visible group-focus:max-h-screen group-focus:opacity-100 group-focus:duration-1000">

                                        <p style="font-size: .9em;" v-html="This is all about John"></p>
                                    </div>
                                </div>
                            </div>
                        </ul>
                    </li>
                    <li v-for="person in people" :key="person.name">
                        <ul role="list" class="mt-3 flex gap-x-3">
                            <div class="m-2 space-y-2">
                                <div class="group flex flex-col gap-1 rounded-lg p-5 text-gray" tabindex="1">
                                    <div style="width:320px;"
                                        class="group relative m-0 flex h-72 w-72 rounded-xl ring-gray-900/5 sm:mx-auto sm:max-w-lg">
                                        <div
                                            class="z-10 h-full w-full overflow-hidden rounded-xl border border-gray-200 opacity-80 transition duration-300 ease-in-out group-hover:opacity-100 dark:border-gray-700 dark:opacity-70">
                                            <img src="image/thislove.jpg"
                                                class="animate-fade-in block h-full w-full scale-100 transform object-cover object-center opacity-100 transition duration-300 group-hover:scale-110"
                                                alt="" />
                                        </div>
                                        <div style="background-color: Gray; width:70%;"
                                            class="p-3 rounded-xl opacity-60 absolute bottom-0 z-20 m-0 pb-4 ps-4 transition duration-300 ease-in-out group-hover:-translate-y-1 group-hover:translate-x-3 group-hover:scale-110 group-hover:opacity-100">
                                            <h1 class="text-lg font-bold text-white ">This Love</h1>
                                            <h2 class="text-m font-light text-gray-200 ">(Taylor's Version)</h2>
                                        </div>

                                    </div>
                                    <p class="pl-5 text-gray-400 hover:text-gray-500"><a target="_blank"
                                            <svg style="display: inline;" class="h-5 w-5" fill="currentColor"
                                                viewBox="0 0 20 20" aria-hidden="true">
                                                <path fill-rule="evenodd"
                                                    d="M16.338 16.338H13.67V12.16c0-.995-.017-2.277-1.387-2.277-1.39 0-1.601 1.086-1.601 2.207v4.248H8.014v-8.59h2.559v1.174h.037c.356-.675 1.227-1.387 2.526-1.387 2.703 0 3.203 1.778 3.203 4.092v4.711zM5.005 6.575a1.548 1.548 0 11-.003-3.096 1.548 1.548 0 01.003 3.096zm-1.337 9.763H6.34v-8.59H3.667v8.59zM17.668 1H2.328C1.595 1 1 1.581 1 2.298v15.403C1 18.418 1.595 19 2.328 19h15.34c.734 0 1.332-.582 1.332-1.299V2.298C19 1.581 18.402 1 17.668 1z"
                                                    clip-rule="evenodd" />
                                            </svg>&nbsp;<span style="font-size: .8em; font-style: italic;"></span>
                                        </a>
                                    </p>

                                    <div
                                        class="invisible h-auto max-h-0 p-5 items-center opacity-0 transition-all group-focus:visible group-focus:max-h-screen group-focus:opacity-100 group-focus:duration-1000">

                                        <p style="font-size: .9em;" v-html="This is all about John"></p>
                                    </div>
                                </div>
                            </div>
                        </ul>
                    </li>
                    <li v-for="person in people" :key="person.name">
                        <ul role="list" class="mt-3 flex gap-x-3">
                            <div class="m-2 space-y-2">
                                <div class="group flex flex-col gap-1 rounded-lg p-5 text-gray" tabindex="1">
                                    <div style="width:320px;"
                                        class="group relative m-0 flex h-72 w-72 rounded-xl ring-gray-900/5 sm:mx-auto sm:max-w-lg">
                                        <div
                                            class="z-10 h-full w-full overflow-hidden rounded-xl border border-gray-200 opacity-80 transition duration-300 ease-in-out group-hover:opacity-100 dark:border-gray-700 dark:opacity-70">
                                            <img src="image/evermoretaylor.jpg"
                                                class="animate-fade-in block h-full w-full scale-100 transform object-cover object-center opacity-100 transition duration-300 group-hover:scale-110"
                                                alt="" />
                                        </div>
                                        <div style="background-color: Gray; width:70%;"
                                            class="p-3 rounded-xl opacity-60 absolute bottom-0 z-20 m-0 pb-4 ps-4 transition duration-300 ease-in-out group-hover:-translate-y-1 group-hover:translate-x-3 group-hover:scale-110 group-hover:opacity-100">
                                            <h1 class="text-lg font-bold text-white ">Evermore</h1>
                                            <h2 class="text-m font-light text-gray-200 ">(deluxe version)</h2>
                                        </div>

                                    </div>
                                    <p class="pl-5 text-gray-400 hover:text-gray-500"><a target="_blank"
                                            <svg style="display: inline;" class="h-5 w-5" fill="currentColor"
                                                viewBox="0 0 20 20" aria-hidden="true">
                                                <path fill-rule="evenodd"
                                                    d="M16.338 16.338H13.67V12.16c0-.995-.017-2.277-1.387-2.277-1.39 0-1.601 1.086-1.601 2.207v4.248H8.014v-8.59h2.559v1.174h.037c.356-.675 1.227-1.387 2.526-1.387 2.703 0 3.203 1.778 3.203 4.092v4.711zM5.005 6.575a1.548 1.548 0 11-.003-3.096 1.548 1.548 0 01.003 3.096zm-1.337 9.763H6.34v-8.59H3.667v8.59zM17.668 1H2.328C1.595 1 1 1.581 1 2.298v15.403C1 18.418 1.595 19 2.328 19h15.34c.734 0 1.332-.582 1.332-1.299V2.298C19 1.581 18.402 1 17.668 1z"
                                                    clip-rule="evenodd" />
                                            </svg>&nbsp;<span style="font-size: .8em; font-style: italic;"></span>
                                        </a>
                                    </p>

                                    <div
                                        class="invisible h-auto max-h-0 p-5 items-center opacity-0 transition-all group-focus:visible group-focus:max-h-screen group-focus:opacity-100 group-focus:duration-1000">

                                        <p style="font-size: .9em;" v-html="This is all about John"></p>
                                    </div>
                                </div>
                            </div>
                        </ul>
                    </li>
                    <li v-for="person in people" :key="person.name">
                        <ul role="list" class="mt-3 flex gap-x-3">
                            <div class="m-2 space-y-2">
                                <div class="group flex flex-col gap-1 rounded-lg p-5 text-gray" tabindex="1">
                                    <div style="width:320px;"
                                        class="group relative m-0 flex h-72 w-72 rounded-xl ring-gray-900/5 sm:mx-auto sm:max-w-lg">
                                        <div
                                            class="z-10 h-full w-full overflow-hidden rounded-xl border border-gray-200 opacity-80 transition duration-300 ease-in-out group-hover:opacity-100 dark:border-gray-700 dark:opacity-70">
                                            <img src="image/TsDeluxe.jpg"
                                                class="animate-fade-in block h-full w-full scale-100 transform object-cover object-center opacity-100 transition duration-300 group-hover:scale-110"
                                                alt="" />
                                        </div>
                                        <div style="background-color: Gray; width:70%;"
                                            class="p-3 rounded-xl opacity-60 absolute bottom-0 z-20 m-0 pb-4 ps-4 transition duration-300 ease-in-out group-hover:-translate-y-1 group-hover:translate-x-3 group-hover:scale-110 group-hover:opacity-100">
                                            <h1 class="text-lg font-bold text-white ">1989</h1>
                                            <h2 class="text-m font-light text-gray-200 ">(deluxe)</h2>
                                        </div>

                                    </div>
                                    <p class="pl-5 text-gray-400 hover:text-gray-500"><a target="_blank"
                                            <svg style="display: inline;" class="h-5 w-5" fill="currentColor"
                                                viewBox="0 0 20 20" aria-hidden="true">
                                                <path fill-rule="evenodd"
                                                    d="M16.338 16.338H13.67V12.16c0-.995-.017-2.277-1.387-2.277-1.39 0-1.601 1.086-1.601 2.207v4.248H8.014v-8.59h2.559v1.174h.037c.356-.675 1.227-1.387 2.526-1.387 2.703 0 3.203 1.778 3.203 4.092v4.711zM5.005 6.575a1.548 1.548 0 11-.003-3.096 1.548 1.548 0 01.003 3.096zm-1.337 9.763H6.34v-8.59H3.667v8.59zM17.668 1H2.328C1.595 1 1 1.581 1 2.298v15.403C1 18.418 1.595 19 2.328 19h15.34c.734 0 1.332-.582 1.332-1.299V2.298C19 1.581 18.402 1 17.668 1z"
                                                    clip-rule="evenodd" />
                                            </svg>&nbsp;<span style="font-size: .8em; font-style: italic;"></span>
                                        </a>
                                    </p>

                                    <div
                                        class="invisible h-auto max-h-0 p-5 items-center opacity-0 transition-all group-focus:visible group-focus:max-h-screen group-focus:opacity-100 group-focus:duration-1000">

                                        <p style="font-size: .9em;" v-html="This is all about John"></p>
                                    </div>
                                </div>
                            </div>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
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
