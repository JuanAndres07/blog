<x-app-layout>
    <a href="{{route('posts.index')}}">Volver</a>

    <h1>Título: {{ $post->title }} </h1>

    <p>
        <b>Categoría: </b> {{$post->category}}
    </p>

    <p>
        {{$post->content}}
    </p>

    <a href="{{route('posts.edit', $post)}}">
        Editar Post
    </a>

    <form action="{{route('posts.destroy', $post)}}" method="POST">
        @csrf
        @method('DELETE')

        <button type="submit">
            Eliminar Post
        </button>
    </form>
</x-app-layout>
