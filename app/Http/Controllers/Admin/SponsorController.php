<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Sponsor;
use Illuminate\Http\Request;

class SponsorController extends Controller
{
    public function index()
    {
        $sponsors = Sponsor::latest()->get();

        return view(
            'admin.sponsors.index',
            compact('sponsors')
        );
    }

    public function create()
    {
        return view(
            'admin.sponsors.create'
        );
    }

    public function store(Request $request)
    {
        $logo = $request->file('logo')
            ->store(
                'sponsors',
                'public'
            );

        Sponsor::create([

            'name' => $request->name,
            'logo' => '/storage/' . $logo,
            'whatsapp' => $request->whatsapp,
            'group_link' => $request->group_link,
            'description' => $request->description,
            'package' => $request->package,
            'verified' => true

        ]);

        return redirect(
            '/admin/sponsors'
        );
    }

    public function destroy(Sponsor $sponsor)
    {
        $sponsor->delete();

        return back();
    }
}
