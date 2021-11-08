@props(['post'])
<article
    class="transition-colors duration-300 border border-black border-opacity-0 hover:bg-gray-100 hover:border-opacity-5 rounded-xl">
    <div class="px-5 py-6">
        <div>
            <img src="/images/illustration-3.png" alt="Blog Post illustration" class="rounded-xl">
        </div>

        <div class="flex flex-col justify-between mt-8">
            <header>
                <div class="space-x-2">
                    <a href="/category/{{ $post->category->slug }}"
                        class="px-3 py-1 text-xs font-semibold text-blue-300 uppercase border border-blue-300 rounded-full"
                        style="font-size: 10px">{{ $post->category->name }}</a>
                </div>

                <div class="mt-4">
                    <h1 class="text-3xl">
                        {{ $post->title }}
                    </h1>

                    <span class="block mt-2 text-xs text-gray-400">
                        Published <time>{{ $post->created_at->diffForHumans() }}</time>
                    </span>
                </div>
            </header>

            <div class="mt-4 text-sm">
                <p>
                   {{ $post->excerpt }}
                </p>


            </div>

            <footer class="flex items-center justify-between mt-8">
                <div class="flex items-center text-sm">
                    <img src="/images/lary-avatar.svg" alt="Lary avatar">
                    <div class="ml-3">
                        <h5 class="font-bold">{{ $post->author->name }}</h5>
                        <h6>Mascot at Laracasts</h6>
                    </div>
                </div>

                <div>
                    <a href="/post/{{ $post->slug }}"
                        class="px-8 py-2 text-xs font-semibold transition-colors duration-300 bg-gray-200 rounded-full hover:bg-gray-300">Read
                        More</a>
                </div>
            </footer>
        </div>
    </div>
</article>
