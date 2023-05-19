<?php

namespace App\Http\Controllers;

use App\Models\SecurityGuard;
use Illuminate\Http\Request;

class GuardController extends Controller
{
    // menampilkan data
    public function index()
    {
        $securitys = SecurityGuard::all();
        return view('backend.security.index', compact('securitys'));
    }

    public function create()
    {
        return view('backend.security.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'nomor_identitas' => 'required',
            'alamat' => 'required',
            'nomor_hp' => 'required',
        ]);

        SecurityGuard::create($request->all());

        return redirect()->route('security.index')
            ->with('success', 'Data SecurityGuard baru telah berhasil disimpan');
    }

    public function edit($id)
    {
        $security = SecurityGuard::find($id);
        return view('backend.security.edit', compact('security'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required',
            'nomor_identitas' => 'required',
            'alamat' => 'required',
            'nomor_hp' => 'required',
        ]);

        $security = SecurityGuard::find($id);
        $security->update($request->all());

        return redirect()->route('security.index')
            ->with('success', 'Data SecurityGuard telah berhasil diperbarui');
    }

    public function destroy($id)
    {
        $security = SecurityGuard::find($id);
        $security->delete();

        return redirect()->route('security.index')
            ->with('success', 'Data SecurityGuard telah berhasil dihapus');
    }
}
