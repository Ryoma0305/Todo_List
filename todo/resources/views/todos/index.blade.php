@extends('layouts.app')

@section('content')

<h1>TODO一覧</h1>

@if (count($todos) > 0)
    <table class="table table-striped">
        <thead>
            <tr>
                <th>id</th>
                <th>タイトル</th>
                <th>TODO</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($todos as $todo)
            <tr>
                <td>{!! link_to_route('todos.show', $todo->id, ['id' => $todo->id]) !!}</td>
                <td>{{ $todo->title }}</td>
                <td>{{ $todo->content }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endif

{!! link_to_route('todos.create', '新規TODOの登録', [], ['class' => 'btn btn-primary']) !!}

@endsection