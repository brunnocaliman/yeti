@extends('master')

@section('title', 'Page Title')

@section('sidebar')
    @parent

    <p>This is appended to the master sidebar.</p>
@endsection

@section('content')
    <p>This is my body content.</p>

<h2>cadastrar equipamento</h2>
<?php    
    echo Form::open(array('route' => 'cadastrar-equipamento'));
    echo Form::label('categoria', 'Categoria');
    echo Form::select('size', array('L' => 'Large', 'S' => 'Small'));
    //echo Form::text('');
    echo Form::close();



?>



@endsection