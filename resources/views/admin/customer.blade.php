@extends('admin.index');

@section('content')
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
        @foreach ($datacustomer as $data)
            <tr align="center">
                <th>{{ $no++ }}</th>
                <th scope="row">{{ $data->nama }}</th>
                <td>{{ $data->alamat }}</td>
                <td>{{ $data->tlpn }}</td>
                <td>{{ $data->no_sim }}</td>
                <td>{{ $data->email }}</td>
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
@endsection