<x-app-layout>

    <h1>Formulario para editar el Post</h1>

    @if ($errors->any())

        <div>
            <h2>Errores: </h2>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>
                        {{$error}}
                    </li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{route('posts.update', $post)}}" method="POST">

        {{-- Crear token --}}
        @csrf
        {{-- Especificar en que metodo lo vamos a enviar --}}
        @method('PUT')

        <label>
            Titulo:
            <input type="text" name="title" value="{{old('title', $post->title)}}">
        </label>

        <br>
        <br>

        <label>
            Slug:
            <input type="text" name="slug" value="{{old('slug', $post->slug)}}">
        </label>

        <br>
        <br>

        <label>
            Categoría:
            <input type="text" name="category" value="{{old('category', $post->category)}}">
        </label>

        <br>
        <br>

        <label>
            Contenido:
            <textarea name="content">{{old('content', $post->content)}}</textarea>
        </label>

        <br>
        <br>

        <button type="submit">
            Actualizar Post
        </button>

    </form>
</x-app-layout>
