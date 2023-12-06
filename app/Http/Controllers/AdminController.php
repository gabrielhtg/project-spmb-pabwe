<?php

namespace App\Http\Controllers;

use App\Models\AdminModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function addAdmin(Request $request)
    {
        $activeAdmin = Auth::user();
        $profile_pict = '';

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
        }

        AdminModel::create([
            'username' => $request->username,
            'password' => Hash::make($request->password),
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'created_by' => $activeAdmin->username,
            'profile_pict' => $profile_pict,
            'created_at' => now(),
            'udpated_at' => now()
        ]);

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
        $selectedAdmin = AdminModel::where('id', $request->id)->first();

        if (Hash::check($request->verifikasi_password, $selectedAdmin->password)) {
            if ($selectedAdmin->profile_pict && file_exists(selectedAdmin->profile_pict)) {
                unlink($selectedAdmin->profile_pict);
            }
            $selectedAdmin->delete();
            return redirect()->route('logout');
        }

        return null;
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
            }
        }

        return redirect()->back();
    }
}
