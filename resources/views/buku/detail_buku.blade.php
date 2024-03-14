<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Perpustakaan Digital</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<br>
<div class="container-fluid">
    <div class="row ">
        <div class=" d-flex justify-content-center"> <!-- Adjust the column size based on your preference -->
            <div class="card-img">
                <img  src="{{ asset('storage/' . $buku->foto) }}" class="card-img-top" alt="...">
            </div>
            <div class="card">
                <div class="card-body">
                    <table class="table table stripped">
                        <tr>
                            <th>Judul Buku: </th>
                            <td>{{$buku->judul}}</td>
                        </tr>
                        <tr>
                            <th>Penulis: </th>
                            <td>{{$buku->penulis}}</td>
                        </tr>
                        <tr>
                            <th>Penerbit: </th>
                            <td>{{$buku->penerbit}}</td>
                        </tr>
                        <tr>
                            <th>Tahun Terbit: </th>
                            <td>{{$buku->tahun_terbit}}</td>
                            <tr>
                                <th>Sinopsis: </th>
                                <td>{{$buku->sinopsis}}</td>
                            </tr>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
