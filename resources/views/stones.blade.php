@extends('base')

@section('content')
<div class="p-5 mb-4 bg-light rounded-3 mt-5">
    <div class="container-fluid ">
        <h1 id="evenements" class="display-3 text-center h1" >Pierres </h1>

        <div class="stones row justify-content-center ">

            @foreach ($stones as $stone)

            <div class="col-md-6 col-sm-12">
                <div class="card my-3">
                    <div class="card-body">
                        <h5 class="card-title custom-title ">{{ $stone->name }}</h5>
                          <div>
                <h5 class="categorie">Categorie : <span class="category_color">{{ $stone->category->label }}</span></h5>

            </div>
                        <p class="card-text">
                             {{ $stone->composition_chimique }}
                        </p>
                        <a href="{{ route('stone',$stone->slug) }}" class="btn btn-primary text-light"> Lire
                            la
                            suite</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <div class="d-flex justify-content-center mt-5">{{ $stones->links('vendor.pagination.custom') }}
        </div>
    </div>

</div>
@endsection
