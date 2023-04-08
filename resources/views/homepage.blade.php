<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Eloquent Relationships</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.7.2/css/all.min.css" referrerpolicy="no-referrer" />
</head>
<body>
    <nav class="navbar px-4 sticky-top navbar-dark bg-dark">
        <a class="navbar-brand m-0 fw-bold" href="#"> Tugas Pemanasan Sebelum Ujian</a>
        <span class="navbar-brand m-0"> Diana Petrina | 2440015442 </span>
    </nav>

    <div class="container">
        <div class="mt-5">
            <div class="card-body">
                <h3 class="text-center">Eloquent Relationship</h3>
                <h4 class="text-center">One-to-One Relationship & One-to-Many Relationship</h4>
                <h6 class="text-center mb-4">Relationship of Songwriters, IPI Numbers, and Songs</h6>
                <table class="table table-secondary table-bordered table-hover">
                    <thead>
                        <tr class="table-dark">
                            <th>Songwriter</th>
                            <th>IPI Number</th>
                            <th>Songs</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($songwriters as $songwriter)
                            <tr class="table-hover">
                                <td>{{ $songwriter->name }}</td>
                                <td>{{ $songwriter->ipis->ipiNumber }}</td>
                                <td>
                                    @foreach($songwriter->ipis->songs()->get() as $song)
                                        <div class="card border-light mb-3 shadow-sm" >
                                            <div class="card-header card-title">
                                                <i class="fa fa-music"></i> {{ $song->songTitle }}
                                            </div>
                                            <div class="card-body card-text p-2">
                                                <p class="fst-italic mb-0 small"> Released in {{$song->yearReleased}}</p>
                                            </div>
                                        </div>
                                    @endforeach
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>
