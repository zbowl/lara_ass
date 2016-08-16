@extends('layouts.master')

@section('title', "$content->title")

@section('header')

        {{ $content->header }}
@endsection

@section('body')

            <p>Technology advancements require us to always be updating our hardware capabilities. When you upgrade your equipment where do you take your old equipment? Let us worry about that. We provide many services to make it easier for you.</p>
            
            <p>Furniture Recycling</p>
            <p>Electronic Recycling</p>
                <p>Hard drive destruction</p>
                
                <p>{{ $content->description }}</p>

@endsection