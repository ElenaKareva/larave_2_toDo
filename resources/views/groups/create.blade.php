@extends('layouts.app')

@section('title-block')Создаём группу @endsection

@section('content')

    
<div class="d-flex justify-content-between">
        <h1>Добавить Группу</h1>
    </div>

    <form action=" {{ route('groups.store') }} " method="post">
        @csrf

        <div class="form-group mb-2">
            <label for="title">Название группы</label>
            <input type="text" name="title" placeholder="Название группы" id="title" class="form-control" value="Группа FS-01">
        </div>

        <div class="form-group mb-2">
            <label for="start_from">Дата начала обучения</label>
            <input type="date" name="start_from" placeholder="Дата начала обучения" id="start_from" class="form-control" value="2024-02-18">
        </div>

        <div class="form-group mb-2">
            <label for="is_active">Начала ли группа своё обучение true or false </label>
            <input type="boolean" name="is_active" placeholder="Начала ли группа своё обучение" id="is_active" class="form-control" value="false">
        </div>

        <button type="submit" class="btn btn-success">Cоздать</button>
    </form>
@endsection