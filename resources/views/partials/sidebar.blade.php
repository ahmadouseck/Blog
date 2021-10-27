<div class="hidden w-4/12 -mx-8 lg:block">
    <div class="px-8">
        <h1 class="mb-4 text-xl font-bold text-gray-700">Auteurs</h1>
        <div class="flex flex-col max-w-sm px-6 py-4 mx-auto bg-white rounded-lg shadow-md">
            <ul class="-mx-4">
                @foreach ($posts as $post )
                <li class="flex items-center mb-2"><img
                        src="https://images.unsplash.com/photo-1492562080023-ab3db95bfbce?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=731&amp;q=80"
                        alt="avatar" class="object-cover w-10 h-10 mx-4 rounded-full">
                    <p><a href="#" class="mx-1 font-bold text-gray-700 hover:underline">{{$post->user->name}}</a><span
                            class="text-sm font-light text-gray-700">23 Posts</span></p>
                </li>
                @endforeach
            </ul>
        </div>
    </div>
    <div class="px-8 mt-10">
        <h1 class="mb-4 text-xl font-bold text-gray-700">Categories</h1>
        <div class="flex flex-col max-w-sm px-4 py-6 mx-auto bg-white rounded-lg shadow-md">
            <ul>
                @foreach ($posts as $post )
                <li><a href="#" class="mx-1 font-bold text-gray-700 hover:text-gray-600 hover:underline">-
                    {{$post->category->name}}</a></li>
                @endforeach
            </ul>
        </div>
    </div>
    {{-- <div class="px-8 mt-10">
        <h1 class="mb-4 text-xl font-bold text-gray-700">Post Recent </h1>
        <div class="flex flex-col max-w-sm px-8 py-6 mx-auto bg-white rounded-lg shadow-md">
            @foreach ($posts as $post )
            <div class="flex items-center justify-center"><a href="#"
                    class="px-2 py-1 text-sm text-green-100 bg-gray-600 rounded hover:bg-gray-500">{{$post->category->name}}</a>
            </div>
            <div class="mt-4"><a href="#" class="text-lg font-medium text-gray-700 hover:underline">{{Str::limit($post->content,75)}}</a></div>
            <div class="flex items-center justify-between mt-4">
                <div class="flex items-center"><img
                        src="https://images.unsplash.com/photo-1492562080023-ab3db95bfbce?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=731&amp;q=80"
                        alt="avatar" class="object-cover w-8 h-8 rounded-full"><a href="#"
                        class="mx-3 text-sm text-gray-700 hover:underline">{{$post->user->name}}</a></div><span
                    class="text-sm font-light text-gray-600">{{$post->created_at->format('d M y à h:i')}}</span>
            </div>
            @endforeach
        </div>
    </div> --}}
</div>
