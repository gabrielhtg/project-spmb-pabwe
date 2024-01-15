<?php

namespace App\Http\Controllers;

use App\Models\Major;
use App\Models\Employee;
use Illuminate\Http\Request;
use App\Models\data_institusi;

use Illuminate\Validation\Rule;

class EmployeeController extends Controller
{
    public function getEmployee()
    {
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
            'kode_fakultas' => 'required',
            'kode_prodi' => [
                'required',
                Rule::exists('majors', 'kode_prodi')->where(function ($query) use ($request) {
                    $query->where('kode_fakultas', $request->get('kode_fakultas'));
                }),
            ],
            'nama' => 'required',
            'nidn' => 'required',
            'jabatan' => 'required',
            'pendidikan' => 'required',
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif|max:5120',
        ],[
            'kode_fakultas.required' => 'Kode Fakultas wajib diisi.',
            'kode_prodi.required' => 'Kode Prodi wajib diisi.',
            'kode_prodi.exists' => 'Kode Prodi yang dipilih tidak valid untuk Fakultas ini.',
            'nama.required' => 'Nama wajib diisi.',
            'nidn.required' => 'NIDN wajib diisi.',
            'jabatan.required' => 'Jabatan wajib diisi.',
            'pendidikan.required' => 'Pendidikan wajib diisi.',
            'gambar.required' => 'Gambar wajib diunggah.',
            'gambar.image' => 'File harus berupa gambar.',
            'gambar.mimes' => 'Format gambar tidak valid. Gunakan format jpeg, png, jpg, atau gif.',
            'gambar.max' => 'Ukuran gambar tidak boleh lebih dari 5 MB.',
        ]);

        // Cek apakah sudah ada Dekan untuk fakultas yang sama
        if ($request->get('jabatan') === 'Dekan') {
            $existingDekan = Employee::where('kode_fakultas', $request->get('kode_fakultas'))
                ->where('jabatan', 'Dekan')
                ->first();

            if ($existingDekan) {
                return redirect('admin-panel/program')->with('error', 'Dekan for this faculty already exists!');
            }
        }

        // Cek apakah sudah ada Kaprodi untuk program studi yang sama
        $existingKaprodi = Employee::where('kode_prodi', $request->get('kode_prodi'))
            ->where('jabatan', 'Kaprodi')
            ->first();

        if ($request->get('jabatan') === 'Kaprodi' && $existingKaprodi) {
            return redirect('admin-panel/program')->with('error', 'Kaprodi for this program already exists!');
        }

        if ($request->get('jabatan') === 'Rektor') {
            $existingRektor = Employee::where('jabatan', 'Rektor')->first();
            if ($existingRektor) {
                return redirect('admin-panel/program')->with('error', 'Rektor sudah ada!');
            }
        }

        // Proses penyimpanan gambar
        $extension = $request->file('gambar')->getClientOriginalExtension();
        $gambarPath = $request->nama . '-' . now()->timestamp . '.' . $extension;
        $request->file('gambar')->move(public_path('img/program/employee/'), $gambarPath);

        // Create a new Employee instance
        $employee = new Employee([
            'kode_fakultas' => $request->get('kode_fakultas'),
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
            'kode_fakultas' => 'required',
            'kode_prodi' => [
                'required',
                Rule::exists('majors', 'kode_prodi')->where(function ($query) use ($request) {
                    $query->where('kode_fakultas', $request->get('kode_fakultas'));
                }),
            ],
            'nama' => 'required',
            'nidn' => 'required',
            'jabatan' => 'required',
            'pendidikan' => 'required',
            'gambar' => 'image|mimes:jpeg,png,jpg,gif|max:5120',
        ],[
            'kode_fakultas.required' => 'Kode Fakultas wajib diisi.',
            'kode_prodi.required' => 'Kode Prodi wajib diisi.',
            'kode_prodi.exists' => 'Kode Prodi yang dipilih tidak valid untuk Fakultas ini.',
            'nama.required' => 'Nama wajib diisi.',
            'nidn.required' => 'NIDN wajib diisi.',
            'jabatan.required' => 'Jabatan wajib diisi.',
            'pendidikan.required' => 'Pendidikan wajib diisi.',
            'gambar.required' => 'Gambar wajib diunggah.',
            'gambar.image' => 'File harus berupa gambar.',
            'gambar.mimes' => 'Format gambar tidak valid. Gunakan format jpeg, png, jpg, atau gif.',
            'gambar.max' => 'Ukuran gambar tidak boleh lebih dari 5 MB.',
        ]);

        $employee = Employee::findOrFail($id);

        // Cek apakah sudah ada Dekan untuk fakultas yang sama
        if ($request->get('jabatan') === 'Dekan') {
            $existingDekan = Employee::where('kode_fakultas', $request->get('kode_fakultas'))
                ->where('jabatan', 'Dekan')
                ->where('id', '!=', $id)
                ->first();

            if ($existingDekan) {
                return redirect('admin-panel/program')->with('error', 'Dean for this faculty already exists!');
            }
        }

        // Cek apakah sudah ada Kaprodi untuk program studi yang sama
        $existingKaprodi = Employee::where('kode_prodi', $request->get('kode_prodi'))
            ->where('jabatan', 'Kaprodi')
            ->where('id', '!=', $id)
            ->first();

        if ($request->get('jabatan') === 'Kaprodi' && $existingKaprodi) {
            return redirect('admin-panel/program')->with('error', 'Kaprodi for this program already exists!');
        }

        if ($request->get('jabatan') === 'Rektor') {
            $existingRektor = Employee::where('jabatan', 'Rektor')->where('id', '!=', $id)->first();
            if ($existingRektor) {
                return redirect('admin-panel/program')->with('error', 'Rektor sudah ada!');
            }
        }

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
                    'kode_fakultas' => $request->get('kode_fakultas'),
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

    public function destroy(string $id)
    {
        $employee = Employee::find($id);

        if (!$employee) {
            return redirect('admin-panel/program')->with('error', 'Employee not found!');
        }

        // Additional logic (e.g., delete related records) if needed

        $employee->delete();

        return redirect('admin-panel/program')->with('success', 'Employee deleted successfully!');
    }
}