<x-layout>
    <x-slot:title>{{$title}}</x-slot:title>

    @foreach ($posts as $post )
        <article class="bg-white mt-2 p-2">
        <h2 class="text-3xl font-bold mb-1">{{ $post['title'] }}</h2>
        <div class="text-gray-600 text-sm"><a href="#">{{ $post['author'] }}</a> | January, 20 2023</div>
        <p class="text-sm">{{ Str::limit($post['body'], 100) }}</p>
        <a class="mt-2 text-blue-600 hover:underline" href="post/{{ $post['slug'] }}">Read More</a>
    </article>
    @endforeach


    
</x-layout>