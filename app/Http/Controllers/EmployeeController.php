<?php

namespace App\Http\Controllers;
use Illuminate\View\View;
use App\Http\Controllers\Controller;
use App\Models\Employee;
// use Illuminate\Contracts\View\View as ViewView;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $employees = Employee::all();
        return view ('employees.index')->with('employees', $employees);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('employees.create');
    }
  
    public function store(Request $request): RedirectResponse
    {
        $input = $request->all();
        Employee::create($input);
        return redirect('Employees')->with('flash_message', 'Employee Added !');
    }
    public function show(string $id): View
    {
        $employee = Employee::find($id);
        return view('Employees.show')->with('employees', $employee);
    }
    public function edit(string $id): View
    {
        $employee = Employee::find($id);
        return view('Employees.edit')->with('employees', $employee);
    }
    public function update(Request $request, string $id): RedirectResponse
    {
        $employee = Employee::find($id);
        $input = $request->all();
        $employee->update($input);
        return redirect('Employees')->with('flash_message', 'Employee Updated!');  
    }
    
    public function destroy(string $id): RedirectResponse
    {
        Employee::destroy($id);
        return redirect('Employees')->with('flash_message', 'Employee deleted!'); 
    }
}