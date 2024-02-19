@extends('layouts.app')

@section('title-block')Все студенты @endsection

@section('content')

    <div class="d-flex justify-content-between">
            <h1>Список студентов</h1>
            <a href="{{ route('students.create') }}">
                <button class="btn btn-outline-success" type="submit">Добавить студента</button>
            </a>
        </div>
        <div >
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">№</th>
                        <th scope="col">ID группы</th>
                        <th scope="col">Фамилия</th>
                        <th scope="col">Имя</th>
                    </tr>
                </thead>
                
                <tbody class="table-group-divider">
                    @foreach ($students as $student)
                        <tr>
                            <th scope="row">{{ $student->id }}</th>
                            <td>{{ $student->group_id }}</td>
                            <td>{{ $student->surname }}</td>
                            <td>{{ $student->name }}</td>

                            <td>
                                <form action="{{ route('students.destroy', $student->id) }}" method="POST" class="input-group">
                                    @csrf
                                    @method('DELETE')
                                    <div class="btn-group" >
                                        <a href="{{ route('students.edit', $student->id) }}" class="btn btn-outline-secondary">Изменить</a>
                                        <a href="{{ route('students.show', $student->id) }}" class="btn btn-outline-info">Открыть</a>
                                        <button  type="submit" class="btn btn-outline-danger">Удалить</a>
                                    </div>
                                </form>
                            </td>

                        </tr>
                    @endforeach
                </tbody>
            </table>

        </div>
    </div>

@endsection