<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Admin Panel</title>

    <script src="https://cdn.tailwindcss.com"></script>

</head>

<body class="bg-slate-950 text-white">

<div class="flex">

    <!-- Sidebar -->
    <aside class="w-64 min-h-screen bg-slate-900 p-5">

        <h2 class="text-2xl font-bold mb-6">
            🎮 Admin Panel
        </h2>

        <ul class="space-y-3">

            <li>
                <a
                    href="/admin"
                    class="block bg-slate-800 p-3 rounded-lg hover:bg-slate-700"
                >
                    📊 Dashboard
                </a>
            </li>

            <li>
                <a
                    href="/admin/sponsors"
                    class="block bg-slate-800 p-3 rounded-lg hover:bg-slate-700"
                >
                    ⭐ Sponsor
                </a>
            </li>

            <li>
                <a
                    href="/admin/accounts"
                    class="block bg-slate-800 p-3 rounded-lg hover:bg-slate-700"
                >
                    🎮 Akun Game
                </a>
            </li>

            <li>
                <a
                    href="/"
                    target="_blank"
                    class="block bg-green-600 p-3 rounded-lg hover:bg-green-500"
                >
                    🌍 Lihat Website
                </a>
            </li>

        </ul>

    </aside>

    <!-- Content -->
    <main class="flex-1 p-8">

        @yield('content')

    </main>

</div>

</body>
</html>
