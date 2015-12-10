@extends('master')

@section('title', 'Page Title')

@section('sidebar')
    @parent

    <p>This is appended to the master sidebar.</p>
@endsection

@section('content')
    <p>This is my body content.</p>

<script type="text/javascript">
$(document).ready(function($) {
  	$('#categoria').change(function() {
			$.get("https://yeti-acre.c9.io/subcategoria/" + $(this).val(),
				function(data) {
					$('#subcategoria').empty();
 					$.each(data, function(index, element) {
			            $('#subcategoria').append("<option value='"+ element.id +"'>" + element.descricao + "</option>");
			        });
				});
		});
	});

$(document).ready(function($) {
  	$('#gerencia').change(function() {
			$.get("https://yeti-acre.c9.io/subcategoria/" + $(this).val(),
				function(data) {
					$('#subcategoria').empty();
 					$.each(data, function(index, element) {
			            $('#subcategoria').append("<option value='"+ element.id +"'>" + element.descricao + "</option>");
			        });
				});
		});
	});
</script>    
    
<h2>cadastrar equipamento</h2>

@if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

    {!! Form::open(array('action' => 'EquipamentoController@salvar', 'class' => 'form-horizontal')) !!}
    
    <div class="form-group">
    {!! Form::label('categoria', 'Categoria') !!}
    {!! Form::select('categoria', $categorias, null, array('class' => 'form-control')) !!}
    </div>

<div class="form-group">
    {!! Form::label('subcategoria', 'Modelo') !!}
    {!! Form::select('subcategoria', array('0' => 'Selecione a Categoria'), null, array('class' => 'form-control')) !!}
</div>

<div class="form-group">
            {!! Form::label('serie', 'Série') !!} <br>
            {!! Form::text('serie') !!}
</div>

<div class="form-group">
            {!! Form::label('patrimonioProdest', 'Patrimônio Prodest') !!} <br>
            {!! Form::text('patrimonioProdest') !!}
</div>

<div class="form-group">
            {!! Form::label('patrimonioEs1', 'Patrimônio ES') !!} <br>
            {!! Form::text('patrimonioEs1') !!} {!! Form::text('patrimonioEs2') !!} {!! Form::text('patrimonioEs3') !!}
</div>     

<div class="form-group">
    {!! Form::label('gerencia', 'Gerência') !!}
    {!! Form::select('gerencia', $gerencias, null, array('class' => 'form-control')) !!}
</div>

<div class="form-group">
    {!! Form::label('subgerencia', 'Sub-Gerência') !!}
    {!! Form::select('subgerencia', $subgerencias, null, array('class' => 'form-control')) !!}
</div>

<div class="form-group">
    {!! Form::label('observacao', 'Observação') !!} <br>
    {!! Form::textarea('observacao') !!}
</div>

<div class="form-group">    
    {!! Form::submit('Salvar', array('class' => 'btn btn-success')) !!}
</div>
    {!! Form::close() !!}




<button>Regular Button</button>
<button class="btn btn-primary">Primary Button</button>
<button class="btn btn-info">Info Button</button>
<button class="btn btn-success">Success Button</button>
<button class="btn btn-warning">Warning Button</button>
<button class="btn btn-danger">Danger Button</button>




@endsection