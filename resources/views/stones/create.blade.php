@extends('base')

@section('content')
<div class="container">
    <h1 class="text-center my-5">Créer une nouvelle pierre</h1>
<form action="{{ route('stones.store') }}" method="POST">
    @csrf
    <div class="col-12">
        <div class="form-group">
            <label > Nom</label>
            <input type="text" name="name" class="form-control" placeholder="nom de la pierre">
        </div>
    </div>
    <div class="col-12">
        <div class="form-group">
            <label >Composition chimique </label>
            <input type="text" name="composition_chimique" class="form-control" placeholder="la composition chimique">
        </div>
    </div>
    <div class="col-12">
        <div class="form-group">
            <label > Densité</label>
            <input type="text" name="density" class="form-control" placeholder="la densité">
        </div>
    </div>
    <div class="col-12">
        <div class="form-group">
            <label > Dureté</label>
            <input type="text" name="hardness" class="form-control" placeholder="la dureté">
        </div>
    </div>
    <div class="col-12">
        <div class="form-group">
            <label > Chakra</label>
            <input type="text" name="chakra" class="form-control" placeholder=" le nom du chakra">
        </div>
    </div>
    <div class="col-12">
        <div class="form-group">
            <label > Le système cristallin </label>
            <input type="text" name="system_cristalin" class="form-control" placeholder="le systeme cristallin">
        </div>
    </div>
    <div class="col-12">
        <div class="form-group">
            <label > Origine</label>
            <input type="text" name="origin" class="form-control" placeholder="le pays d'origine">
        </div>
    </div>
    <div class="col-12">
        <div class="form-group">
            <label > Rareté</label>
            <input type="text" name="scarcity" class="form-control" placeholder="rareté">
        </div>
    </div>
    <div class="col-12">
        <div class="form-group">
            <label > Les propriétés</label>
            <textarea id="tinycme-editor" name="content" class="form-control w-100" ></textarea>
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
        </div>
    </div>
    <div class="col-12">
        <div class="form-group">
            <label > image</label>
            <input type="text" name="image" class="form-control" placeholder="image">
        </div>
    </div>
    <div class="d-flex justify-content-center mb-5 mt-2 ">
        <button type="submit" class="btn btn-primary"> Enregistrer</button>
    </div>
</form>
</div>



@endsection
