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
    $gambarPath = $request->nama . '-' . now()->timestamp . '.' . $extension;

    // Simpan gambar di direktori img/program/employee/
    $request->file('gambar')->move(public_path('img/program/employee/'), $gambarPath);

    // Create a new Employee instance
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
        'gambar' => 'image|mimes:jpeg,png,jpg,gif|max:5120',
    ]);

    $employee = Employee::findOrFail($id);

    try {
        // Simpan gambar baru jika ada
        if ($request->hasFile('gambar')) {
            $extension = $request->file('gambar')->getClientOriginalExtension();
            $gambarPath = $request->nama . '-' . now()->timestamp . '.' . $extension;

            // Pindahkan gambar baru ke direktori img/program/employee/
            $request->file('gambar')->move(public_path('img/program/employee/'), $gambarPath);

            // Hapus gambar lama jika ada
            if ($employee->gambar) {
                $gambarPathOld = public_path('img/program/employee/') . $employee->gambar;
                if (file_exists($gambarPathOld)) {
                    unlink($gambarPathOld);
                }
            }

            // Update data karyawan dengan gambar baru
            $employee->update([
                'kode_prodi' => $request->get('kode_prodi'),
                'nama' => $request->get('nama'),
                'nidn' => $request->get('nidn'),
                'jabatan' => $request->get('jabatan'),
                'pendidikan' => $request->get('pendidikan'),
                'gambar' => $gambarPath,
            ]);
        } else {
            // Jika tidak ada gambar baru, tidak perlu update gambar
            $employee->update([
                'kode_prodi' => $request->get('kode_prodi'),
                'nama' => $request->get('nama'),
                'nidn' => $request->get('nidn'),
                'jabatan' => $request->get('jabatan'),
                'pendidikan' => $request->get('pendidikan'),
            ]);
        }

        return redirect('admin-panel/program')->with('success', 'Employee updated successfully!');
    } catch (\Exception $e) {
        return redirect('admin-panel/program')->with('error', 'Error updating employee: ' . $e->getMessage());
    }
}
}
