<x-Layout title="Série editar {{$series->nome}}">

<x-serie.form :action="route('series.update',$series->id)" :nome="$series->nome" :update="true" />


</x-Layout>