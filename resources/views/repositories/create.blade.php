
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

                    <h2 class="block text-3xl w-1/2 my-auto">Crear Repositorio</h2>

                </div>
                <form action="{{ route('repositories.store') }}" method="POST" class="w-1/2 mx-auto">
                    @csrf
                    <label for="block font-medium test-sm text-gray-700"> Titulo * </label>
                    <input type="text" name="title" id="title" class="form-input w-full rounded-md shadow-md  mb-5">

                    <label for="block font-medium test-sm text-gray-700"> Url * </label>
                    <input type="text" name="url" id="url" class="form-input w-full rounded-md shadow-md mb-5">

                    <label for="block font-medium test-sm text-gray-700"> Descripcion </label>
                    <textarea name="description" id="description" class="form-input w-full rounded-md shadow-md p-5 mb-5"></textarea>

                    <div class="flex justify-between">
                        <button type="submit" class="bg-green-500 text-white w-1/3 h-10 py-1 rounded-lg hover:bg-green-400 mb-4"> Crear </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    @if ($errors->any())
        <div class="fixed bottom-10 left-10 space-y-2">
            @foreach ($errors->all() as $error)
                <div
                    x-data="{ show: true }"
                    x-init="setTimeout(() => show = false, 3000)"  {{-- 5000ms = 5 segundos --}}
                    x-show="show"
                    x-transition:leave="transition ease-in duration-500"
                    x-transition:leave-start="opacity-100"
                    x-transition:leave-end="opacity-0"
                    class="bg-red-400 p-3 rounded-xl text-white">
                    {{ $error }}
                </div>
            @endforeach
        </div>
    @endif
</x-app-layout>



