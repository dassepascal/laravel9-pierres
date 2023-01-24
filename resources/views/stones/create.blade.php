@extends('base')

@section('content')
{{-- to do --}}


<div class="container">
    <h1 class="text-center my-5">Créer une nouvelle pierre</h1>
<form action="{{ route('stones.store') }}" method="POST" >
    @csrf
    <div class="col-12">
        <div class="form-group">
            <label for="validationServer01" class="form-label"> Nom</label>
            <input type="text" name="name" class="form-control "  placeholder="nom de la pierre">
            @error('name')
            <span class="valid-feedback" role="alert">
                <strong> {{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div class="col-12">
    <div class="form-group">
        <label for="category">Catégorie</label>
        <select name="category"  class="form-select" aria-label="Default select example">
            <option selected>Open this select menu</option>
            @foreach ($categories as $category )
            <option value="{{  $category->id }}">{{ $category->label }}</option>

            @endforeach
        </select>
    </div>
    <div>

    </div>
    <div class="col-12">
        <div class="form-group">
            <label >Composition chimique </label>
            <input type="text" name="composition_chimique" class="form-control" placeholder="la composition chimique">
            @error('composition_chimique')
            <span class="invalid-feedback" role="alert">
                <strong> {{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>
    <div class="col-12">
        <div class="form-group">
            <label > Densité</label>
            <input type="text" name="density" class="form-control" placeholder="la densité">
            @error('density')
            <span class="invalid-feedback" role="alert">
                <strong> {{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>
    <div class="col-12">
        <div class="form-group">
            <label > Dureté</label>
            <input type="text" name="hardness" class="form-control" placeholder="la dureté">
            @error('hardness')
            <span class="invalid-feedback" role="alert">
                <strong> {{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>
    <div class="col-12">
        <div class="form-group">
            <label > Chakra</label>
            <input type="text" name="chakra" class="form-control" placeholder=" le nom du chakra">
            @error('chakra')
            <span class="invalid-feedback" role="alert">
                <strong> {{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>
    <div class="col-12">
        <div class="form-group">
            <label > Le système cristallin </label>
            <input type="text" name="system_cristalin" class="form-control" placeholder="le systeme cristalin">
            @error('system_cristalin')
            <span class="invalid-feedback" role="alert">
                <strong> {{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>
    <div class="col-12">
        <div class="form-group">
            <label > Origine</label>
            <input type="text" name="origin" class="form-control" placeholder="le pays d'origine">
            @error('origin')
            <span class="invalid-feedback" role="alert">
                <strong> {{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>
    <div class="col-12">
        <div class="form-group">
            <label > Rareté</label>
            <input type="text" name="scarcity" class="form-control" placeholder="rareté">
            @error('system_cristalin')
            <span class="invalid-feedback" role="alert">
                <strong> {{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>
    <div class="col-12">
        <div class="form-group">
            <label for="validationTextarea"> Les propriétés</label>
            <textarea id="tinycme-editor" name="properties" class="form-control w-100" id="validationTextarea"></textarea>
            @error('properties')
            <span class="invalid-feedback" role="alert">
                <strong> {{ $message }}</strong>
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
            <label >Purification</label>
            <input type="text" name="purification" class="form-control" placeholder="les procédés de purification">
            @error('system_cristalin')
            <span class="invalid-feedback" role="alert">
                <strong> {{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>
    <div class="col-12">


        <div class="form-group">
            <label > image</label>
            <select name="image"  class="form-select" aria-label="Default select example">
                <option selected>Open this select menu</option>
                @foreach ($images as $image )
                <option value="{{  $image->id }}">{{ $image->name }}</option>

                @endforeach
            </select>
            <input type="text" name="image" class="form-control" placeholder="image">
            @error('image')
            <span class="invalid-feedback" role="alert">
                <strong> {{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>
    <div class="d-flex justify-content-center mb-5 mt-2 ">
        <button type="submit" class="btn btn-primary"> Enregistrer</button>
    </div>
</form>
</div>



@endsection
