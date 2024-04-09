@extends('admin.index')
<base href="/public">
@section('content')

<div class="container-fluid page-body-wrapper">
    <div class="container">
        @if(session()->has('message'))
            <div class="alert alert-success">
                <button type="button" class="close" master-dismiss="alert">
                    x
                </button>
                {{ session()->get('message') }}
            </div>
        @endif
        <form action="{{ route('data_mobil.update', $datamaster->id) }}" method="POST">
            @csrf
            @method('PUT') <!-- Atau @method('PATCH') tergantung pada konvensi Anda -->
        
            <!-- Isi formulir di sini -->
        
            {{-- @foreach ($data as $data) --}}
            <h4>Update Data</h4>
            <div class="p-2">
                <label for="">merek</label>
                <input type="text" name="merek" class="py-1"
                    style="color:black;border-radius:5px; width:100%" placeholder="Merek" value="{{ $datamaster->merek }}">
            </div>
            <div class="p-2">
                <label for="">model</label>
                <input type="text" name="model" class="py-1"
                    style="color:black;border-radius:5px; width:100%" placeholder="model" value="{{ $datamaster->model }}">
            </div>
            <div class="p-2">
                <label for="">Plat</label>
                <input type="text" name="no_plat" class="py-1"
                    style="color:black;border-radius:5px; width:100%" placeholder="no_plat" value="{{ $datamaster->no_plat }}">
            </div>
            <div class="p-2">
                <label for="">tarif</label>
                <input type="text" name="tarif" class="py-1"
                    style="color:black;border-radius:5px; width:100%" placeholder="tarif" value="{{ $datamaster->tarif }}">
            </div>
            <div class="p-2">
                <input type="submit" class="btn btn-outline-success">
            </div>
            {{-- @endforeach --}}
        </form>
    </div>
</div>
@endsection