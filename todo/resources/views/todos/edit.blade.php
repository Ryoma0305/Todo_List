@extends('layouts.app')

@section('content')

    <h1>id: {{ $todo->id }} のTODO編集ページ</h1>

    <div class="row">
        <div class="col-6">
            {!! Form::model($todo, ['route' => ['todos.update', $todo->id], 'method' => 'put']) !!}
                
                <div class="form-group">
                    {!! Form::label('title', 'タイトル:') !!}
                    {!! Form::text('title', null, ['class' => 'form-control']) !!}
                </div>
                
                <div class="form-group">
                    {!! Form::label('content', 'メッセージ:') !!}
                    {!! Form::text('content', null, ['class' => 'form-control']) !!}
                </div>
        
                {!! Form::submit('更新', ['class' => 'btn btn-primary']) !!}
        
            {!! Form::close() !!}
        </div>
    </div>

@endsection