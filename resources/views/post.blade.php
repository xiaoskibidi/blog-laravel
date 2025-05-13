<x-layout>
    <x-slot:title>{{$title}}</x-slot:title>
        <article class="bg-white mt-2 p-2">
        <h2 class="text-3xl font-bold mb-1">{{ $post['title'] }}</h2>
        <div class="text-gray-600 text-sm"><a href="/posts/authors/{{ $post->author->id }}">{{ $post->author->name }}</a> | {{ $post->created_at->diffForHumans() }}</div>
        <p class="text-sm">{{$post['body'] }}</p>
        <a class="mt-2 text-blue-600 hover:underline" href="/posts">Back to post</a>
    </article>


    
</x-layout>