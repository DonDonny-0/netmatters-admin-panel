<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreEmployeeRequest;
use App\Models\Company;
use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $employee_details = DB::table('companies')
            ->join('employees', 'employees.company_id', '=', 'companies.id')
            ->select('companies.name', 'employees.*')
            ->paginate(10);

        return view('employee.index', [
            'employees' => $employee_details,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $companies = DB::table('companies')->get();

        return view('employee.create', [
            'companies' => $companies,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreEmployeeRequest $request)
    {

        Employee::create([
            'first_name' => request('first_name'),
            'last_name' => request('last_name'),
            'personal_email' => request('personal_email'),
            'phone' => request('phone'),
            'company_id' => request('company_id'),
        ]);

        return redirect('/');
    }

    /**
     * Display the specified resource.
     */
    public function show(Employee $employee)
    {
        $company = Company::all()->find($employee->company_id);

        return view('employee.show', [
            'employee' => $employee,
            'company' => $company,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Employee $employee)
    {
        return view('employee.edit', [
            'employee' => $employee
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Employee $employee)
    {
        $employee->update([
            'first_name' => request('first_name'),
            'last_name' => request('last_name'),
            'personal_email' => request('personal_email'),
            'phone' => request('phone'),
            'company_id' => request('company_id'),
        ]);

        return redirect('/employees/' . $employee->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Employee $employee)
    {
        $employee->delete();

        return redirect('/');
    }
}
