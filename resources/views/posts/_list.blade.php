<h2 class="text-2xl mb-6 uppercase text-center">Últimos Posts</h2>
<div class="px-2">
    <div class="flex -mx-2">
        @foreach (\App\Post::all() as $post)
            <div class="w-1/3 px-2 rounded overflow-hidden shadow-lg">
                <img class="w-full" src="http://placeimg.com/400/250/nature" alt="Not a clue">
                <div class="px-6 py-4">
                    <div class="font-bold text-xl mb-2">
                        <a href="{{ route('post.show', ['id' => (string)$post->_id ]) }}">
                            {{ $post->title }}
                        </a>
                    </div>
                    <div class="flex items-center mb-2">
                        <img class="w-10 h-10 rounded-full mr-4" src="http://placeimg.com/100/100/people"
                            alt="Avatar of John Doe">
                        <div class="text-sm">
                            <p class="text-gray-900 leading-none">
                                {{ $post->author ? $post->author->name : 'Anonimo' }}
                            </p>
                            <p class="text-gray-600">Sep 04</p>
                        </div>
                    </div>
                    <p class="text-gray-700 text-base">
                        {{ $post->content }}
                    </p>
                </div>
                <div class="px-6 py-4">
                    @if ( $post->tags )
                        @foreach ($post->tags as $tag)
                            <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2">
                                #{{ $tag }}
                            </span>
                        @endforeach
                    @endif
                </div>
            </div>
        @endforeach
    </div>
</div>
