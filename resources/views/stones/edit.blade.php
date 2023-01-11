@extends('base')
@section('content')

<div class="container">
    <h1 class="text-center mt-5">Editer une pierre</h1>
    <form action="{{ route('stones.update',$stone->id) }}" method="post">
        @method('PUT')
        @csrf
        <div class="col-12">
            <div class="form-group">
                <label>Nom</label>
                <input type="text" value="{{ $stone->name}}" name="name"
                    class="form-control @error('name') is-invalid @enderror" placeholder="nom de votre pierre" />
                @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }} </strong>
                </span>
                @enderror
            </div>
        </div>
        <div class="col-12">
            <div class="form-group">
                <label>Composition chimique</label>
                <input type="text" value="{{ $stone->composition_chimique}}" name="composition_chimique"
                    class="form-control @error('composition_chimique') is-invalid @enderror"
                    placeholder="composition chimique" />
                @error('composition_chimique')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }} </strong>
                </span>
                @enderror
            </div>
        </div>
        <div class="col-12">
            <div class="form-group">
                <label>Densité</label>
                <input type="text" value="{{ $stone->density}}" name="density"
                    class="form-control @error('density') is-invalid @enderror" placeholder="la densité" />
                @error('density')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }} </strong>
                </span>
                @enderror
            </div>
        </div>
        <div class="col-12">
            <div class="form-group">
                <label>Dureté</label>
                <input type="text" value="{{ $stone->hardness}}" name="hardness"
                    class="form-control @error('hardness') is-invalid @enderror" placeholder="dureté" />
                @error('hardness')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }} </strong>
                </span>
                @enderror
            </div>
        </div>
        <div class="col-12">
            <div class="form-group">
                <label>Chakra</label>
                <input type="text" value="{{ $stone->chakra}}" name="chakra"
                    class="form-control @error('chakra') is-invalid @enderror" placeholder="nom du chakra" />
                @error('chakra')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }} </strong>
                </span>
                @enderror
            </div>
        </div>
        <div class="col-12">
            <div class="form-group">
                <label>Système cristalin</label>
                <input type="text" value="{{ $stone->system_cristalin}}" name="system_cristalin"
                    class="form-control @error('system_cristalin') is-invalid @enderror"
                    placeholder="système cristalin" />
                @error('system_cristalin')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }} </strong>
                </span>
                @enderror
            </div>
        </div>
        <div class="col-12">
            <div class="form-group">
                <label>origine</label>
                <input type="text" value="{{ $stone->origin}}" name="origin"
                    class="form-control @error('origin') is-invalid @enderror" placeholder="origine" />
                @error('origin')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }} </strong>
                </span>
                @enderror
            </div>
        </div>
        <div class="col-12">
            <div class="form-group">
                <label>rareté</label>
                <input type="text" value="{{ $stone->scarcity}}" name="scarcity"
                    class="form-control @error('scarcity') is-invalid @enderror" placeholder="scarcity" />
                @error('scarcity')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }} </strong>
                </span>
                @enderror
            </div>
        </div>
        <div class="col-12">
            <div class="form-group">
                <label>Propiétés</label>
                <textarea id="tinycme-editor" name="properties"
                    class="form-control w-100 @error('properties') is-invalid @enderror">{{ $stone->properties }}</textarea>
                @error('properties')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }} </strong>
                </span>
                @enderror
            </div>
            <script>
                tinymce.init({
                        selector: '#tinycme-editor',

                    });
            </script>
        </div>

    <div class="col-12">
        <div class="form-group">
            <label>Purification</label>
            <input type="text" value="{{ $stone->purification}}" name="purification"
                class="form-control @error('purification') is-invalid @enderror" placeholder="scarcity" />
            @error('purification')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }} </strong>
            </span>
            @enderror
        </div>
    </div>

<div class="d-flex justify-content-center my-4">
    <button type="submit" class="btn btn-primary">Modifier une pierre</button>
</div>
</form>
</div>

@endsection
