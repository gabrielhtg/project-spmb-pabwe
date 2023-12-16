<?php

namespace App\Http\Controllers;

use App\Models\AdminModel;
use App\Models\EmailModel;
use App\Models\NomorTeleponModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;

class AdminController extends Controller
{
    public function addAdmin(Request $request)
    {
        $activeAdmin = Auth::user();
        $profile_pict = '';

        if ($request->profile_pict) {
            $request->validate([
                'username' => [
                    'required',
                    'max:20',
                    Rule::unique('admin', 'username'),
                ],
                'password' => 'required',
                'firstname' => 'required',
                'lastname' => 'required',
                'profile_pict' => 'image|mimes:jpeg,png,jpg|max:1024',
            ]);

            // Mengambil file yang sudah divalidasi dari request
            $photo = $request->file('profile_pict');

            // Membuat nama unik untuk file yang diunggah
            $filename = $request->username . '_profile_pict.' . $photo->getClientOriginalExtension();

            // Menentukan direktori tempat penyimpanan file di dalam direktori 'public'
            $directory = public_path('assets/img/admin/');

            //Pindahkan file ke direktori yang diinginkan
            $photo->move($directory, $filename);

            $profile_pict = 'assets/img/admin/' . $filename;
        }

        else {
            $request->validate([
                'username' => [
                    'required',
                    'max:20',
                    Rule::unique('admin', 'username'),
                ],
                'password' => 'required',
                'firstname' => 'required',
                'lastname' => 'required',
            ]);
        }

        try {
            AdminModel::create([
                'password' => Hash::make($request->password),
                'firstname' => $request->firstname,
                'lastname' => $request->lastname,
                'created_by' => $activeAdmin->username,
                'username' => $request->username,
                'profile_pict' => $profile_pict,
                'created_at' => now(),
                'udpated_at' => now()
            ]);
        } catch (\Exception $e) {
            return redirect()->route('admins');
        }

        return redirect()->route('admins');
    }

    public function editAdmin(Request $request)
    {
        $admin = AdminModel::where('id', Auth::user()->id)->first();

        if ($request->profile_pict) {
            $request->validate([
                'profile_pict' => 'image|mimes:jpeg,png,jpg|max:1024',
            ]);

            // Mengambil file yang sudah divalidasi dari request
            $photo = $request->file('profile_pict');

            // Membuat nama unik untuk file yang diunggah
            $filename = $request->username . '_profile_pict.' . $photo->getClientOriginalExtension();

            // Menentukan direktori tempat penyimpanan file di dalam direktori 'public'
            $directory = public_path('assets/img/admin/');

            //Pindahkan file ke direktori yang diinginkan
            $photo->move($directory, $filename);

            $profile_pict = 'assets/img/admin/' . $filename;
            $admin->profile_pict = $profile_pict;

        }

        $admin->username = $request->username;
        $admin->firstname = $request->firstname;
        $admin->lastname = $request->lastname;
        $admin->updated_at = now();

        $admin->save();

        return redirect()->back();
    }

    public function removeAdmin(Request $request)
    {
        $selectedAdmin = AdminModel::where('id', $request->id)->first();

        $selectedAdmin->delete();

        return redirect()->route('admins');
    }

    public function removeSelf(Request $request)
    {
        $selectedAdmin = AdminModel::where('id', Auth::user()->id)->first();

        if (Hash::check($request->verifikasi_password, $selectedAdmin->password)) {
            if ($selectedAdmin->profile_pict && file_exists($selectedAdmin->profile_pict)) {
                unlink($selectedAdmin->profile_pict);
            }
            $selectedAdmin->delete();

            return redirect()->route('logout');
        }

        return redirect()->route('edit-profile')->with('error', "Gagal Menghapus Akun!");
    }

    public function changeAdminPassword(Request $request)
    {
        $request->validate([
            'oldPassword' => "max:80|required",
            'newPassword' => "max:80|required|min:5",
            'newRePassword' => "max:80|required|min:5",
        ]);

        $admin = AdminModel::where('id', Auth::user()->id)->first();

        if (Hash::check($request->oldPassword, $admin->password)) {
            if ($request->newPassword === $request->newRePassword) {
                $admin->password = Hash::make($request->newPassword);

                $admin->update();

                return redirect()->route('logout');
            }
        }

        return redirect()->route('edit-profile')->with('error', "Gagal Mengganti Password!");
    }

    public function editNomorTelepon (Request $request) {
        $request->validate([
            'nama' => 'required|string|max:20',
            'nomor_telepon' => 'required|max:15'
        ]);

        $data = NomorTeleponModel::where("id", $request->id)->first();

        $data->nama = $request->nama;
        $data->nomor_telepon = $request->nomor_telepon;
        $data->updated_by = Auth::user()->username;
        $data->updated_at = now();

        $data->update();

        return redirect()->route('admin-panel');
    }

    public function addEmail (Request $request) {
        $request->validate([
            'namaEmail' => 'required|max:20',
            'email' => 'required|max:50'
        ]);

        EmailModel::create([
            'nama' => $request->namaEmail,
            'email' => $request->email,
            'created_at' => now(),
            'updated_at' => now(),
            'created_by' => Auth::user()->username,
            'updated_by' => Auth::user()->username,
        ]);

        return redirect()->route('admin-panel');
    }

    public function removeEmail (Request $request) {
        EmailModel::where('id', $request->id)->first()->delete();

        return redirect()->route('admin-panel');
    }

    public function editEmail (Request $request) {
        $request->validate([
            'inputNamaEmail' => 'required|max:20',
            'email' => 'required|max:50'
        ]);

        $data = EmailModel::where("id", $request->id)->first();

        $data->nama = $request->inputNamaEmail;
        $data->email = $request->email;
        $data->updated_by = Auth::user()->username;
        $data->updated_at = now();

        $data->update();

        return redirect()->route('admin-panel');
    }
}
