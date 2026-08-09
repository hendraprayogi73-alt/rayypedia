@extends('admin.layout')

@section('content')

<h1 class="text-3xl mb-5">

Tambah Sponsor

</h1>

<form
action="/admin/sponsors"
method="POST"
enctype="multipart/form-data">

@csrf

<input
type="text"
name="name"
placeholder="Nama Sponsor"
class="w-full p-3 bg-slate-800 mb-3 rounded">

<input
type="text"
name="whatsapp"
placeholder="628xxxxxxxx"
class="w-full p-3 bg-slate-800 mb-3 rounded">

<input
type="text"
name="group_link"
placeholder="Link Grup"
class="w-full p-3 bg-slate-800 mb-3 rounded">

<select
name="package"
class="w-full p-3 bg-slate-800 mb-3 rounded">

<option value="diamond">
Diamond
</option>

<option value="platinum">
Platinum
</option>

<option value="gold">
Gold
</option>

</select>

<textarea
name="description"
class="w-full p-3 bg-slate-800 mb-3 rounded">

</textarea>

<input
type="file"
name="logo"
class="mb-3">

<button
class="bg-green-500 px-6 py-3 rounded">

Simpan

</button>

</form>

@endsection
