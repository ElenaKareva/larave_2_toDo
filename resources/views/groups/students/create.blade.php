@extends('layouts.app')

@section('title-block')Добавить в группу @endsection

@section('content')

    
    <div class="d-flex justify-content-between">
        <h1>Добавить студента</h1>
    </div>

    <form action=" {{ route('groups.students.store', $id) }} " method="post">
        @csrf

        <div class="form-group mb-2">
            <label for="group_id">ID группы</label>
            <input type="number" name="group_id" placeholder="ID группы" id="group_id" class="form-control" readonly value="{{ $id }}">
        </div>

        <div class="form-group mb-2">
            <label for="surname">Фамилия</label>
            <input type="text" name="surname" placeholder="Фамилия студента" id="surname" class="form-control" value="Иван">
        </div>

        <div class="form-group mb-2">
            <label for="name">Имя</label>
            <input type="text" name="name" placeholder="Имя студента" id="name" class="form-control" value="Иванов">
        </div>

        <button type="submit" class="btn btn-success">Добавить</button>
    </form>
@endsection