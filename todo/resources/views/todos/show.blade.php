@extends('layouts.app')

@section('content')

    <h1>id = {{ $todo->id }} のTODO詳細ページ</h1>

    <table class="table table-bordered">
        <tr>
            <th>id</th>
            <td>{{ $todo->id }}</td>
        </tr>
        <tr>
            <th>タイトル</th>
            <td>{{ $todo->title }}</td>
        </tr>
        <tr>
            <th>メッセージ</th>
            <td>{{ $todo->content }}</td>
        </tr>
    </table>
    
    {!! link_to_route('todos.edit', 'このTODOを編集', ['id' => $todo->id], ['class' => 'btn btn-light']) !!}

    {!! Form::model($todo, ['route' => ['todos.destroy', $todo->id], 'method' => 'delete']) !!}
        {!! Form::submit('削除', ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}
@endsection