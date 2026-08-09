@extends('admin.layout')

@section('content')

<div class="flex justify-between">

<h1 class="text-3xl">

Sponsor

</h1>

<a
href="/admin/sponsors/create"
class="bg-green-500 px-4 py-2 rounded">

Tambah Sponsor

</a>

</div>

<table
class="w-full mt-5">

<tr>

<th>Logo</th>
<th>Nama</th>
<th>Paket</th>
<th>Aksi</th>

</tr>

@foreach($sponsors as $sponsor)

<tr>

<td>

<img
src="{{ $sponsor->logo }}"
class="w-20">

</td>

<td>

{{ $sponsor->name }}

</td>

<td>

{{ $sponsor->package }}

</td>

<td>

<form
action="/admin/sponsors/{{ $sponsor->id }}"
method="POST">

@csrf
@method('DELETE')

<button
class="bg-red-500 px-3 py-1 rounded">

Hapus

</button>

</form>

</td>

</tr>

@endforeach

</table>

@endsection
