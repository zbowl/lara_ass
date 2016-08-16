@extends('layouts.master')

@section('title', 'Create A Page')

@section('header')

            {{ Form::open(array('url' => '/create/store', 'class' => 'form-horizontal')) }}
            {{ Form::label('header', 'Header:', ['class' => 'control-label']) }}           
            <div class="form-group">
            
                <div class="col-lg-8">
                    {{ Form::text('header', null, ['class' => 'form-control']) }}
                </div>
            </div>       

@endsection

@section('body')

            {{ Form::label('description', 'Description:', ['class' => 'control-label']) }}
            <div class="form-group">
            
                <div class="">
                    {{ Form::textarea('description', null, ['class' => 'form-control']) }}
                </div>
            </div>
            
            {{ Form::label('title', 'Title:', ['class' => 'control-label']) }}
            <div class="form-group">
                
                <div class="">
                    {{ Form::text('title', null, ['class' => 'form-control']) }}
                </div>
            </div>
            
            <div class="form-group">

                {{ Form::submit('Create New Page', ['class' => 'btn btn-primary']) }}

                {{ Form::close() }}
            </div>

@endsection