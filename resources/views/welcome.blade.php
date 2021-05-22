<x-guest-layout>
    <body class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen sm:items-center py-4 sm:pt-0"  style="background-image: url('{{ asset('img/background.gif') }}'); background-repeat: no-repeat; background-attachment: fixed; background-size: 100% 100%;">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <x-button class="bg-blue-600 hover:bg-blue-700">
                            <a href="{{ url('/dashboard') }}" class="text-xs text-white">Dashboard</a>
                        </x-button>
                    @else
                        <x-button class="bg-blue-600 hover:bg-blue-700">
                            <a href="{{ route('login') }}" class="text-xs text-white">Entrar</a>
                        </x-button>

                        @if (Route::has('register'))
                            <x-button class="bg-blue-400 hover:bg-blue-500">
                                <a href="{{ route('register') }}" class="text-xs text-white">Registrar</a>
                            </x-button>
                        @endif
                    @endauth
                </div>
            @endif

            <h1 class="font-mono text-center text-9xl text-white">
                CONHEÇA O MOVIMENTO <span class="text-blue-600">EMPRESA JÚNIOR</span>
            </h1>

            </div>
        </div>
    </body>
</x-guest-layout>
