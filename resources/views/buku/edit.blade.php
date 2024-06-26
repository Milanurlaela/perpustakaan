@extends('layouts.master')

@section('content')
<div class="container-fluid">
    <div class="card" style="padding: 15px">
    <form action="{{ route('buku.update', $buku->id) }}" method="post">
        @csrf
        @method ('PATCH')
        <div class="mb-4">
            <label for="judul" class="form-label">Judul:</label>
            <input type="text" name="judul" value="{{ $buku->judul }}" class="form-control" required>
        </div>

        <div class="mb-4">
            <label for="pengarang" class="form-label">Penulis:</label>
            <input type="text" name="penulis" value="{{ $buku->penulis }}" class="form-control" required>
        </div>

        <div class="mb-4">
            <label for="penerbit" class="form-label">Penerbit:</label>
            <input type="text" name="penerbit" value="{{ $buku->penerbit }}" class="form-control" required>
        </div>

        <div class="mb-4">
            <label for="tahun_terbit" class="form-label">Tahun Terbit:</label>
            <input type="number" name="tahun_terbit" value="{{ $buku->tahun_terbit }}" class="form-control" required>
        </div>
        <div class="mb-4">
            <label for="foto" class="form-label">Foto Buku:</label>
            <input type="file" name="foto" accept="image/*" class="form-control">
        </div>
        <div class="mb-3">
            <label for="kategori_id" class="form-label">Kategori:</label>
            <select name="kategori_id" class="form-select custom-select" required>
                @foreach ($kategori as $k)
                    <option value="{{ $k->id }}" {{ $buku->kategori->contains('id', $k->id) ? 'selected' : '' }}>
                        {{ $k->nama_kategori }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="sinopsis" class="form-label">Sinopsis:</label>
            <input type="text" name="sinopsis" class="form-control" value="{{ $buku->sinopsis }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
    </div>
    </div>
    </div>
    </div>
</div>
</div>
    </body>

    </html>
@endsection
