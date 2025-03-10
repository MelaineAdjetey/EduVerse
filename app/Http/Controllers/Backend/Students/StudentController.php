<?php

namespace App\Http\Controllers\Backend\Students;

use Illuminate\Support\Facades\File;
use App\Http\Controllers\Controller;
use App\Models\Student;
use Illuminate\Http\Request;
use App\Http\Requests\Backend\Students\AddNewRequest;
use App\Http\Requests\Backend\Students\UpdateRequest;
use App\Models\Role;
use Exception;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;


class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Student::paginate();
        return view('backend.student.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $role = Role::get();
        return view('backend.student.create', compact('role'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(AddNewRequest $request)
    {
        try {
            $student = new Student();
            $student->name_en = $request->fullName_en;
            $student->name_bn = $request->fullName_bn;
            $student->contact_en = $request->contactNumber_en;
            $student->contact_bn = $request->contactNumber_bn;
            $student->email = $request->emailAddress;
            $student->role_id = $request->roleId;
            $student->date_of_birth = $request->birthDate;
            $student->gender = $request->gender;
            $student->status = $request->status;
            $student->password = Hash::make($request->password);
            $student->language = 'en';
            $student->access_block = $request->accessBlock;

            if ($request->hasFile('image')) {
                $imageName = rand(111, 999) . time() . '.' . $request->image->extension();
                $request->image->move(public_path('uploads/students'), $imageName);
                $student->image = $imageName;
            }
            if ($student->save())
                return redirect()->route('student.index')->with('success', 'Data Saved');
            else
                return redirect()->back()->withInput()->with('error', 'Please try again');
        } catch (Exception $e) {
            // dd($e);
            return redirect()->back()->withInput()->with('error', 'Please try again');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Student $student)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $role = Role::get();
        $student = Student::findOrFail(encryptor('decrypt', $id));

        return view('backend.student.edit', compact('role', 'student'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, $id)
    {
        try {
            // Déchiffrer l'ID de l'étudiant
            $studentId = encryptor('decrypt', $id);
    
            // Trouver l'étudiant
            $student = Student::findOrFail($studentId);
    
            // Mettre à jour les champs de l'étudiant
            $student->name_en = $request->fullName_en;
            // $student->name_bn = $request->fullName_bn;
            $student->contact_en = $request->contactNumber_en;
            $student->contact_bn = $request->contactNumber_bn;
            $student->email = $request->emailAddress;
            $student->role_id = $request->roleId;
            $student->date_of_birth = $request->birthDate;
            $student->gender = $request->gender;
            $student->status = $request->status;
            $student->password = Hash::make($request->password);
            $student->language = 'en';
            $student->access_block = $request->accessBlock;
    
            // Gestion de l'image
            if ($request->hasFile('image')) {
                $imageName = rand(111, 999) . time() . '.' . $request->image->extension();
                $request->image->move(public_path('uploads/students'), $imageName);
                $student->image = $imageName;
            }
    
            // Sauvegarder l'étudiant
            if ($student->save()) {
                return redirect()->route('student.index')->with('success', 'Données enregistrées avec succès.');
            } else {
                return redirect()->back()->withInput()->with('error', 'Veuillez réessayer.');
            }
        } catch (Exception $e) {
            // En cas d'erreur, retourner à la page précédente avec un message d'erreur
            return redirect()->back()->withInput()->with('error', 'Veuillez réessayer.');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $data = Student::findOrFail(encryptor('decrypt', $id));
        $image_path = public_path('uploads/students') . $data->image;

        if ($data->delete()) {
            if (File::exists($image_path))
                File::delete($image_path);

            return redirect()->back();
        }
    }
}
