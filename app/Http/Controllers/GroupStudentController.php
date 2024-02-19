<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Group;

class GroupStudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Group $group)
    {
        return view('groups.students.create', ['id' => $group->id]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, Group $group)
    {
        $student = new Student;
        //$student->group_id = $request->input('group_id');
        //$student->surname = $request->input('surname');
        //$student->name = $request->input('name');
        $student->fill($request->all());

        $student->save();

        return redirect()->route('groups.show', $group->id)->with('success', "Студент добавлен в $group->title");
    }

    /**
     * Display the specified resource.
     */
    public function show(Group $group, Student $student)
    {
        //dd($student->id);
        return view('groups.students.show', ['student' => $student]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
