@extends('layouts.app')

@section('content')

<!-- ここにページ毎のコンテンツを書く -->
<h1>タスク追加ページ</h1>

    <div class="row">
        <div class="col-6">
            <!-- 第一引数にMODELのインスタンス,第二引数に連想配列-->
            {!! Form::model($task, ['route' => 'tasks.store']) !!}
        
                <div class="form-group">
                    {!! Form::label('content', 'タスク:') !!}
                    {!! Form::text('content', null, ['class' => 'form-control']) !!}
                </div>
        
                {!! Form::submit('完了', ['class' => 'btn btn-primary']) !!}
        
            {!! Form::close() !!}
        </div>
    </div>

@endsection