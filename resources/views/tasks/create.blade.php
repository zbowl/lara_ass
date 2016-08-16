@extends('layouts.master')

@section('content')


<div class="panel panel-default">		
    <div class="panel panel-heading">			
        <legend>Add a New Task
        </legend>
        <p class="lead">Add to your task list below.</p>
        <div id="loginmessage"></div>
    </div>		
    <div class="panel-body">
        {{ Form::open(array('route' => 'tasks.store')) }}

        <div class="form-group">
            {{ Form::label('title', 'Title:', ['class' => 'control-label']) }}
            <div class="col-lg-9">
                {{ Form::text('title', null, ['class' => 'form-control']) }}
            </div>
        </div>

        <div class="form-group">
            {{ Form::label('description', 'Description:', ['class' => 'control-label']) }}
            <div class="col-lg-9">
                {{ Form::textarea('description', null, ['class' => 'form-control']) }}
            </div>
        </div>

        {{ Form::submit('Create New Task', ['class' => 'btn btn-primary']) }}

        {{ Form::close() }}
    </div>
</div>

@stop