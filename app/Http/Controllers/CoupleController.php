<?php

namespace App\Http\Controllers;

use App\Models\Couple;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\CoupleRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class CoupleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $couples = Couple::paginate();

        return view('couple.index', compact('couples'))
            ->with('i', ($request->input('page', 1) - 1) * $couples->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $couple = new Couple();

        return view('couple.create', compact('couple'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CoupleRequest $request): RedirectResponse
    {
        Couple::create($request->validated());

        return Redirect::route('couples.index')
            ->with('success', 'Couple created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $couple = Couple::find($id);

        return view('couple.show', compact('couple'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $couple = Couple::find($id);

        return view('couple.edit', compact('couple'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CoupleRequest $request, Couple $couple): RedirectResponse
    {
        $couple->update($request->validated());

        return Redirect::route('couples.index')
            ->with('success', 'Couple updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        Couple::find($id)->delete();

        return Redirect::route('couples.index')
            ->with('success', 'Couple deleted successfully');
    }
}
