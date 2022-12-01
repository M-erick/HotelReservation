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
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path
                                d="M20.42 4.58a5.4 5.4 0 0 0-7.65 0l-.77.78-.77-.78a5.4 5.4 0 0 0-7.65 0C1.46 6.7 1.33 10.28 4 13l8 8 8-8c2.67-2.72 2.54-6.3.42-8.42z">
                            </path>
                        </svg>
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
