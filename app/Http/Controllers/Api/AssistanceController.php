<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\Company;
use App\Models\Assistance;


class AssistanceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    { {
            $assistances = Assistance::all();
            $company = Company::first();
            return view('assistance.index', compact('assistances', 'company'));
        }
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
        $assistance = Assistance::with('employee')->findOrFail($id);
        $company = Company::first();
        return view('assistance.show', compact('assistance', 'company'));
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
}
