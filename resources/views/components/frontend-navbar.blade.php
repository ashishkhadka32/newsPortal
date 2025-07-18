<section>
    <div class="container flex justify-between items-center py-2">
        <div>
            <img class="h-[40px] md:h-[60px] lg:h-[80px]" src="{{ asset($company->logo) }}" alt="helo">
        </div>
        <div>
            {{ nepalidate(now()) }}
            <img class="h-[6px] md:h-[14px]" src="/frontend/img/line.png" alt="line">
        </div>
    </div>
</section>

<nav class="bg-primary text-white py-2">
    <div class="container">
        <div class="hidden md:flex items-center justify-between">
            <ul class="flex gap-10 text-xl">
                <li class="{{ Request::routeIs('home') ? 'active' : '' }}">
                    <a href="{{ route('home') }}">गृहपृष्ठ</a>
                </li>
                @foreach ($categories as $category)
                    <li class="{{ request()->is('category/' . $category->slug) ? 'active' : '' }}">
                        <a href="{{ route('category', $category->slug) }}">{{ $category->nep_title }}</a>
                    </li>
                @endforeach
            </ul>

            <div class="w-[25%]">
                <form action="{{ route('search') }}" method="GET">
                    <label for="default-search"
                        class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                            <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                            </svg>
                        </div>
                        <input name="q" type="search" id="default-search"
                            class="block w-full p-4 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="Search by editor" required />
                        <button type="submit"
                            class="text-white absolute end-2.5 bottom-2.5 bg-primary focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Search</button>
                    </div>
                </form>
            </div>
        </div>



        <!-- drawer init and toggle -->
        <div class="md:hidden">
            <button type="button" data-drawer-target="drawer-example" data-drawer-show="drawer-example"
                aria-controls="drawer-example">
                <i class="fa-solid fa-bars"></i>
            </button>
        </div>


    </div>
</nav>

<!-- drawer component -->
