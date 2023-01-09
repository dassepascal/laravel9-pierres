@extends('base')
@section('content')
<div class="jumbotron">


    <h2 class="display-4 text-center">{{  $stone->name}}</h2>
</div>
<p class=text-center my-3 pt-3>{{ $stone->composition_chimique}}</p>
<p class=text-center my-3 pt-3>
    <span class="text-success"> Densité :</span>
    {{ $stone->density}}</p>
    <p class=text-center my-3 pt-3>
        <span class="text-success"> Dureté :</span>
        {{ $stone->hardness}}</p>
        <p class=text-center my-3 pt-3>
            <span class="text-success"> Chakra :</span>
            {{ $stone->density}}</p>
            <p class=text-center my-3 pt-3>
                <span class="text-success"> Système cristallin :</span>
                {{ $stone->system_cristalin}}</p>
                <p class=text-center my-3 pt-3>
                    <span class="text-success"> Origin :</span>
                    {{ $stone->origin}}</p>
                    <p class=text-center my-3 pt-3>
                        <span class="text-success"> Rareté :</span>
                        {{ $stone->scarcity}}</p>
                        <p class=text-center my-3 pt-3>
                            <span class="text-success"> Propriétés :</span>
                            {{ $stone->properties}}</p>
                            <p class=text-center my-3 pt-3>
                                <span class="text-success"> Puri
                                    <p class=text-center my-3 pt-3>
                                        <span class="text-success"> Purification :</span>
                                        {{ $stone->purification}}</p>
                                        <p class=text-center my-3 pt-3>
                                          <img src="{{ $stone->image }}" alt="image">
                                           </p>



<div class="d-flex justify-content-center my-5">
    <a class="btn btn-primary" href="{{ route('home') }}">
        <i class="fas fa-arrow-left"></i>
        Retour
    </a>
</div>

</div>
@endsection
