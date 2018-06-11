@extends('layouts.app')

@section('content')


    <h1>メッセージ一覧</h1>

    @if (count($tasks) > 0)
        <ul>
            @foreach ($tasks as $task)
                <li>{!! link_to_route('tasks.show', $message->id, ['id' => $task->id]) !!} : {{ $task->content }}</li>
                
                <li>{{ $task->content }}</li>
            @endforeach
        </ul>
    @endif

 {!! link_to_route('messages.create', '新規メッセージの投稿') !!}

@endsection
