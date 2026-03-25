<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $admin = User::first();

        $new_companies = DB::table('companies')->limit(5)->orderBy('id', 'desc')->get();
        $companies = DB::table('companies')->get();
        $employees = DB::table('employees')->get();


        $new_employees = DB::table('companies')
            ->join('employees', 'employees.company_id', '=', 'companies.id')
            ->limit(5)->orderBy('id', 'desc')->select('employees.*', 'companies.name', 'companies.logo')->get();


        return view('admin.index',[
            'admin' => $admin,
            'employees' => $employees,
            'companies' => $companies,
            'new_companies' => $new_companies,
            'new_employees' => $new_employees,
        ]);
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
