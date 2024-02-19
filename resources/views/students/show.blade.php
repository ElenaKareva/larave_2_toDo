@extends('layouts.app')

@section('title-block')Данные студента @endsection
  
@section('content')
    @method('GET')
    
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Данные студента</h2>
            </div>
        </div>
    </div>
   
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>№:</strong>
                {{ $student->id }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>ID группы:</strong>
                {{ $student->group_id }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Фамилия:</strong>
                {{ $student->surname }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Имя:</strong>
                {{ $student->name }}
            </div>
        </div>

    </div>
@endsection