<x-app-layout>
    {{-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot> --}}

    {{-- <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <x-jet-welcome />
            </div>
        </div>
    </div> --}}
    <!-- component -->
    <style>
        @import url('https://fonts.googleapis.com/css2?family=PT+Sans:ital,wght@0,400;0,700;1,400;1,700&display=swap');

        html {
            font-family: "PT Sans", sans-serif;
        }
    </style>
    <div class="flex items-center justify-center min-h-screen bg-gray-200 antialiased">
        <div class="flex flex-col shadow-xl bg-white ">
            <div class="flex flex-col">


                {{-- Work on Search bar  --}}
                <form>
                    <label for="default-search"
                        class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-gray-300">Search</label>
                    <div class="relative">
                        <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                            <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                            </svg>
                        </div>
                        <input type="search" id="default-search"
                            class="block p-4 pl-10 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="Search Mockups, Logos..." required>
                        <button type="submit"
                            class="text-white absolute right-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Search</button>
                    </div>
                </form>

                <div class="mx-5 mt-5">
                    <img class="rounded-lg bg-cover" src="{{ URL('/images/display04.jpg') }}" alt="">
                    <div class="flex flex-row justify-between items-start mt-4">
                        <div>
                            <p class="text-sm text-gray-800 font-bold">Nairobi</p>
                            <p class="text-sm text-gray-800">49 kilometers away</p>
                            <p class="text-sm text-gray-800">Aug 18-25</p>
                            <p class="text-sm text-gray-800 mt-2"> <strong>$2,135</strong> night</p>
                        </div>
                        <div class="flex flex-row items-center">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                </path>
                            </svg>
                            <p class="text-sm">4,92</p>
                        </div>
                    </div>
                </div>
                <div class="mx-5 mt-5">
                    <img class="rounded-lg bg-cover" src="{{ URL('/images/display01.jpg') }}" alt="">
                    <div class="flex flex-row justify-between items-start mt-4">
                        <div>
                            <p class="text-sm text-gray-800 font-bold">Nairobi</p>

                            <p class="text-sm text-gray-800">49 kilometers away</p>
                            <p class="text-sm text-gray-800">Aug 18-25</p>
                            <p class="text-sm text-gray-800 mt-2"> <strong>$2,135</strong> night</p>
                        </div>
                        <div class="flex flex-row items-center">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                </path>
                            </svg>
                            <p class="text-sm">4,92</p>
                        </div>
                    </div>
                </div>
                <div class="mx-5 mt-5">
                    <img class="rounded-lg bg-cover" src="{{ URL('/images/display03.jpg') }}" alt="">
                    <div class="flex flex-row justify-between items-start mt-4">
                        <div>
                            <p class="text-sm text-gray-800 font-bold">Nairobi</p>

                            <p class="text-sm text-gray-800">49 kilometers away</p>
                            <p class="text-sm text-gray-800">Aug 18-25</p>
                            <p class="text-sm text-gray-800 mt-2"> <strong>$2,135</strong> night</p>
                        </div>
                        <div class="flex flex-row items-center">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                </path>
                            </svg>
                            <p class="text-sm">4,92</p>
                        </div>
                    </div>
                </div>
                <div
                    class="sticky pt-2 pb-4 bg-white bottom-0 flex flex-row justify-between px-5 border-t border-gray-300">
                    <div class="flex-col flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 text-red-500" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round">
                            <circle cx="11" cy="11" r="8"></circle>
                            <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                        </svg>
                        <p class="text-xxsm font-semibold text-gray-800">Explore</p>
                    </div>
                    <div class="flex-col flex items-center text-gray-400">
                        <!-- icon666.com - MILLIONS vector ICONS FREE --><svg viewBox="-27 0 512 512.00001" xmlns="http://www.w3.org/2000/svg" class="h-5">
                            <path d="m399.996094 0h-341.996094c-31.980469 0-58 26.019531-58 58v369.996094c0 16.542968 13.457031 30 30 30h131.332031c5.523438 0 10-4.476563 10-10 0-5.523438-4.476562-10-10-10h-131.332031c-5.515625 0-10-4.484375-10-10v-369.996094c0-20.953125 17.046875-38 38-38h298.234375c-8.855469 10.1875-14.238281 23.472656-14.238281 38v322.265625c0 9.226563-7.503906 16.730469-16.730469 16.730469-7.210937 0-13.589844-4.597656-15.875-11.4375l-15.070313-45.21875c-4.253906-12.765625-16.15625-21.339844-29.609374-21.339844-17.210938 0-31.210938 14-31.210938 31.207031v7.789063h-51.832031c-5.523438 0-10 4.480468-10 10 0 5.523437 4.476562 10 10 10h51.832031v49.75c0 14.765625 2.878906 29.164062 8.558594 42.789062l14.710937 35.308594c1.601563 3.839844 5.316407 6.15625 9.234375 6.15625 1.28125 0 2.585938-.246094 3.839844-.769531 5.101562-2.125 7.511719-7.980469 5.386719-13.078125l-14.710938-35.308594c-4.65625-11.175781-7.019531-22.984375-7.019531-35.09375v-77.539062c0-6.183594 5.027344-11.210938 11.210938-11.210938 4.832031 0 9.109374 3.078125 10.636718 7.664062l15.070313 45.21875c5.007812 15.019532 19.011719 25.113282 34.847656 25.113282 20.253906 0 36.730469-16.476563 36.730469-36.730469v-171.449219l13.363281 13.335938c23.84375 23.796875 36.972656 55.457031 36.972656 89.140625v106.300781c0 27.535156-6.238281 55.238281-18.035156 80.117188-2.367187 4.988281-.238281 10.953124 4.75 13.320312s10.953125.242188 13.320313-4.75c13.058593-27.539062 19.964843-58.207031 19.964843-88.6875v-106.300781c0-39.035157-15.214843-75.71875-42.84375-103.296875l-27.492187-27.441406v-9.554688h66c16.542968 0 30-13.457031 30-30v-83c0-31.980469-26.015625-58-58-58zm38 141c0 5.511719-4.484375 10-10 10h-66v-93c0-20.953125 17.046875-38 38-38s38 17.046875 38 38zm0 0"/><path d="m205 437.996094c-2.632812 0-5.210938 1.070312-7.070312 2.929687-1.859376 1.863281-2.929688 4.441407-2.929688 7.070313 0 2.632812 1.070312 5.210937 2.929688 7.070312 1.859374 1.859375 4.4375 2.929688 7.070312 2.929688 2.628906 0 5.207031-1.070313 7.070312-2.929688 1.859376-1.859375 2.929688-4.4375 2.929688-7.070312 0-2.628906-1.070312-5.207032-2.929688-7.070313-1.863281-1.859375-4.441406-2.929687-7.070312-2.929687zm0 0"/><path d="m137.667969 74c0-11.027344-8.972657-20-20-20h-44c-11.03125 0-20 8.972656-20 20v44c0 11.027344 8.96875 20 20 20h44c11.027343 0 20-8.972656 20-20zm-20 44h-44v-44h44l.011719 44s-.003907 0-.011719 0zm0 0"/><path d="m137.667969 194c0-11.027344-8.972657-20-20-20h-44c-11.03125 0-20 8.972656-20 20v44c0 11.027344 8.96875 20 20 20h44c11.027343 0 20-8.972656 20-20zm-20 44h-44v-44h44l.011719 44s-.003907 0-.011719 0zm0 0"/><path d="m117.667969 294h-44c-11.03125 0-20 8.96875-20 20v43.996094c0 11.03125 8.96875 20 20 20h44c11.027343 0 20-8.96875 20-20v-43.996094c0-11.03125-8.972657-20-20-20zm0 63.996094h-44v-43.996094h44l.011719 43.996094s-.003907 0-.011719 0zm0 0"/><path d="m296.332031 138c5.523438 0 10-4.476562 10-10s-4.476562-10-10-10h-68.9375c-5.523437 0-10 4.476562-10 10s4.476563 10 10 10zm0 0"/><path d="m181.667969 138c2.632812 0 5.210937-1.070312 7.070312-2.929688 1.859375-1.859374 2.929688-4.441406 2.929688-7.070312s-1.070313-5.210938-2.929688-7.070312c-1.859375-1.859376-4.4375-2.929688-7.070312-2.929688-2.640625 0-5.210938 1.070312-7.070313 2.929688-1.867187 1.859374-2.929687 4.441406-2.929687 7.070312s1.0625 5.210938 2.929687 7.070312c1.859375 1.859376 4.429688 2.929688 7.070313 2.929688zm0 0"/>
                            <path d="m181.664062 258h114.667969c5.523438 0 10-4.476562 10-10s-4.476562-10-10-10h-114.667969c-5.519531 0-10 4.476562-10 10s4.480469 10 10 10zm0 0"/></svg>
                        <p class="text-xxsm font-regular">ToDolists</p>
                    </div>
                    <div class="flex-col flex items-center text-gray-400">
                        <!-- icon666.com - MILLIONS vector ICONS FREE --><svg id="Icon" enable-background="new 0 0 96 96" viewBox="0 0 96 96" class="h-5"
                         xmlns="http://www.w3.org/2000/svg">
                            <path id="Chat_1_" d="m82 33h-14v12c0 7.72-6.28 14-14 14h-16v4c0 5.514 4.486 10 10 10h15.172l11.414 11.414c.383.383.893.586 1.414.586.258 0 .518-.05.766-.152.747-.31 1.234-1.039 1.234-1.848v-10h4c5.514 0 10-4.486 10-10v-20c0-5.514-4.486-10-10-10zm-4 30h-12c-1.104 0-2-.896-2-2s.896-2 2-2h12c1.104 0 2 .896 2 2s-.896 2-2 2zm0-8h-6c-1.104 0-2-.896-2-2s.896-2 2-2h6c1.104 0 2 .896 2 2s-.896 2-2 2zm0-8h-4c-1.104 0-2-.896-2-2s.896-2 2-2h4c1.104 0 2 .896 2 2s-.896 2-2 2zm-24-36h-40c-5.514 0-10 4.486-10 10v24c0 5.514 4.486 10 10 10h4v12c0 .809.487 1.538 1.234 1.848.248.102.508.152.766.152.521 0 1.031-.203 1.414-.586l13.414-13.414h19.172c5.514 0 10-4.486 10-10v-24c0-5.514-4.486-10-10-10zm-4 32h-32c-1.104 0-2-.896-2-2s.896-2 2-2h32c1.104 0 2 .896 2 2s-.896 2-2 2zm0-8h-32c-1.104 0-2-.896-2-2s.896-2 2-2h32c1.104 0 2 .896 2 2s-.896 2-2 2zm0-8h-32c-1.104 0-2-.896-2-2s.896-2 2-2h32c1.104 0 2 .896 2 2s-.896 2-2 2z"/></svg>
                        <p class="text-xxsm font-regular">Messaging</p>
                    </div>
                    <div class="flex-col flex items-center text-gray-400">
                        <!-- icon666.com - MILLIONS vector ICONS FREE -->
                        <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg"  class="h-5"
                        xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 336.054 336.054" style="enable-background:new 0 0 336.054 336.054;" xml:space="preserve"><g><g><path d="M328.797,156.976v-0.04l-143.24-143.24c-9.69-9.641-25.35-9.641-35.04,0L7.277,156.936 c-9.687,9.665-9.705,25.353-0.04,35.04s25.353,9.705,35.04,0.04l125.76-125.8l125.72,125.8c9.676,9.676,25.364,9.676,35.04,0 S338.473,166.652,328.797,156.976z"/></g></g><g><g>
                            <path d="M167.957,82.216l-115.92,116v115.32c0.432,9.218,8.219,16.362,17.44,16h47.52c2.209,0,4-1.791,4-4v-77.88 c0.003-25.979,21.066-47.037,47.046-47.034c25.975,0.003,47.031,21.059,47.034,47.034v77.92c0,2.209,1.791,4,4,4h47.44 c9.221,0.362,17.008-6.782,17.44-16v-115.36L167.957,82.216z"/></g></g></svg>
                        <p class="text-xxsm font-regular">About Us</p>
                    </div>


                </div>
                <style>
                    .text-xxsm {
                        font-size: 10px;
                    }
                </style>

            </div>
        </div>
    </div>
</x-app-layout>
