@extends('admin.layout')

@section('content')

<h1 class="text-4xl font-bold mb-8">
    📊 Dashboard Admin
</h1>

<div class="grid md:grid-cols-4 gap-6">

    <div class="bg-slate-800 rounded-2xl p-6">

        <h3 class="text-lg text-gray-400">
            Total Sponsor
        </h3>

        <p class="text-4xl font-bold mt-2">
            120
        </p>

    </div>

    <div class="bg-slate-800 rounded-2xl p-6">

        <h3 class="text-lg text-gray-400">
            Sponsor Diamond
        </h3>

        <p class="text-4xl font-bold mt-2 text-cyan-400">
            10
        </p>

    </div>

    <div class="bg-slate-800 rounded-2xl p-6">

        <h3 class="text-lg text-gray-400">
            Sponsor Platinum
        </h3>

        <p class="text-4xl font-bold mt-2 text-yellow-400">
            30
        </p>

    </div>

    <div class="bg-slate-800 rounded-2xl p-6">

        <h3 class="text-lg text-gray-400">
            Sponsor Gold
        </h3>

        <p class="text-4xl font-bold mt-2 text-orange-400">
            80
        </p>

    </div>

</div>

<div class="grid md:grid-cols-2 gap-6 mt-8">

    <div class="bg-slate-800 p-6 rounded-2xl">

        <h2 class="text-2xl font-bold mb-4">
            📈 Statistik Website
        </h2>

        <ul class="space-y-3">

            <li>
                👤 Visitor Hari Ini :
                <strong>1.245</strong>
            </li>

            <li>
                👤 Visitor Bulan Ini :
                <strong>25.412</strong>
            </li>

            <li>
                📱 Klik WhatsApp :
                <strong>8.930</strong>
            </li>

            <li>
                👥 Klik Grup WA :
                <strong>4.320</strong>
            </li>

        </ul>

    </div>

    <div class="bg-slate-800 p-6 rounded-2xl">

        <h2 class="text-2xl font-bold mb-4">
            🚀 Menu Cepat
        </h2>

        <div class="grid grid-cols-2 gap-4">

            <a
                href="/admin/sponsors/create"
                class="bg-green-600 p-4 rounded-xl text-center"
            >
                ➕ Sponsor
            </a>

            <a
                href="/admin/accounts/create"
                class="bg-blue-600 p-4 rounded-xl text-center"
            >
                🎮 Akun
            </a>

            <a
                href="/admin/sponsors"
                class="bg-yellow-600 p-4 rounded-xl text-center"
            >
                ⭐ Data Sponsor
            </a>

            <a
                href="/"
                target="_blank"
                class="bg-purple-600 p-4 rounded-xl text-center"
            >
                🌍 Website
            </a>

        </div>

    </div>

</div>

@endsection
