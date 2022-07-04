<x-app-layout>
    <div id="page-wrapper">
        <div class="header">
            <h1 class="page-header">
                Dashboard <small>Welcome John Doe</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#">Beranda</a></li>
                <li><a href="#">Dashboard</a></li>
                <li class="active">Daftar Kecamatan</li>
            </ol>

        </div>
        <div id="page-inner">
            <!-- /. ROW  -->
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">

                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Daftar Kecamatan
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th class="text-center">No.</th>
                                            <th class="text-center">Foto Utama</th>
                                            <th>Kecamatan</th>
                                            <th>Pemilik Kos</th>
                                            <th>Nama Kos</th>
                                            <th>Jenis Sewa</th>
                                            <th class="text-center">Harga</th>
                                            <th class="text-center">Status</th>
                                            <th>Diubah Oleh</th>
                                            <th class="text-center">Tanggal Dibuat</th>
                                            <th class="text-center">Lihat Map</th>
                                            <th class="text-center">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($kecamatan as $item)
                                            <tr>
                                                <td class="text-center">{{ $loop->iteration }}</td>
                                                <td>{{ $item->kecamatan }}</td>
                                                <td>{{ Str::limit($item->description, 70, '...') }}</td>
                                                <td class="text-center">{{ $item->status }}</td>
                                                <td class="text-center">{{ $item->updated_by }}</td>
                                                <td style="display: flex; margin: 5px" class="m-sm-1">
                                                    <a href="{{ url('admin/kecamatan/edit/'.$item->id) }}" class="btn btn-success" style="margin-right: 5px">Sunting</a>
                                                    <form action="{{route('hapusKecamatan')}}" method="POST" enctype="multipart/form-data">
                                                        @csrf
                                                        @method("POST")
                                                        <input type="hidden" value="{{ $item->id }}" name="id">
                                                        <button class="btn btn-danger">Hapus</button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /. ROW  -->
            @include('admin.partials.footer')
        </div>
        <!-- /. PAGE INNER  -->
    </div>
</x-app-layout>