{{-- @extends('base')

@section('content')
<div class="relative flex items-center min-h-screen justify-center overflow-hidden">
    <h2>Image</h2>
    <form action="{{ route('image.store') }}" method="POST" class="shadow p-12" enctype="multipart/form-data">
        @csrf
        <label class="block mb-4">
            <span class="sr-only">Choose File</span>
            <input type="file" name="image"
                class="block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100" />
            @error('image')
            <span class="text-red-600 text-sm">{{ $message }}</span>
            @enderror
        </label>
        <button type="submit" class="px-4 py-2 text-sm text-white bg-indigo-600 rounded">Submit</button>
    </form>
</div>
<div>
    <img src="{{ asset('storage/image/img1.jpg') }}" alt="description of myimage">
</div>
@endsection --}}


<div class="relative flex items-center min-h-screen justify-center overflow-hidden">
    <h2>Image</h2>
    <form action="{{ route('image.store') }}" method="POST" class="shadow p-12" enctype="multipart/form-data">
        @csrf
        <label class="block mb-4"  for="name">
            <span class="sr-only">Name</span>
            <input type="text" name="name" >
        </label>
        <br>
        <label class="block mb-4">

            <span class="sr-only">Choose File</span>
            <input type="file" name="image"
                class="block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100" />
            @error('image')
            <span class="text-red-600 text-sm">{{ $message }}</span>
            @enderror
        </label>
        <button type="submit" class="px-4 py-2 text-sm text-white bg-indigo-600 rounded">Submit</button>
    </form>
</div>
<div>
    <img src="{{ asset('storage/image/img1.jpg') }}" alt="description of myimage">
</div>
