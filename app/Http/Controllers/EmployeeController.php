<?php

namespace App\Http\Controllers;
use App\Http\Requests\StoreEmployee;
use Illuminate\Http\Request;
use \App\Models\Employee;
class EmployeeController extends Controller
{
     /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $employees = Employee::orderBy('created_at')->paginate(20);
        return view('employees/list', compact('employees'));
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
        $employee = Employee::findOrFail($id);
        return view('employees/details', compact('employee'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $employee = Employee::findOrFail($id);
        return view('employees/edit', compact('employee'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreEmployee $request, string $id)
    {
        $fields = $request->validated();
        $employee = Employee::findOrFail($id);
        $employee->update($fields);
        return redirect()->route('employees.index')->withSuccess('Record Updated Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
