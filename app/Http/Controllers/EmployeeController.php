<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EmployeeController extends Controller
{
    public function index() {
        //get data from employee table
        $employee = DB::table('employee')->get();

        //send employee data to view index
        return view('index',['employee' => $employee]);
        
        // $name = "Try Anugrah Romadhan";
        // $biodata = ["NIK : 12345", "Address : Jend. Sudirman Street", "Phone : 08123456789"];

        // return view('view_data', ['name' => $name, 'biodata' => $biodata]);
    }

    // this method is use for add data to employee table
    public function add() {
        //call view function add
        return view('add');
    }

    // this method is use for insert data to employee table
    public function store(Request $request) {
        
        // insert data to employee table
        DB::table('employee')->insert([
            'employee_name' => $request->name,
            'employee_position' => $request->position,
            'employee_age' => $request->age,
            'employee_address' => $request->address
        ]);

        // send back page to employee page
        return redirect('/employee');
    }

    // this method is use for edit data from employee table
    public function edit($id) {
        // get employee data from id employee
        $employee = DB::table('employee')->where('employee_id', $id)->get();
        // passing employee data from database to edit.blade.php view page
        return view('edit',['employee' => $employee]);
    }

    // this method is use for update employee data
    public function update(Request $request) {
        // update employee data
        DB::table('employee')->where('employee_id',$request->id)->update([
            'employee_name' => $request->name,
            'employee_position' => $request->position,
            'employee_age' => $request->age,
            'employee_address' => $request->address
        ]);

        // send back page to employee page
        return redirect('/employee');
    }

    //this method is use for delete employee data
    public function delete($id) {

        //delete employee data by id
        DB::table('employee')->where('employee_id', $id)->delete();

        // send back page to employee page
        return redirect('/employee');
    }
}
