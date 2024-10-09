<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>

    <article class="py-8 max-w-screen-md border-b ">
        <h2 class="mb-1 text-3xl tracking-tight font-bold text-gray-900">{{ $post['title'] }}</h2>
        <div>
            <p>
                By
                <a href="/authors/{{ $post->author->username }}"
                    class="hover:underline text-base text-gray-500">{{ $post->author->name }}</a>
                In
                <a href="/categories/{{ $post->category->slug }}" class="hover:underline text-base text-gray-500">{{$post->category->name}}</a>
                | {{ $post->created_at->diffForHumans() }}
            </p>
        </div>
        <p class="m-4 font-light">
            {{ $post['body'] }}
        </p>
        <a href="/posts" class="font-medium text-blue-500">Back to posts &laquo;</a>
    </article>


</x-layout>
