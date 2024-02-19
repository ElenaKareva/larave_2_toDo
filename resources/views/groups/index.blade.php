@extends('layouts.app')

@section('title-block')Все группы @endsection

@section('content')

    <div class="d-flex justify-content-between">
        <h1>Список групп</h1>
        <a href="{{ route('groups.create') }}">
            <button class="btn btn-outline-success" type="submit">Добавить новую группу</button>
        </a>
    </div>
        <div>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">№</th>
                        <th scope="col">Название группы</th>
                        <th scope="col">Дата начала обучения</th>
                        <th scope="col">Начала ли группа своё обучение</th>
                    </tr>
                </thead>
                
                <tbody class="table-group-divider">
                    @foreach ($groups as $group)
                        <tr>
                            <th scope="row">{{ $group->id }}</th>
                            <td>{{ $group->title }}</td>
                            <td>{{ $group->start_from }}</td>
                            <td>{{ $group->is_active }}</td>
                            
                            <td>
                                <form action="{{ route('groups.destroy', $group->id) }}" method="POST" class="input-group">
                                    @csrf
                                    @method('DELETE')
                                    <div class="btn-group" >
                                        <a href="{{ route('groups.edit', $group->id) }}" class="btn btn-outline-secondary">Изменить</a>
                                        <a href="{{ route('groups.show', $group->id) }}" class="btn btn-outline-info">Открыть</a>
                                        <!-- <button  type="submit" class="btn btn-outline-danger">Удалить</a> -->
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