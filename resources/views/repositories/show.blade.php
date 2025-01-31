
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Repositories
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="w-8/12 mx-auto">
            <div class="bg-white p-6 rounded-lg shadow-lg">
                <h2 class="text-2xl font-bold text-gray-900">
                    {{ $repository->title }}
                </h2>
                <p class="text-gray-700 mt-2">
                    {{ $repository->description }}
                </p>
                <p class="text-sm text-gray-500 mt-2">
                    Creado: <span>{{ $repository->created_at->diffForHumans() }}</span>
                </p>
            <div class="mt-4">
                <form action="{{ route('repositories.index') }}" >
                    <button class="bg-red-500 text-white px-4 py-2 rounded"> Regresar</button>
                </form>

            </div>
            </div>
        </div>
    </div>
</x-app-layout>
