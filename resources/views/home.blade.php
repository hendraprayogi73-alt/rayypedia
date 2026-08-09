<!DOCTYPE html>
<html>

<head>

<title>Marketplace Akun Game</title>

<script src="https://cdn.tailwindcss.com"></script>

</head>

<body class="bg-slate-950 text-white">

<header class="bg-slate-900 p-5">

<div class="container mx-auto flex justify-between">

<h1 class="text-2xl font-bold">

🎮 Marketplace Akun Game

</h1>

<div>

👤 Visitor 263.707

</div>

</div>

</header>

<section class="container mx-auto p-5">

<div
class="rounded-3xl overflow-hidden">

<img
src="/banner.jpg"
class="w-full">

</div>

</section>

<section class="container mx-auto p-5">

<h2
class="text-3xl font-bold mb-5">

💎 Sponsor Diamond

</h2>

<div
class="grid md:grid-cols-3 gap-5">

@foreach($diamond as $sponsor)

<div
class="bg-slate-800 p-5 rounded-2xl">

<img
src="{{ $sponsor->logo }}"
class="w-24 h-24 rounded-xl">

<h3
class="mt-3 text-xl">

{{ $sponsor->name }}

</h3>

<a
href="https://wa.me/{{ $sponsor->whatsapp }}"
class="block mt-3 bg-green-500 text-center p-2 rounded-xl">

WhatsApp

</a>

@if($sponsor->group_link)

<a
href="{{ $sponsor->group_link }}"
class="block mt-2 bg-blue-500 text-center p-2 rounded-xl">

Grup WA

</a>

@endif

</div>

@endforeach

</div>

</section>

<section class="container mx-auto p-5">

<h2
class="text-3xl font-bold mb-5">

🔥 Akun Terbaru

</h2>

<div
class="grid md:grid-cols-4 gap-5">

@foreach($accounts as $account)

<div
class="bg-slate-800 p-4 rounded-2xl">

<img
src="{{ $account->thumbnail }}"
class="rounded-xl">

<h3
class="mt-3">

{{ $account->title }}

</h3>

<p>

Prime :
{{ $account->prime_level }}

</p>

<p>

Rp
{{ number_format($account->price) }}

</p>

</div>

@endforeach

</div>

</section>

</body>
</html>
