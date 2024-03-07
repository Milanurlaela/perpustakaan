@extends('layouts.master')

@section('content')
    <div class="container py-4">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">List Buku</div>

                    <div class="card-body">
                        <div class="mb-4">
                            <a href="{{ route('buku.create') }}" class="btn btn-primary">
                                + Tambah Data Bukuu
                            </a>
                        </div>

                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Foto</th>
                                    <th>Judul</th>
                                    <th>Penulis</th>
                                    <th>Penerbit</th>
                                    <th>Sinopsis</th>
                                    <th>Tahun Terbit</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($buku as $b)
                                    <tr>
                                        <td>
                                            <img src="{{ asset('storage/' . $b->foto) }}" alt="Foto Buku" width="100">
                                        </td>
                                        <td>{{ $b->judul }}</td>
                                        <td>{{ $b->penulis }}</td>
                                        <td>{{ $b->penerbit }}</td>
                                        <td>{{ $b->sinopsis}}</td>
                                        <td>{{ $b->tahun_terbit }}</td>
                                        <td>
                                            <form action="{{ route('buku.hapus', $b->id) }}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger">
                                                    <i class="fa fa-trash"></i>
                                                </button>
<<<<<<< HEAD
<<<<<<< HEAD
                                            </form>
                                            <a class="btn btn-info" href="{{ route('buku.edit', $b->id) }}">Edit</a> 
=======
=======
>>>>>>> parent of 9ccf70f (perubahan)
                                            <a class="btn btn-primary" href="{{ route('buku.edit', $b->id) }}">
                                                <i class="fa fa-pen"></i> Edit
>>>>>>> parent of 9ccf70f (perubahan)
                                            </a>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="6" class="text-center">Tidak ada data buku.</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
