<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Federações') }}
        </h2>
    </x-slot>

    <div class="overflow-x-auto">
        <div class="min-w-screen min-h-screen bg-gray-100 flex items-center justify-center bg-gray-100 font-sans overflow-hidden">
            <div class="w-full lg:w-5/6">
                <div class="flex justify-center items-center cursor-pointer h-12 w-full lg:w-1/6 font-bold rounded-full bg-blue-400 hover:bg-blue-500">
                    <a href="{{route('federation.create')}}" class="text-white">NOVA FEDERAÇÃO</a>
                </div>
                <div class="bg-white shadow-md rounded my-6">
                    <table class="min-w-max w-full table-fixed">
                        <thead>
                            <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                                <th class="py-3 px-6 w-2/3 text-left">Nome</th>
                                <th class="py-3 px-6 w-1/6 text-left">UF</th>
                                <th class="py-3 px-6 w-1/6 text-center">Ações</th>
                            </tr>
                        </thead>
                        <tbody class="text-gray-600 text-sm font-light">
                            @if(count($federations) == 0)
                                <tr>
                                    <td>Não existe federação cadastrada</td>
                                </tr>
                            @else
                                @foreach($federations as $federation)
                                    <tr class="border-b border-gray-200 hover:bg-gray-100">
                                        <td class="py-3 px-6 text-left whitespace-nowrap">
                                            <div class="flex items-center">
                                                <span class="font-medium">{{ $federation->name }}</span>
                                            </div>
                                        </td>
                                        <td class="py-3 px-6 text-left">
                                            <div class="flex items-center">
                                                <span>{{ $federation->uf }}</span>
                                            </div>
                                        </td>
                                        <td class="py-3 px-6 text-center">
                                            <div class="flex item-center justify-center">
                                                <a href="{{route('federation.edit', ['id' => $federation->id])}}">
                                                    <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                                        <x-icon-edit />
                                                    </div>
                                                </a>

                                                <form action="{{route('federation.destroy', ['id' => $federation->id])}}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button>
                                                        <div class="w-4 ml-5 transform hover:text-purple-500 hover:scale-110">
                                                            <x-icon-delete />
                                                        </div>
                                                    </button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            @endif
                        </tbody>
                    </table>
                </div>
                <div class="flex flex-col items-center my-12">
                    <div class="flex text-gray-700">
                        <a href="{{route('federation.index')}}?page={{ $federations->currentPage()-1 }}">
                            <div class="h-12 w-12 mr-1 flex justify-center items-center rounded-full bg-gray-200 cursor-pointer">
                                <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-left w-6 h-6">
                                    <polyline points="15 18 9 12 15 6"></polyline>
                                </svg>
                            </div>
                        </a>
                        <div class="flex h-12 font-medium rounded-full bg-gray-200">
                            @for ($i = 1; $i <= $federations->lastPage(); $i++)
                                @if ($i == $federations->currentPage())
                                    <div class="w-12 md:flex justify-center items-center hidden cursor-pointer leading-5 transition duration-150 ease-in  rounded-full bg-blue-600 text-white ">
                                        {{ $i }}
                                    </div>
                                @else
                                    <div class="w-12 md:flex justify-center items-center hidden  cursor-pointer leading-5 transition duration-150 ease-in  rounded-full hover:bg-gray-300">
                                        <a href="{{route('federation.index')}}?page={{ $i }}">{{ $i }}</a>
                                    </div>
                                @endif
                            @endfor
                            <div class="w-12 h-12 md:hidden flex justify-center items-center cursor-pointer leading-5 transition duration-150 ease-in rounded-full bg-blue-600 text-white">{{ $federations->currentPage() }}</div>
                        </div>
                        <a href="{{route('federation.index')}}?page={{ $federations->currentPage()+1 }}">
                            <div class="h-12 w-12 ml-1 flex justify-center items-center rounded-full bg-gray-200 cursor-pointer">
                                <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right w-6 h-6">
                                    <polyline points="9 18 15 12 9 6"></polyline>
                                </svg>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
