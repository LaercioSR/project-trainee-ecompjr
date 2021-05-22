<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Cadastrar Federação') }}
        </h2>
    </x-slot>

    <div class="overflow-x-auto">
        <div class="min-w-screen min-h-screen bg-gray-100 flex items-center justify-center bg-gray-100 font-sans overflow-hidden">
            <div class="w-full lg:w-5/6">
                <div class="bg-white shadow rounded-lg p-6">
                    <form action="{{route('federation.store')}}" method="POST">
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
                                        <label for="uf" class="bg-white text-gray-600 px-1">Estado *</label>
                                    </p>
                                </div>
                                <p>
                                    <select name="uf" id="uf" tabindex="0" class="py-1 px-1 outline-none block h-full w-full" required>
                                        <option value="AC">Acre</option>
                                        <option value="AL">Alagoas</option>
                                        <option value="AM">Amazonas</option>
                                        <option value="AP">Amapá</option>
                                        <option value="BA">Bahia</option>
                                        <option value="CE">Ceará</option>
                                        <option value="DF">Distrito Federal</option>
                                        <option value="ES">Espírito Santo</option>
                                        <option value="GO">Goiás</option>
                                        <option value="MA">Maranhão</option>
                                        <option value="MG">Minas Gerais</option>
                                        <option value="MS">Mato Grosso do Sul</option>
                                        <option value="MT">Mato Grosso</option>
                                        <option value="PA">Pará</option>
                                        <option value="PB">Paraíba</option>
                                        <option value="PE">Pernambuco</option>
                                        <option value="PI">Piauí</option>
                                        <option value="PR">Paraná</option>
                                        <option value="RJ">Rio de Janeiro</option>
                                        <option value="RN">Rio Grande do Norte</option>
                                        <option value="RO">Rondônia</option>
                                        <option value="RR">Roraima</option>
                                        <option value="RS">Rio Grande do Sul</option>
                                        <option value="SC">Santa Catarina</option>
                                        <option value="SE">Sergipe</option>
                                        <option value="SP">São Paulo</option>
                                        <option value="TO">Tocantins</option>
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
