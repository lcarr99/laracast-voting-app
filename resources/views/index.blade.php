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
</x-app-layout>