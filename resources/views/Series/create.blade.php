<x-Layout title="Série Adicionar">

<x-serie.form :action="route('series.store')" :nome="old('nome')" :update="false" />


</x-Layout>

<?php /*
<!--<x-Layout title="Nova série">
	<form action="{{ route('series.store') }}"  method="post">
		@csrf
		<div class="mb-3">
			<label for="nome" class="form-label">Nome da série:</label>
			<input type="text" id="nome" name="nome" placeholder="insira nome da série" class="form-control">
			
		</div>
		<div class="col-auto">
			<button type="submit" class="btn btn-primary mb-3">Adicionar</button>
		  </div>
	</form>
</x-Layout>-->
*/ ?>