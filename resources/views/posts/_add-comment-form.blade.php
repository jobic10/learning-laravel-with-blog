@auth
<x-panel>
    <form action="/post/{{ $post->slug }}/comments" method="post" class="">
        @csrf
        <header class="flex items-center">
            <img src="https://i.pravatar.cc/60?u={{ auth()->id() }}" width="40" height="40" class="rounded-full">
            <h2 class="ml-4">Wanna participate?</h2>
        </header>
        <div class="mt-6">
            <textarea name="body" required placeholder="Quick, think of something to say"
                class="w-full text-sm focus:outline-none p-3 focus:ring" id="" cols="30" rows="5"></textarea>
            @error('body')
            <span class="text-xs text-red-500">{{ $message }}</span>
            @enderror
        </div>
        <div class="flex justify-end mt-6 border-t border-gray-200 pt-6">
            <button type="submit"
                class="bg-blue-500 text-white font-semibold text-xs px-10 py-2 rounded-2xl uppercase hover:bg-blue-800">Post</button>
        </div>
    </form>
</x-panel>
@else
<p class="font-semibold">
    <a href="/register" class="hover:underline">Register</a> or <a href="/login" class="hover:underline">log in</a> to
    leave a comment
</p>
@endauth
