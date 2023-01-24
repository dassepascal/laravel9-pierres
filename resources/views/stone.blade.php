@extends('base')
@section('content')
{{-- @dump($stone->category) --}}
<div class="jumbotron">


    <h2 class="display-4 text-start custom-title">{{ $stone->name}}</h2>
</div>
<div>
    {{-- <h5>Categorie : <span class=" ">{{ $stone->category->label }}</span></h5> --}}

</div>

<div class="container">
    <p class=text-start my-3 pt-3>{{ $stone->composition_chimique}}</p>
    <p class=text-start my-3 pt-3>
        <span class="text-success"> Densité :</span>
        {{ $stone->density}}
    </p>
    <p class=text-start my-3 pt-3>
        <span class="text-success"> Dureté :</span>
        {{ $stone->hardness}}
    </p>
    <p class=text-start my-3 pt-3>
        <span class="text-success"> Chakra :</span>
        {{ $stone->density}}
    </p>
    <p class=text-start my-3 pt-3>
        <span class="text-success"> Système cristallin :</span>
        {{ $stone->system_cristalin}}
    </p>
    <p class=text-start my-3 pt-3>
        <span class="text-success"> Origin :</span>
        {{ $stone->origin}}
    </p>
    <p class=text-start my-3 pt-3>
        <span class="text-success"> Rareté :</span>
        {{ $stone->scarcity}}
    </p>


    <p class="text-start">
        <span class="text-success"> Propriétés:</span>
        {!! $stone->properties !!}
    </p>



    <p class=text-start my-3 pt-3>
        <span class="text-success"> Purification :</span>
        {{ $stone->purification }}
    </p>
    <p class=text-start my-3 pt-3>
        <img src="{{ $stone->image }}" alt="image">
    </p>

</div>



<div class="d-flex justify-content-center my-5">
    <a class="btn btn-primary" href="{{ route('stones') }}">
        <i class="fas fa-arrow-left"></i>
        Retour
    </a>
</div>

</div>
@endsection
