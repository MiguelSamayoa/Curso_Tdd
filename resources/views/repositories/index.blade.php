<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Repositories
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-5">


                <table class="table max-w-7xl mx-auto ">
                    <thead class="bg-slate-200">
                        <tr>
                            <th class="px-3">Titulo</th>
                            <th class="px-3">Fecha de Creacion</th>
                            <th colspan="2" class="px-3 text-center">Acciones</th>
                        </tr>
                    </thead>
                    <tbody class="bg-slate-100 shadow-xl">
                        @forelse ($repositories as $item )
                            <tr class="border-b hover:bg-gray-300 cursor-pointer">


                                <td class="p-3 font-semibold text-black"> {{ $item->title }} </td>
                                <td class="p-3 text-center text-black"> {{$item->created_at->diffForHumans()}} </td>

                                <td class="p-3">
                                    <form action="{{ route('repositories.show', $item) }}" >
                                        @csrf
                                        <button type="submit" class="px-2 rounded-md bg-green-400 border-2 border-green-500">Ver</button>
                                    </form>
                                </td>
                                <td class="p-3">
                                    <form action="{{ route('repositories.destroy', $item) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="px-2 rounded-md bg-red-400 border-2 border-red-500">Eliminar</button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="4" class="text-center"> No hay repositorios registrados</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>
