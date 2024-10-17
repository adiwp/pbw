<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}
                </div>
                <div class="container">
                <style>
                        .container {
                            padding: 20px;
                        }

                        ul {
                            list-style: none;
                            padding: 0;
                        }

                        ul li {
                            margin: 10px 0;
                            padding-left: 25px;
                            background: url('https://img.icons8.com/emoji/48/soccer-ball-emoji.png') no-repeat left center;
                            background-size: 20px;
                        }
                    </style>
                    <p>Selamat datang, {{ Auth::user()->name }}!</p>

                    <h2>Daftar Pemain Bola</h2>
                    <ul>
                        @foreach($players as $player)
                            <li>{{ $player }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
