<x-app-layout>

    <div class="py-6" x-data="{ selectedRepo: null }">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 h-full">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg w-full h-dvh flex">
                <!-- Lista de repositorios -->
                <div class="w-4/12 h-full bg-gray-50 max-w-md text-black overflow-x-auto">
                    <ul class="bg-slate-200 border-r border-gray-300 shadow-xl">
                        @forelse ($repositories as $repository)
                            <li class="flex items-center p-4 border-b hover:bg-gray-300 cursor-pointer"
                                @click="selectedRepo = (selectedRepo && selectedRepo.id === {{ $repository->id }}) ? null : {{ $repository }}"
                                :class="selectedRepo && selectedRepo.id === {{ $repository->id }} ? 'bg-white text-white hover:bg-blue-200' : 'hover:bg-gray-300'">
                                <img class="w-12 h-12 rounded-full mr-3" src="{{ $repository->user->profile_photo_url }}" alt="">
                                <div class="flex justify-between w-full">
                                    <div class="flex-1">
                                        <h2 class="text-lg font-semibold text-black"> {{ $repository->title }} </h2>
                                        {{-- <p class="text-gray-800"> {{ $repository->description }} </p> --}}
                                    </div>
                                    <span class="text-xs font-medium text-gray-700"> {{$repository->created_at->diffForHumans()}} </span>

                                </div>
                            </li>
                        @empty
                            <h2 class="p-4"> No repositories found. </h2>
                        @endforelse
                    </ul>
                </div>

                <!-- Panel de detalles -->
                <div class="w-8/12" x-show="selectedRepo" x-cloak>
                    <div class="bg-white p-16">
                        <h2 class="text-2xl font-bold text-gray-900" x-text="selectedRepo?.title"></h2>
                        <p class="text-gray-700 mt-2" x-text="selectedRepo?.user.name"></p>
                        <p class="text-gray-700 mt-2" x-text="selectedRepo?.description"></p>
                        <p class="text-sm text-gray-500 mt-2">
                            Creado: <span x-text="new Date(selectedRepo?.created_at).toLocaleString('es-ES', { year: 'numeric', month: '2-digit', day: '2-digit', hour: '2-digit', minute: '2-digit', second: '2-digit' })"></span>
                        </p>
                    <div class="mt-4">
                            <button class="bg-red-500 text-white px-4 py-2 rounded" @click="selectedRepo = null">Cerrar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
