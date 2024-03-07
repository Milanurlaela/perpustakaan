@extends('layouts.master')

@section('content')

                        <form action="{{route('buku.update', $buku->id)}}" method="post">
                            @csrf
                            @method ('PATCH')
                            <div class="mb-4">
                                <label for="judul" class="form-label">Judul:</label>
                                <input type="text" name="judul" value="{{$buku->judul}}" class="form-control" required>
                            </div>

                            <div class="mb-4">
                                <label for="pengarang" class="form-label">Penulis:</label>
                                <input type="text" name="penulis" value="{{$buku->penulis}}" class="form-control" required>
                            </div>
<<<<<<< HEAD
<<<<<<< HEAD
                            <div class="mb-3">
                                <label for="penerbit" class="form-label">penerbit:</label>
                                <input type="text" name="penerbit" class="form-control" value="{{ $buku->penerbit }}" required>
                                </div>
                                <div class="mb-3">
                                    <label for="sinopsis" class="form-label">Sinopsis:</label>
                                    <input type="text" name="sinopsis" class="form-control" value="{{ $buku->penerbit }}" required>
                                    </div>
                            <div class="mb-3">
                                <label for="penerbit" class="form-label">Tahun Terbit:</label>
                                <select name="tahun_terbit" class="form-select custom-select" required>
                                    @php
                                        $currentYear = date('Y');
                                        $startYear = 1900; 
                                    @endphp
                                    @for($year = $currentYear; $year >= $startYear; $year--)
                                        <option value="{{ $year }}" {{ $buku->tahun_terbit == $year ? 'selected' : '' }}>{{ $year }}</option>
                                    @endfor
                                </select>
=======
=======
>>>>>>> parent of 9ccf70f (perubahan)

                            <div class="mb-4">
                                <label for="penerbit" class="form-label">Penerbit:</label>
                                <input type="text" name="penerbit" value="{{$buku->penerbit}}" class="form-control" required>
<<<<<<< HEAD
>>>>>>> parent of 9ccf70f (perubahan)
=======
>>>>>>> parent of 9ccf70f (perubahan)
                            </div>

                            <div class="mb-4">
                                <label for="tahun_terbit" class="form-label">Tahun Terbit:</label>
                                <input type="number" name="tahun_terbit" value="{{$buku->tahun_terbit}}" class="form-control" required>
                            </div>


                           
                            <button type="submit" class="btn btn-primary">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </body>
    </html>
@endsection