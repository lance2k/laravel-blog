@auth
    <x-panel>
        <form action="/posts/{{ $post->slug }}/comments" method="post">
            @csrf
            <header class="flex items-center">
                <img class="rounded-xl" src="https://i.pravatar.cc/60?u={{ auth()->id() }}" width="40" height="40"
                    alt="Avatar">
                <h2 class="ml-4">Want to participate?</h2>
            </header>
            <div class="mt-6">
                <textarea name="body" rows="5" class="w-full text-sm focus:outline-none focus:ring"
                    placeholder="Quick, think of something!" required></textarea>
                @error('body')
                    <span class="text-xs text-red-500">{{ $message }}</span>
                @enderror
            </div>
            <div class="flex justify-end mt-6 pt-6 border-t border-gray-200">
                <x-form.button>Post</x-form.button>
            </div>
        </form>
    </x-panel>
@else
    <p class="font-semibold">
        <a class="hover:underline" href="/register">Register</a> or <a class="hover:underline" href="/login">log in</a> to
        leave a comment.
    </p>
@endauth