<div class="bg-gray-50 max-w-lg text-black">
    <ul class="bg-white border-r border-gray-300 shadow-xl">
        @forelse ($repositories as $repository)
            <li class="flex items-center p-4 border-b hover:bg-gray-300">
                <img class="w-12 h-12 rounded-full mr-3" src="{{ $repository->user->profile_photo_url }}" alt="">
                <div class="flex justify-between w-full">
                    <div class="flex-1">
                        <h2 class="text-sm fons-semibold text-black"> {{ $repository->url }} </h2>
                        <p class="text-gray-800"> {{ $repository->description }} </p>
                    </div>
                    <span class="text-xs font-medium text-gray-700"> {{$repository->created_at->diffForHumans()}} </span>
                </div>
            </li>

        @empty
            <h2> No repositories found. </h2>
        @endforelse
    </ul>
</div>
