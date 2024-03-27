<?php

namespace App\Http\Controllers;

use App\Models\note;
use Illuminate\Http\Request;

class NoteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return 'index';
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return 'create';
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return 'store';
    }

    /**
     * Display the specified resource.
     */
    public function show(note $note)
    {
        return 'show';
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(note $note)
    {
        return 'edit';
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, note $note)
    {
        return 'update';
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(note $note)
    {
        return 'destroy';
    }
}
