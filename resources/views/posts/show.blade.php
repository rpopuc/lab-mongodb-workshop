@extends('_base')

@section('title', 'Home')

@section('content')
    @php
        $post = \App\Post::first($id);
    @endphp

    <img class="w-full" src="http://placeimg.com/400/250/nature" alt="Not a clue" style="height: 200px">
    <div class="px-6 py-4">
        <div class="font-bold text-4xl mb-4 text-center">{{ $post->title }}</div>
        <div class="flex items-center mb-6 justify-center">
            <img class="w-20 h-20 rounded-full mr-4" src="{{ $post->author ? $post->author->avatar : 'https://docs.atlassian.com/aui/8.4.1/docs/images/avatar-person.svg' }}"
                 alt="Avatar of {{ $post->author ? $post->author->name : '' }}">
            <div>
                <p class="text-gray-900 leading-none">{{ $post->author ? $post->author->name : 'Anonimo' }}</p>
                <p class="text-gray-600">{{ $post->created_at }}</p>
            </div>
        </div>
        <div class="px-6 py-4 mb-4 text-center">
            @if ($post->tags)
                @foreach ($post->tags as $tag)
                    <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2">
                        #{{ $tag }}
                    </span>
                @endforeach
            @endif
        </div>
        <p class="text-gray-700 text-base">
        <p>
            {{ $post->content }}
        </p>
    </div>
    <div class="bg-gray-100 rounded border-t my-6 pt-6">
        <h4 class="text-2xl mb-6 uppercase text-center">
            Comentários
        </h4>
        @forelse ($post->comments as $comment)
            <div class="p-4 border rounded m-6 bg-gray-200">
                <div class="flex items-center mb-2">
                    <img class="w-10 h-10 rounded-full mr-4" src="http://placeimg.com/200/200/people?2"
                        alt="Avatar of Ravan Scafi">
                    <div class="text-sm">
                        <p class="text-gray-900 leading-none">{{ $comment->author->name }}</p>
                        <p class="text-gray-600">{{ \Mongolid\Util\LocalDateTime::format( $comment->created_at, 'd/m/Y') }}</p>
                    </div>
                </div>
                <p>
                    {{ $comment->content }}
                </p>
            </div>
        @empty
            <div class="p-4 border rounded m-6 bg-gray-200">
                <div class="flex items-center mb-2">
                    Nenhum comentario
                </div>
            </div>
        @endforelse
    </div>
@endsection
