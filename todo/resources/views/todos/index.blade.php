@extends('layouts.app')

@section('content')

<h1>TODO一覧</h1>

@if (count($todos) > 0)
    <table class="table table-striped">
        <thead>
            <tr>
                <th>id</th>
                <th>TODO</th>
                <th>内容</th>
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

{{ $messages->links('pagination::bootstrap-4') }}

{!! link_to_route('todos.create', '新規TODOの登録', [], ['class' => 'btn btn-primary']) !!}

@endsection