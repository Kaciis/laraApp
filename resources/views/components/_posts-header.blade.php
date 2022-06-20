@props(['categories'])
<div class="space-y-2 lg:space-y-0 lg:space-x-4 mt-8">
    <!--  Category -->
    <div class="relative flex inline-flex items-center bg-gray-100 rounded-xl">

        <div x-data="{show:false}" @click.away="show = false">
            <button @click="show = !show" class="flex-1 appearance-none bg-transparent py-2 pl-3 pr-9 text-sm font-semibold">Categories</button>
            {{isset($currentCategory)? $currentCategory->name : ''}}

            <div x-show="show" class="py-2 absolute bg-gray-100 w-32 mt-2 rounded-xl z-50 overflow-auto max-h-50" style="display:none">
                @foreach($categories as $category)
                <a href="/categories/{{$category->slug}}" class="block px-3 hover:bg-blue-400 focus:bg-blue-300 hover:text-white focus:text-white {{isset($currentCategory)&&$currentCategory->id == $category->id ? 'bg-blue-400 text-white':''}}">{{$category->name}}</a>
                @endforeach
            </div>

            <svg class="transform -rotate-90 absolute pointer-events-none" style="right: 200px;bottom: 8px;" width="22" height="22" viewBox="0 0 22 22">
                <g fill="none" fill-rule="evenodd">
                    <path stroke="#000" stroke-opacity=".012" stroke-width=".5" d="M21 1v20.16H.84V1z"></path>
                    <path fill="#222" d="M13.854 7.224l-3.847 3.856 3.847 3.856-1.184 1.184-5.04-5.04 5.04-5.04z"></path>
                </g>
            </svg>
        </div>

        <!-- Search -->
        <div class="relative flex lg:inline-flex items-center bg-gray-100 rounded-xl px-3 py-2">
            <form method="GET" action="#">
                <input type="text" name="search" placeholder="Find something" class="bg-transparent placeholder-black font-semibold text-sm">
            </form>
        </div>
    </div>