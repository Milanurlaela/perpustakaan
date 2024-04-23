@extends('layouts.master')

@section('content')
<div class="container-fluid">
    <div class="card" style="padding: 15px">
    <form action="{{ route('user.update', $user->id) }}" method="post">
        @csrf
        @method ('PUT')
        <div class="mb-4">
            <label for="judul" class="form-label">ID:</label>
            <input type="text" name="judul" value="{{ $user->judul }}" class="form-control" required>
        </div>

        <div class="mb-4">
            <label for="pengarang" class="form-label">NAMA:</label>
            <input type="text" name="penulis" value="{{ $buku->penulis }}" class="form-control" required>
        </div>

        <div class="mb-4">
            <label for="penerbit" class="form-label">EMAIL:</label>
            <input type="text" name="penerbit" value="{{ $buku->penerbit }}" class="form-control" required>
        </div>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="sinopsis" class="form-label">ROLE:</label>
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