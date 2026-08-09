<!DOCTYPE html>
<html>

<head>

<title>Admin Panel</title>

<script src="https://cdn.tailwindcss.com"></script>

</head>

<body class="bg-slate-950 text-white">

<div class="flex">

<aside
class="w-64 min-h-screen bg-slate-900 p-5">

<h2 class="text-xl font-bold">

ADMIN PANEL

</h2>

<ul class="mt-5">

<li>
<a href="/admin/sponsors">
Sponsor
</a>
</li>

</ul>

</aside>

<main
class="flex-1 p-6">

@yield('content')

</main>

</div>

</body>

</html>
