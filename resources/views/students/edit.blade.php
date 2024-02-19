@extends('layouts.app')

@section('title-block')Изменение данных student @endsection

@section('content')

    <div class="d-flex justify-content-between">
        <h1>Изменить данные студента</h1>
    </div>

    <form action=" {{ route('students.update', $student->id) }} " method="POST">
        @csrf
        @method('PUT')

        <div class="form-group mb-2">
            <label for="group_id">ID группы</label>
            <input type="number" name="group_id" placeholder="ID группы" id="group_id" class="form-control" value="{{ $student->group_id }}">
        </div>

        <div class="form-group mb-2">
            <label for="surname">Фамилия</label>
            <input type="text" name="surname" placeholder="Фамилия студента" id="surname" class="form-control" value="{{ $student->surname }}">
        </div>

        <div class="form-group mb-2">
            <label for="name">Имя</label>
            <input type="text" name="name" placeholder="Имя студента" id="name" class="form-control" value="{{ $student->name }}">
        </div>

        <button type="submit" class="btn btn-success">Изменить</button>
    </form>
@endsection