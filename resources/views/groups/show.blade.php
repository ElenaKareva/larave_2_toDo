@extends('layouts.app')

@section('title-block')Состав {{ $group->title }} @endsection
  
@section('content')
    @method('GET')
    
    <div class="d-flex justify-content-between">
        <h2>Список студентов {{ $group->title }} </h2>
        <a href="{{ route('groups.students.create', $group->id) }}">
            <button class="btn btn-outline-success" type="submit">Добавить студента в группу</button>
        </a>
    </div>
   
        <div>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">№</th>
                        <th scope="col">ID группы</th>
                        <th scope="col">Фамилия студента</th>
                        <th scope="col">Имя студента</th>
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
                                        
                                        <a href="{{ route('groups.students.show', [$student->group_id, $student->id]) }}" class="btn btn-outline-info">Открыть</a>
                                        
                                    </div>
                                </form>
                            </td>

                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>


@endsection