<?php

namespace App\Http\Controllers;

use App\Models\Major;
use App\Models\Employee;
use Illuminate\Http\Request;
use App\Models\data_institusi;

class EmployeeController extends Controller
{
    public function getEmployee () {
        $dataInstitusi = data_institusi::where('id', 1)->first();

        $employee = Employee::with('major')->get();

        $data = [
            'dataInstitusi' => $dataInstitusi,
            'employees' => $employee,
        ];

        return view('program.prodi', $data);
    }

    public function store(Request $request)
    {
        $request->validate([
            'kode_prodi' => 'required',
            'nama' => 'required',
            'nidn' => 'required',
            'jabatan' => 'required',
            'pendidikan' => 'required',
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif|max:5120', 
        ]);

        $extension = $request->file('gambar')->getClientOriginalExtension();
        $gambarPath = $request->nama.'-'.now()->timestamp.'.'.$extension;
        $request->file('gambar')->storeAs('img/program', $gambarPath);
        // $gambarPath = $request->file('gambar')->store('img/program', 'public');
        

        // Create a new Faculty instance
        $employee = new Employee([
            'kode_prodi' => $request->get('kode_prodi'),
            'nama' => $request->get('nama'),
            'nidn' => $request->get('nidn'),
            'jabatan' => $request->get('jabatan'),
            'pendidikan' => $request->get('pendidikan'),
            'gambar' => $gambarPath, 
        ]);

        $employee->save();

        return redirect('admin-panel/program')->with('success', 'Employee added successfully!');
    }

    public function update(Request $request, String $id)
    {
        $request->validate([
            'kode_prodi' => 'required',
            'nama' => 'required',
            'nidn' => 'required',
            'jabatan' => 'required',
            'pendidikan' => 'required',
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif|max:5120', 
        ]);

        // dd($request);

        $employee = Employee::findOrFail($id);

        $extension = $request->file('gambar')->getClientOriginalExtension();
        $gambarPath = $request->nama.'-'.now()->timestamp.'.'.$extension;
        $request->file('gambar')->storeAs('img/program', $gambarPath);

        $updatedEmployee = [
            'kode_prodi' => $request->get('kode_prodi'),
            'nama' => $request->get('nama'),
            'nidn' => $request->get('nidn'),
            'jabatan' => $request->get('jabatan'),
            'pendidikan' => $request->get('pendidikan'),
            'gambar' => $gambarPath, 
        ];

        $employee->update([
            'kode_prodi' => $request->get('kode_prodi'),
            'nama' => $request->get('nama'),
            'nidn' => $request->get('nidn'),
            'jabatan' => $request->get('jabatan'),
            'pendidikan' => $request->get('pendidikan'),
            'gambar' => $gambarPath, 
        ]);

        return redirect('admin-panel/program')->with('success', 'Employee updated successfully!');
    }

    public function destroy(String $id)
    {
        $employee = Employee::find($id);

        // dd($employee);

        if (!$employee) {
            return redirect('admin-panel/program')->with('error', 'Employee not found!');
        }

        // Additional logic (e.g., delete related records) if needed

        $employee->delete();

        return redirect('admin-panel/program')->with('success', 'Employee deleted successfully!');
    }
}
