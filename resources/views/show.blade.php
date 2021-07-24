<x-app-layout>
    <div>
        <a href="/" class="flex items-center semi-bold hover:underlined">
            <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
            </svg>
            <span class="ml-2">All Ideas</span>
        </a>
    </div>

        <div class="idea-container bg-white rounded-xl flex mt-4">
            <div class="flex flex-1 px-2 py-6 px-4">
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
                            <div class="font-bold text-gray-900">John Doe</div>
                            <div>&bull;</div>
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

        <div class="buttons-container flex items-center justify-between mt-6">
                <div class="flex item-center space-x-4 ml-6">
                    <button class="flex items-center justify-center w-32 h-11 text-xs bg-blue hover:bg-blue-hover
                        font-semibold rounded-xl border border-blue
                        transition duration-150 ease-in px-6 py-3" type="button">
                        <span class="ml-1 text-white">Reply</span>
                    </button>

                    <button class="flex items-center justify-center w-36 h-11 text-xs bg-gray-200 
                                font-semibold rounded-xl border border-gray-200 hover:border-gray-400 
                                transition duration-150 ease-in px-6 py-3" type="button">
                        <span class="mr-1">Set Status</span>
                        <svg class="h-4 w-4 ml-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                </div> 

                <div class="flex item-center space-x-3">
                    <div class="bg-white font-semibold text-center rounded-xl px-3 py-2">
                        <div class="text-xl leading-snug">12</div>
                        <div class="text-gray-400 text-xs leading-none">Votes</div>
                    </div>
                    <button class="w-32 h-11 text-xs bg-gray-200 
                                font-semibold rounded-xl border border-gray-200 hover:border-gray-400 
                                transition duration-150 ease-in px-3 py-2" type="button">
                                <span class="mr-1">Vote</span>
                    </button>
                </div>

        </div>

        <div class="comments-container relative space-y-6 ml-22 my-8 mt-1 pt-4">
            <div class="comment-container relative bg-white rounded-xl flex mt-4">
                <div class="flex flex-1 px-2 py-6 px-4">
                    <div class="flex-none">
                        <a href="#">
                            <img src="https://source.unsplash.com/200x200/?face&crop=face&v=1" class="w-14 ht-14 rounded-xl" alt="avatar">
                        </a>
                    </div>
                
                    <div class="w-full mx-4">
                        <div class="text-gray-600 mt-3">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo excepturi culpa ratione tempore. Omnis corporis tempore impedit expedita necessitatibus cupiditate eveniet voluptates neque excepturi, officia sed, rem explicabo veritatis? Ab.
                        </div>

                        <div class="flex items-center justify-between mt-6">
                            <div class="flex items-center text-xs text-gray-400 font-semibold space-x-2">
                                <div class="font-bold text-gray-900">John Doe</div>
                                <div>&bull;</div>
                                <div>10 hours ago</div>
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

            <div class="comment-container is-admin relative bg-white rounded-xl flex mt-4">
                <div class="flex flex-1 px-2 py-6 px-4">
                    <div class="flex-none">
                        <a href="#">
                            <img src="https://source.unsplash.com/200x200/?face&crop=face&v=1" class="w-14 ht-14 rounded-xl" alt="avatar">
                        </a>
                        <div class="text-center text-gray-400 text-xxs font-bold mt-1">ADMIN</div>
                    </div>
                
                    <div class="w-full mx-4">
                        <h4 class="text-xl font-semibold">
                            <a href="#" class="hover:underline">Status changed to "Under Consideration"</a>
                        </h4>
                        
                        <div class="text-gray-600 mt-3">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo excepturi culpa ratione tempore. Omnis corporis tempore impedit expedita necessitatibus cupiditate eveniet voluptates neque excepturi, officia sed, rem explicabo veritatis? Ab.
                        </div>

                        <div class="flex items-center justify-between mt-6">
                            <div class="flex items-center text-xs text-gray-400 font-semibold space-x-2">
                                <div class="font-bold text-blue">John Doe</div>
                                <div>&bull;</div>
                                <div>10 hours ago</div>
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

            <div class="comment-container relative bg-white rounded-xl flex mt-4">
                <div class="flex flex-1 px-2 py-6 px-4">
                    <div class="flex-none">
                        <a href="#">
                            <img src="https://source.unsplash.com/200x200/?face&crop=face&v=1" class="w-14 ht-14 rounded-xl" alt="avatar">
                        </a>
                    </div>
                
                    <div class="w-full mx-4">
                        <div class="text-gray-600 mt-3">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo excepturi culpa ratione tempore. Omnis corporis tempore impedit expedita necessitatibus cupiditate eveniet voluptates neque excepturi, officia sed, rem explicabo veritatis? Ab.
                        </div>

                        <div class="flex items-center justify-between mt-6">
                            <div class="flex items-center text-xs text-gray-400 font-semibold space-x-2">
                                <div class="font-bold text-gray-900">John Doe</div>
                                <div>&bull;</div>
                                <div>10 hours ago</div>
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
            
        </div>
</x-app-layout>