@extends('admin.index');

@section('content')
    <div class="container-fluid page-body-wrapper">
        <div class="container">
            @if (session()->has('success'))
                <div class="alert alert-success">
                    <button type="button" class="close" data-dismiss="alert">
                        x
                    </button>
                    {{ session()->get('success') }}
                </div>
            @endif
            <h1 class="text-2xl font-semibold mt-3">Master Data</h1>
            <form action="{{ url('product/search') }}" class="flex" method="post">
                @csrf
                <div class="d-flex">
                    <div class="col-4">
                        {{-- <label for="" class="font-semibold">Name</label> --}}
                        <input name="search" type="text" class="form-control bg-white text-dark border-1 rounded-lg"
                            placeholder="Product" value="{{ request('search') }}">
                    </div>
                    <div class="col-2">
                        <input type="submit" class="btn btn-primary py-2" value="Search">
                    </div>
                </div>
            </form>
            <a href=""class="btn btn-primary btn-sm p-2 mt-3 font-semibold" data-bs-toggle="modal"
                data-bs-target="#exampleModal">Tambah Data</a>
                <table class="table mt-3">
                    <thead>
                      <tr align="center">
                        <th scope="col">No</th>
                        <th scope="col">Merek</th>
                        <th scope="col">Model</th>
                        <th scope="col">No Plat</th>
                        <th scope="col">Tarif</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                        @php
                        $no = '1';
                    @endphp
                    @foreach ($datamaster as $data)
                        <tr align="center">
                            <th>{{ $no++ }}</th>
                            <th scope="row">{{ $data->merek }}</th>
                            <td>{{ $data->model }}</td>
                            <td>{{ $data->no_plat }}</td>
                            <td>{{ $data->tarif }}</td>
                            <td>
                                <a href="{{ url('/deleteproduct/' . $data->id) }}" class="btn btn-outline-danger"
                                    onclick="return confirm('are sure delete data this')">Delete</a>
                                <a href="{{ route('data_mobil.edit', $data->id) }}" class="btn btn-outline-primary">Update</a>
                                <a href="{{ url('/view_details/' . $data->id) }}" class="btn btn-outline-success">View</a>
                            </td>
                        </tr>
                    @endforeach
                    
                    </tbody>
                </table>
                


            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Data</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <form action="" class="container" method="POST">
                            @csrf
                            <div class="p-2">
                                <label for="">merek</label>
                                <input type="text" name="merek" class="py-1"
                                    style="color:black;border-radius:5px; width:100%" placeholder="Merek">
                            </div>
                            <div class="p-2">
                                <label for="">model</label>
                                <input type="text" name="model" class="py-1"
                                    style="color:black;border-radius:5px; width:100%" placeholder="model">
                            </div>
                            <div class="p-2">
                                <label for="">Plat</label>
                                <input type="text" name="no_plat" class="py-1"
                                    style="color:black;border-radius:5px; width:100%" placeholder="no_plat">
                            </div>
                            <div class="p-2">
                                <label for="">tarif</label>
                                <input type="text" name="tarif" class="py-1"
                                    style="color:black;border-radius:5px; width:100%" placeholder="tarif">
                            </div>
                            <div class="p-2">
                                <input type="submit" class="btn btn-success">
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>

@endsection
