<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>

    @foreach ($posts as $post)
        <article class="py-8 max-w-screen-md border-b border-gray-300">
            <a href="/posts/{{ $post['slug'] }}">
                <h2 class="mb-1 text-3xl tracking-tight font-bold text-gray-900">{{ $post['title'] }}</h2>
            </a>

            <div >
                <p>By
                <a href="/authors/{{$post->author->username}}" class="hover:underline text-base text-gray-500">{{ $post->author->name }}</a>
                In
                <a href="/categories/{{ $post->category->slug }}" class="hover:underline text-base text-gray-500">{{$post->category->name}}</a>
                | {{ $post->created_at->diffForHumans() }}</p>
            </div>
            <p class="m-4 font-light">
                {{ Str::limit($post['body'], 200) }}
            </p>
            <a href="/posts/{{ $post['slug'] }}" class="font-medium text-blue-500">Read More &raquo;</a>
        </article>
    @endforeach

</x-layout>
