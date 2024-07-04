<x-app-layout>

    <h1 class="text-2xl">Aquí se mostrarán todos los Posts</h1>

    <a href="{{route('posts.create')}}">
        Crear un Post
    </a>

    <ul>
        @foreach ($posts as $post)

            <li>
                <a href="{{route('posts.show', $post)}}"> {{-- No hace falta especificar la id --}}
                    {{ $post->title }}
                </a>

            </li>

        @endforeach
    </ul>

    {{ $posts->links() }}

</x-app-layout>
