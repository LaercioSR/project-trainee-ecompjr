<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Cadastrar Empresa Júnior') }}
        </h2>
    </x-slot>

    <div class="overflow-x-auto">
        <div class="min-w-screen min-h-screen bg-gray-100 flex items-center justify-center bg-gray-100 font-sans overflow-hidden">
            <div class="w-full lg:w-5/6">
                <div class="bg-white shadow rounded-lg p-6">
                    <form action="{{route('junior_enterprise.store')}}" method="POST">
                        @csrf
                        <div class="grid lg:grid-cols-2 gap-6">
                            <div class="border focus-within:border-blue-500 focus-within:text-blue-500 transition-all duration-500 relative rounded p-1">
                                <div class="-mt-4 absolute tracking-wider px-1 uppercase text-xs">
                                    <p>
                                        <label for="name" class="bg-white text-gray-600 px-1">Nome *</label>
                                    </p>
                                </div>
                                <p>
                                    <input name="name" id="name" autocomplete="false" tabindex="0" type="text" class="py-1 px-1 text-gray-900 outline-none block h-full w-full" required>
                                </p>
                            </div>
                            <div class="border focus-within:border-blue-500 focus-within:text-blue-500 transition-all duration-500 relative rounded p-1">
                                <div class="-mt-4 absolute tracking-wider px-1 uppercase text-xs">
                                    <p>
                                        <label for="federation" class="bg-white text-gray-600 px-1">Federação *</label>
                                    </p>
                                </div>
                                <p>
                                    <select name="federation" id="federation" tabindex="0" class="py-1 px-1 outline-none block h-full w-full" required>
                                        @foreach($federations as $federation)
                                            <option value="{{ $federation->id }}">{{ $federation->name }}</option>
                                        @endforeach
                                    </select>
                                </p>
                            </div>
                        </div>
                        <div class="border-t mt-6 pt-3">
                            <button type="submit" class="rounded text-gray-100 px-3 py-1 bg-blue-500 hover:shadow-inner hover:bg-blue-700 transition-all duration-300">
                                Salvar
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
