
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Repositories
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-5">

                <form action="{{ route('repositories.update', $repository) }}" method="POST" class="w-1/2 mx-auto py-10">
                    @csrf
                    @method('PUT')

                    <label for="block font-medium test-sm text-gray-700"> Url * </label>
                    <input type="text" name="url" id="url" value="{{ $repository->url }}" class="form-input w-full rounded-md shadow-md">

                    <label for="block font-medium test-sm text-gray-700"> Descripcion </label>
                    <textarea name="description" id="description" class="form-input w-full rounded-md shadow-md p-5"> {{ $repository->description }} </textarea>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>

