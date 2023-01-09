@extends('base')

@section('content')
<div class="container">
    <h1 class="text-center my-5">Pierres</h1>
    <div class="d-flex justify-content-center">
        <a class="btn btn-info my-4" href="{{ route('stores.create') }}">Ajouter un nouvel événement</a>
    </div>
    <table class="table table-hover">
        <thead>
          <tr class="table-active">
            <th scope="col">Id</th>
            <th scope="col">Name</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($stones as $stone )


          <tr >
            <th>{{  $stone->id }}</th>
            <td>{{  $stone->name }}</td>
            <td class="d-flex">
                <a href="#" class="btn btn-warning mx-3"> Editer</a>
                <a href="#" class="btn btn-danger mx-3"> Supprimer</a>
            </td>

          </tr>

          @endforeach
        </tbody>
      </table>
    </div>
    <div class="d-flex justify-content-center mt-5">{{ $stones->links('vendor.pagination.custom') }}
    </div>
</div>



@endsection
