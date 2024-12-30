<form action="{{$action}}"  method="post">
	@csrf
	@if($update==true)
	@method('PUT')
	@endif
	<div class="mb-3">
		<label for="nome" class="form-label">Nome da série:</label>
		<input type="text" 
		id="nome" 
		@isset($nome) value="{{$nome }}" @endisset 
		name="nome" 
		placeholder="insira nome da série" 
		class="form-control">
		
	</div>
	<div class="col-auto">
		<button type="submit" class="btn btn-primary mb-3">Salvar</button>
	  </div>
</form>
