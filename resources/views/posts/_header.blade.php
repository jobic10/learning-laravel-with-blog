<header class="max-w-xl mx-auto mt-20 text-center">
    <h1 class="text-4xl">
        Latest <span class="text-blue-500">Laravel From Scratch</span> News
    </h1>



    <div class="mt-4 space-y-2 lg:space-y-0 lg:space-x-4">
        <!--  Category -->
        <div class="relative bg-gray-100 lg:inline-flex rounded-xl">
            <x-category-dropdown>

            </x-category-dropdown>
        </div>

        <!-- Other Filters -->
        {{-- <div class="relative flex items-center bg-gray-100 lg:inline-flex rounded-xl">
            <select class="flex-1 py-2 pl-3 text-sm font-semibold bg-transparent appearance-none pr-9">
                <option value="category" disabled selected>Other Filters
                </option>
                <option value="foo">Foo
                </option>
                <option value="bar">Bar
                </option>
            </select>

            <svg class="absolute transform -rotate-90 pointer-events-none" style="right: 12px;" width="22" height="22"
                viewBox="0 0 22 22">
                <g fill="none" fill-rule="evenodd">
                    <path stroke="#000" stroke-opacity=".012" stroke-width=".5" d="M21 1v20.16H.84V1z">
                    </path>
                    <path fill="#222" d="M13.854 7.224l-3.847 3.856 3.847 3.856-1.184 1.184-5.04-5.04 5.04-5.04z">
                    </path>
                </g>
            </svg>
        </div> --}}

        <!-- Search -->
        <div class="relative flex items-center px-3 py-2 bg-gray-100 lg:inline-flex rounded-xl">
            <form method="GET" action="#">
                <input type="text" name="search" placeholder="Find something" value="{{ request('search') }}"
                    class="text-sm font-semibold placeholder-black bg-transparent">
            </form>
        </div>
    </div>
</header>