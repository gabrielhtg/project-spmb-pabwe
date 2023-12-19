<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\data_institusi;
use Illuminate\Validation\Rule;


class CourseController extends Controller
{
    public function getCourse () {
        $dataInstitusi = data_institusi::where('id', 1)->first();

        $course = Course::with('major')->get();

        $data = [
            'dataInstitusi' => $dataInstitusi,
            'courses' => $course,
        ];

        return view('program.prodi', $data);
    }

    public function store(Request $request)
    {
        $request->validate([
            'kode_prodi' => 'required',
            'kode_mk' => 'required',
            'nama' => 'required',
            'sks' => 'required|integer|between:1,4',
            'semester' => 'required|integer|between:1,8',
            Rule::unique('courses')->where(function ($query) use ($request) {
                return $query->where('kode_prodi', $request->kode_prodi);
            }),
        ]);

        $course = new Course([
            'kode_prodi' => $request->get('kode_prodi'),
            'kode_mk' => $request->get('kode_mk'),
            'nama' => $request->get('nama'),
            'sks' => $request->get('sks'),
            'semester' => $request->get('semester'),
        ]);

        $course->save();

        return redirect('admin-panel/program')->with('success', 'Course added successfully!');
    }

    public function update(Request $request, String $id)
    {
        $request->validate([
            'kode_prodi' => 'required',
            'kode_mk' => 'required',
            'nama' => 'required',
            'sks' => 'required|integer|between:1,4',
            'semester' => 'required|integer|between:1,8',
            Rule::unique('courses')->where(function ($query) use ($request) {
                return $query->where('kode_prodi', $request->kode_prodi);
            })->ignore($id),
        ]);

        $course = Course::findOrFail($id);

        $updatedCourse = [
            'kode_prodi' => $request->get('kode_prodi'),
            'kode_mk' => $request->get('kode_mk'),
            'nama' => $request->get('nama'),
            'sks' => $request->get('sks'),
            'semester' => $request->get('semester'),
        ];

        $course->update($updatedCourse);

        return redirect('admin-panel/program')->with('success', 'Course updated successfully!');
    }
public function destroy(string $id)
{
    $course = Course::find($id);

    if (!$course) {
        return redirect('admin-panel/program')->with('error', 'course not found!');
    }

    // Additional logic (e.g., delete related records) if needed

    $course->delete();

    return redirect('admin-panel/program')->with('success', 'course deleted successfully!');
}


    
    

}