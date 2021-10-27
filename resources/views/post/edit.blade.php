<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
          Editer le post:   {{ $post->title}}
        </h2>
    </x-slot>


    <div class="px-8 mt-10">
        <div class="flex flex-col max-w-sm px-8 py-6 mx-auto bg-white rounded-lg shadow-md">

            <div class="my-5">
                @foreach ($errors->all() as $error )
                <span class="block text-red-500">{{ $error }}</span>
                @endforeach
            </div>



            <form action="{{route('posts.update',$post)}}" method="post" enctype="multipart/form-data" class="mt-10">

                @method('put')
                @csrf

                <x-label for="title" value="Titre du post"/>
                <x-input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="title" name="title" value="{{$post->title}}"/><br><br>

                <x-label for="content" value="Contenu du post"/>
                <textarea class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="content" name="content" value="{{$post->content}}"> </textarea>
                <br><br>

                <x-label for="image" value="Image du post"/>
                <x-input type="file" id="image" name="image" />
                <br><br>

                <x-label for="category" value="Categorie du post"/>
                <select name="category" id="category">
                    @foreach ($categories as $category )

                    <option value="{{$category->id}}">{{$post->category_id=== $category->id ? 'selected' : ''}}>{{$category->name}}</option>
                    @endforeach

                </select>

                <x-button style="display: block ! important;" class="mt-5">Modifier mon post</x-button>

            </form>
        </div>

    </div>
</x-app-layout>
