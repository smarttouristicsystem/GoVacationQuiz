<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
<<<<<<< HEAD
use App\Models\Company;
use App\Models\Employee;
use App\Models\Assistance;
=======
use App\Models\Category;
use App\Models\Employee;
>>>>>>> 8bb4c43b877eae3f52c8d84d69ea1b2c8d532118

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
<<<<<<< HEAD
        $employees = Employee::all();
        $company = Company::first();
        $assistance = Assistance::all();
        return view('employees.index', compact('employees', 'company', 'assistance'));
=======
        //
>>>>>>> 8bb4c43b877eae3f52c8d84d69ea1b2c8d532118
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
}
