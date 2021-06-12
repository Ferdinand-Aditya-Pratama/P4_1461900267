<head>
    <meta name="viewport" content="width=device-width, 
    initial-scale=1">
    <title>Data Rak Buku</title>
    <style>
        table {
        border-collapse: collapse;
        border-spacing: 0;
        width: 100%;
        border: 1px solid #ddd;
        }
        thead {
        background-color: #f2f2f2;
        }
        th, td {
        text-align: left;
        padding: 8px;
        }
        tr:nth-child(even){background-color: #f2f2f2}
        .tambah{
        padding: 8px 16px ;
        text-decoration: none;
        }
    </style>
</head>

<body>
    <div style="overflow-x:auto">

        <a class="tambah" href="{{ route('tambah0267.create') }}">Tambah Data </a>
        <a class="tambah" href="{{url('/buku/export')}}">Print </a>
        <table>
            <thead>
                <tr>
                    <th>ID Rak Buku</th>
                    <th>Judul Buku</th>
                    <th>Jenis Buku</th>
                    <th>Tahun Terbit</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $no=1; ?>
                @foreach ($buku as $bk)
                    <tr>
                        <td>{{$bk->id}}</td>
                        <td>{{$bk->judul}}</td>
                        <td>{{$bk->jenis}}</td>
                        <td>{{$bk->tahun_terbit}}</td>
                        <td> 
                            <a href="{{ url('buku/' . $bk->id . "/edit") }}">Edit </a>
                            |
                            <form action="{{ url('buku/' . $bk->id) }}" method="post">
                                @csrf
                                <input type="hidden" name="_method" value="delete">
                                <button type="submit">Delete</button>
                            </form>
                        </td>
                    </tr>

                @endforeach
            </tbody>
        </table>

    </div>
</body>