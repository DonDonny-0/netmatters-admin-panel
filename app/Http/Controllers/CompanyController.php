<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Http\Requests\StoreCompanyRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $companies = DB::table('companies')->paginate(10);

        return view('company.index', [
            'companies' => $companies
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('company.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCompanyRequest $request)
    {

        Company::create([
            'name' => request('name'),
            'logo' => request('logo'),
            'email' => request('email'),
            'website' => request('website'),
        ]);

        return redirect('/');
    }
    /**
     * Display the specified resource.
     */
    public function show(Company $company)
    {
        $pageEmployees = DB::table('employees')
            ->leftJoin('companies', 'companies.id', '=', 'employees.company_id')
            ->where('employees.company_id', '=', $company->id)
            ->select('employees.*', 'companies.name')
            ->paginate(6);

        $totalEmployees = DB::table('employees')
            ->leftJoin('companies', 'companies.id', '=', 'employees.company_id')
            ->where('employees.company_id', '=', $company->id)->get();

        return view('company.show', [
            'company' => $company,
            'pageEmployees' => $pageEmployees,
            'totalEmployees' => $totalEmployees
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Company $company)
    {
        return view('company.edit', [
            'company' => $company
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Company $company)
    {
        $company->update([
            'name' => request('name'),
            'email' => request('email'),
            'website' => request('website'),
            'logo' => request('logo')
        ]);

        return redirect('/companies/' . $company->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Company $company)
    {
        $company->delete();

        return redirect('/');
    }
}
