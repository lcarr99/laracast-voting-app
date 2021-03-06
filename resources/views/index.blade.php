<x-app-layout>
    <div class="filters flex space-x-6">
        <div class="w-1/3">
            <select name="category" id="category" class="w-full rounded-xl border-none px-4 py-2">
                <option value="1">Category 1</option>
                <option value="2">Category 2</option>
                <option value="3">Category 3</option>
                <option value="4">Category 4</option>
            </select>
        </div>

        <div class="w-1/3">
            <select name="filters" id="filters" class="w-full rounded-xl border-none px-4 py-2">
                <option value="1">Filter 1</option>
                <option value="2">Filter 2</option>
                <option value="3">Filter 3</option>
                <option value="4">Filter 4</option>
            </select>
        </div>

        <div class="w-2/3 relative">
            <input type="search" name="search" id="search" placeholder="Find an Idea" class="w-full rounded-xl placeholder-gray-700 bg-white px-4 border-none py-2 pl-8">
            <div class="absolute top-0 flex items-center h-full ml-2">
               <svg 
                    class="w-4 text-gray-500" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                </svg> 
            </div>
            
        </div>
    </div>

    <div class="ideas-container space-y-6 my-6">

        <div class="idea-container hover:shadow-card cursor-pointer transition bg-white rounded-xl flex">
            <div class="border-r border-gray-100 px-5 py-8">
                <div class="text-center">
                    <div class="font-semibold text-2xl">12</div>
                    <div class="text-gray-500">Votes</div>
                </div>

                <div class="mt-8">
                    <button class="w-20 bg-gray-200 font-bold border text-xxs uppercase rounded-xl px-4 py-3 border-gray-200 hover:border-gray-400 transition duration-150 ease-in">Vote</button>
                </div>
            </div>
            <div class="flex flex-1 px-2 py-6">
                <div class="flex-none">
                    <a href="#">
                        <img src="https://source.unsplash.com/200x200/?face&crop=face&v=1" class="w-14 ht-14 rounded-xl" alt="avatar">
                    </a>
                </div>
                
                <div class="w-full mx-4">
                    <h4 class="text-xl font-semibold">
                        <a href="#" class="hover:underline">A random title can go here</a>
                    </h4>
                    <div class="text-gray-600 mt-3 line-clamp-3">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo excepturi culpa ratione tempore. Omnis corporis tempore impedit expedita necessitatibus cupiditate eveniet voluptates neque excepturi, officia sed, rem explicabo veritatis? Ab.
                    </div>

                    <div class="flex items-center justify-between mt-6">
                        <div class="flex items-center text-xs text-gray-400 font-semibold space-x-2">
                            <div>10 hours ago</div>
                            <div>&bull;</div>
                            <div>Category 1</div>
                            <div>&bull;</div>
                            <div class="text-gray-900">3 Comments</div>
                        </div>

                        <div class="flex items-center space-x-2">
                            <div class="bg-gray-200 text-xxs font-bold uppercase leading-none rounded-full text-center w-28 h-7 py-2 px-4">Open</div>
                        </div>
                        <button class="relative bg-gray-100 hover:bg-gray-200 border rounded-full h-7 transition duration-150 ease-in py-1 px-3">
                            <svg xmlns="http://www.w3.org/2000/svg" style="color: rgba(163, 163, 163, .5)" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <div class="idea-container hover:shadow-card cursor-pointer transition bg-white rounded-xl flex">
            <div class="border-r border-gray-100 px-5 py-8">
                <div class="text-center">
                    <div class="font-semibold text-2xl">66</div>
                    <div class="text-gray-500">Votes</div>
                </div>

                <div class="mt-8">
                    <button class="w-20 bg-gray-200 font-bold border text-xxs uppercase rounded-xl px-4 py-3 border-gray-200 hover:border-gray-400 transition duration-150 ease-in">Vote</button>
                </div>
            </div>
            <div class="flex px-2 py-6">
                <a href="#" class="flex-none">
                    <img src="https://source.unsplash.com/200x200/?face&crop=face&v=1" class="w-14 ht-14 rounded-xl" alt="avatar">
                </a>
                <div class="mx-4">
                    <h4 class="text-xl font-semibold">
                        <a href="#" class="hover:underline">Another random title can go here</a>
                    </h4>
                    <div class="text-gray-600 mt-3 line-clamp-3">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo excepturi culpa ratione tempore. Omnis corporis tempore impedit expedita necessitatibus cupiditate eveniet voluptates neque excepturi, officia sed, rem explicabo veritatis? Ab.
                    </div>

                    <div class="flex items-center justify-between mt-6">
                        <div class="flex items-center text-xs text-gray-400 font-semibold space-x-2">
                            <div>10 hours ago</div>
                            <div>&bull;</div>
                            <div>Category 1</div>
                            <div>&bull;</div>
                            <div class="text-gray-900">3 Comments</div>
                        </div>

                        <div class="flex items-center space-x-2">
                            <div class="bg-gray-200 text-xxs font-bold uppercase leading-none rounded-full text-center w-28 h-7 py-2 px-4">Open</div>
                        </div>
                        <button class="relative bg-gray-100 hover:bg-gray-200 rounded-full h-7 transition duration-150 ease-in py-1 px-3">
                            <svg xmlns="http://www.w3.org/2000/svg" style="color: rgba(163, 163, 163, .5)" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z" />
                            </svg>
                            <ul class="absolute w-44 font-semibold text-left bg-white shadow-dialog rounded-xl py-3 ml-8">
                                <li><a href="#" class="hover:bg-gray-100 px-5 py-3 block transition duration-150 ease-in">Mark as spam</a></li>
                                <li><a href="#" class="hover:bg-gray-100 px-5 py-3 block transition duration-150 ease-in">Delete</a></li>
                            </ul>
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <div class="idea-container hover:shadow-card cursor-pointer transition bg-white rounded-xl flex">
            <div class="border-r border-gray-100 px-5 py-8">
                <div class="text-center">
                    <div class="font-semibold text-2xl">12</div>
                    <div class="text-gray-500">Votes</div>
                </div>

                <div class="mt-8">
                    <button class="w-20 bg-gray-200 font-bold border text-xxs uppercase rounded-xl px-4 py-3 border-gray-200 hover:border-gray-400 transition duration-150 ease-in">Vote</button>
                </div>
            </div>
            <div class="flex px-2 py-6">
                <a href="#" class="flex-none">
                    <img src="https://source.unsplash.com/200x200/?face&crop=face&v=1" class="w-14 ht-14 rounded-xl" alt="avatar">
                </a>
                <div class="mx-4">
                    <h4 class="text-xl font-semibold">
                        <a href="#" class="hover:underline">Yet Another random title can go here</a>
                    </h4>
                    <div class="text-gray-600 mt-3 line-clamp-3">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo excepturi culpa ratione tempore. Omnis corporis tempore impedit expedita necessitatibus cupiditate eveniet voluptates neque excepturi, officia sed, rem explicabo veritatis? Ab.
                    </div>

                    <div class="flex items-center justify-between mt-6">
                        <div class="flex items-center text-xs text-gray-400 font-semibold space-x-2">
                            <div>10 hours ago</div>
                            <div>&bull;</div>
                            <div>Category 1</div>
                            <div>&bull;</div>
                            <div class="text-gray-900">3 Comments</div>
                        </div>

                        <div class="flex items-center space-x-2">
                            <div class="bg-gray-200 text-xxs font-bold uppercase leading-none rounded-full text-center w-28 h-7 py-2 px-4">Open</div>
                        </div>
                        <button class="relative bg-gray-100 hover:bg-gray-200 rounded-full h-7 transition duration-150 ease-in py-1 px-3">
                            <svg xmlns="http://www.w3.org/2000/svg" style="color: rgba(163, 163, 163, .5)" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z" />
                            </svg>
                            <ul class="absolute w-44 font-semibold text-left bg-white shadow-dialog rounded-xl py-3 ml-8">
                                <li><a href="#" class="hover:bg-gray-100 px-5 py-3 block transition duration-150 ease-in">Mark as spam</a></li>
                                <li><a href="#" class="hover:bg-gray-100 px-5 py-3 block transition duration-150 ease-in">Delete</a></li>
                            </ul>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>