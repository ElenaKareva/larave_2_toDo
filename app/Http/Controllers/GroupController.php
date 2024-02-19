<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\Group;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\GroupRequest;


class GroupController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $groups = Group::all();
        return view('groups.index', ['groups' => $groups]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('groups.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(GroupRequest $request)
    {
        $group = new Group;
        $group->fill($request->all());
        $group->save();

        return redirect()->route('groups.index')->with('success', 'Группа добавлена ');
    }

    /**
     * Display the specified resource.
     */
    public function show(Group $group)
    {
        return view('groups.show', ['students' => $group->students, 'group' => $group]);

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Group $group)
    {
        return view('groups.edit', compact('group'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(GroupRequest $request, Group $group)
    {
        
        $group->fill($request->all());
        $group->save();
        return redirect()->route('groups.index')->with('success', 'Группа изменена');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Group $group)
    {
        $group->delete();
        return redirect()->route('groups.index');
    }
}
