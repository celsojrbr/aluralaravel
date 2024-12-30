<x-Layout title="Séries">

	<a class="btn btn-dark mb-3" href="{{ route('series.create') }}">
	criar
	</a>
	@isset($mensagemSucesso)
	<div class="alert alert-success">
	{{ $mensagemSucesso }}
	</div>
	@endisset
	
	<ul class="list-group">
	@foreach($series as $key => $serie)
		<li class="list-group-item d-flex justify-content-between align-items-center">
			{{ $serie->nome; }} 
			<span class="d-flex">
			<a href="{{ route('series.edit',$serie->id) }}"  class="btn btn-primary btn-sn">E</a>
			
			<form class="" action="{{ route('series.destroy',$serie->id) }}" method="post">@csrf
			@method('DELETE')
				<button class="btn btn-danger btn-sn">X</button> 
			</form>
			
			
			</span>
			
			
			
		</li>
	@endforeach 
	</ul>
</x-Layout>