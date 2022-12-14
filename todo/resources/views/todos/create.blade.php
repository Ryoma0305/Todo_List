@extends('layouts.app')

@section('content')

    <h1>TODO新規作成ページ</h1>
    
    <div class="row">
        <div class="col-6">
            {!! Form::model($todo, ['route' => 'todos.store']) !!}
            
                <div class="form-group">
                    {!! Form::label('title', 'TODO:') !!}
                    {!! Form::text('title', null, ['class' => 'form-control']) !!}
                </div>
        
                <div class="form-group">
                    {!! Form::label('content', '内容:') !!}
                    {!! Form::text('content', null, ['class' => 'form-control']) !!}
                </div>
        
                {!! Form::submit('登録', ['class' => 'btn btn-primary']) !!}
        
            {!! Form::close() !!}
        </div>
    </div>

@endsection