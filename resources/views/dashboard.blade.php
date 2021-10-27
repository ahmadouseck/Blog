<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-10 pl-3">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
           @if (session('success'))
               {{session('success')}}

           @endif

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">

                <table class="table table-bordered">
                    <tr>
                        <th>Titre du Post</th>
                        <th>Action</th>
                    </tr>
                    @foreach ($posts as $post )
                        <tr>
                        <td>{{$post->title}}</td>

                        <div class="px-3">
                        <td>
                            <a href="{{route('posts.edit',$post)}}" class="shadow bg-green-500 hover:bg-green-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded" >Editer<i class="bi bi-pencil-square"></i></a>

                            <a href="#"class="shadow bg-red-500 hover:bg-red-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded" onclick="event.preventdefault;
                                                                    document.getElementById('destroy-post-form').submit();">
                                                                    Supprimer
                                <i class="bi bi-trash"></i>
                            <form action="{{route('posts.destroy',$post)}}" method="post" id="destroy-post-form">
                            @csrf
                            @method('delete')
                            </form>
                            </a>
                        </td>
                    </div>
                    </tr>


                    @endforeach
            </table>
            </div>
        </div>
    </div>
</x-app-layout>
