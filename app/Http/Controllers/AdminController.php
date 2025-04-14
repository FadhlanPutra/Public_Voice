<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function pengaduan(Request $request)
    {
        $tab = $request->get('tab', 'semua'); // Default ke 'semua' jika query tidak ada
        return view('admin.pengaduan', compact('tab'));
    }

    public function pengguna(Request $request)
    {
        $tab = $request->get('tab', 'admin'); // Default ke 'semua' jika query tidak ada
        return view('admin.pengguna', compact('tab'));
    }

    public function statistik(Request $request)
    {
        $tab = $request->get('tab'); // Default ke 'semua' jika query tidak ada
        return view('admin.statistik', compact('tab'));
    }
}
