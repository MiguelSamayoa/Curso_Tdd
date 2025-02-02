
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Repositories
        </h2>
    </x-slot>

    <div class="pt-8">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-5">

                <div class="flex w-2/3 mx-auto">
                    <form action="{{ route('repositories.index') }}" method="GET" class="w-1/4  my-8">
                        <button type="submit" class="bg-red-500 text-white h-10 py-1 px-8 rounded-lg m-auto"> Regresar </button>
                    </form>

                    <h2 class="block text-3xl w-1/2 my-auto">Editar Repositorio</h2>

                </div>
                <form action="{{ route('repositories.update', $repository) }}" method="POST" class="w-1/2 mx-auto">
                    @csrf
                    @method('PUT')

                    <label for="block font-medium test-sm text-gray-700"> Titulo * </label>
                    <input type="text" name="url" id="url" value="{{ $repository->title }}" class="form-input w-full rounded-md shadow-md mb-5">

                    <label for="block font-medium test-sm text-gray-700"> Url * </label>
                    <input type="text" name="url" id="url" value="{{ $repository->url }}" class="form-input w-full rounded-md shadow-md mb-5">

                    <label for="block font-medium test-sm text-gray-700"> Descripcion </label>
                    <textarea name="description" id="description" class="form-input w-full rounded-md shadow-md p-5 mb-5"> {{ $repository->description }} </textarea>

                    <button type="submit" class="bg-green-500 text-white w-1/3 h-10 py-1 rounded-lg hover:bg-green-400 mb-4"> Editar </button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>

