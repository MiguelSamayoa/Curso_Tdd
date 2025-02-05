
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Repositories
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="w-8/12 mx-auto">
            <div class="bg-white rounded-lg shadow-lg">
                <div class="flex p-6 mb-5 bg-slate-600 text-white">
                    <form class="mr-5" action="{{ route('repositories.index') }}" >
                        <button class="bg-red-500 text-white px-4 py-2 rounded"> Regresar</button>
                    </form>

                    <h2 class="text-3xl font-bold text-white">
                        {{ $repository->title }}
                    </h2>

                </div>
                <p class="text-gray-700 my-10 px-6">
                    {{ $repository->description }}
                </p>

                <div class="flex justify-between px-6 py-5">
                    <a href="{{ route('repositories.edit', $repository) }}" class="bg-green-500 text-white px-4 py-2 rounded">
                        Editar
                    </a>

                    <p class="text-sm text-gray-500 py-5 px-6">
                        Creado: <span>{{ $repository->created_at->diffForHumans() }}</span>
                    </p>
                </div>
            <div class="mt-4">


            </div>
            </div>
        </div>
    </div>
</x-app-layout>
