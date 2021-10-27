<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
           @if (session('success'))
               {{session('success')}}

           @endif

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                @foreach ($posts as $post )

                <div class="flex items-center">
                    <a href="{{route('posts.edit',$post)}}"  class="btn btn-info"><i class="bi bi-pencil-square"></i>{{$post->title}}</a>
                    <a href="#"class="btn btn-danger" onclick="event.preventdefault;
                                                               document.getElementById('destroy-post-form').submit();">
                        <i class="bi bi-trash"></i>{{$post->title}}
                    <form action="{{route('posts.destroy',$post)}}" method="post" id="destroy-post-form">
                    @csrf
                    @method('delete')
                    </form>
                    </a>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</x-app-layout>
