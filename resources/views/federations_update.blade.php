<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Editar Federação') }}
        </h2>
    </x-slot>

    <div class="overflow-x-auto">
        <div class="min-w-screen min-h-screen bg-gray-100 flex items-center justify-center bg-gray-100 font-sans overflow-hidden">
            <div class="w-full lg:w-5/6">
                <div class="bg-white shadow rounded-lg p-6">
                    <form action="{{route('federation.update', ['id' => request()->id ])}}" method="POST">
                        @csrf
                        <div class="grid lg:grid-cols-2 gap-6">
                            <div class="border focus-within:border-blue-500 focus-within:text-blue-500 transition-all duration-500 relative rounded p-1">
                                <div class="-mt-4 absolute tracking-wider px-1 uppercase text-xs">
                                    <p>
                                        <label for="name" class="bg-white text-gray-600 px-1">Nome *</label>
                                    </p>
                                </div>
                                <p>
                                    <input value="{{ $federation->name }}" name="name" id="name" autocomplete="false" tabindex="0" type="text" class="py-1 px-1 text-gray-900 outline-none block h-full w-full" required>
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
                                        <option value="AC" {{ $federation->uf == "AC" ? "selected" : ""}}>Acre</option>
                                        <option value="AL" {{ $federation->uf == "AL" ? "selected" : ""}}>Alagoas</option>
                                        <option value="AM" {{ $federation->uf == "AM" ? "selected" : ""}}>Amazonas</option>
                                        <option value="AP" {{ $federation->uf == "AP" ? "selected" : ""}}>Amapá</option>
                                        <option value="BA" {{ $federation->uf == "BA" ? "selected" : ""}}>Bahia</option>
                                        <option value="CE" {{ $federation->uf == "CE" ? "selected" : ""}}>Ceará</option>
                                        <option value="DF" {{ $federation->uf == "DF" ? "selected" : ""}}>Distrito Federal</option>
                                        <option value="ES" {{ $federation->uf == "ES" ? "selected" : ""}}>Espírito Santo</option>
                                        <option value="GO" {{ $federation->uf == "GO" ? "selected" : ""}}>Goiás</option>
                                        <option value="MA" {{ $federation->uf == "MA" ? "selected" : ""}}>Maranhão</option>
                                        <option value="MG" {{ $federation->uf == "MG" ? "selected" : ""}}>Minas Gerais</option>
                                        <option value="MS" {{ $federation->uf == "MS" ? "selected" : ""}}>Mato Grosso do Sul</option>
                                        <option value="MT" {{ $federation->uf == "MT" ? "selected" : ""}}>Mato Grosso</option>
                                        <option value="PA" {{ $federation->uf == "PA" ? "selected" : ""}}>Pará</option>
                                        <option value="PB" {{ $federation->uf == "PB" ? "selected" : ""}}>Paraíba</option>
                                        <option value="PE" {{ $federation->uf == "PE" ? "selected" : ""}}>Pernambuco</option>
                                        <option value="PI" {{ $federation->uf == "PI" ? "selected" : ""}}>Piauí</option>
                                        <option value="PR" {{ $federation->uf == "PR" ? "selected" : ""}}>Paraná</option>
                                        <option value="RJ" {{ $federation->uf == "RJ" ? "selected" : ""}}>Rio de Janeiro</option>
                                        <option value="RN" {{ $federation->uf == "RN" ? "selected" : ""}}>Rio Grande do Norte</option>
                                        <option value="RO" {{ $federation->uf == "RO" ? "selected" : ""}}>Rondônia</option>
                                        <option value="RR" {{ $federation->uf == "RR" ? "selected" : ""}}>Roraima</option>
                                        <option value="RS" {{ $federation->uf == "RS" ? "selected" : ""}}>Rio Grande do Sul</option>
                                        <option value="SC" {{ $federation->uf == "SC" ? "selected" : ""}}>Santa Catarina</option>
                                        <option value="SE" {{ $federation->uf == "SE" ? "selected" : ""}}>Sergipe</option>
                                        <option value="SP" {{ $federation->uf == "SP" ? "selected" : ""}}>São Paulo</option>
                                        <option value="TO" {{ $federation->uf == "TO" ? "selected" : ""}}>Tocantins</option>
                                    </select>
                                </p>
                            </div>
                        </div>
                        <div class="border-t mt-6 pt-3">
                            @method('PUT')
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
