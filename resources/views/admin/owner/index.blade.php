<x-app-layout>
    <div id="page-wrapper">
        <div class="header">
            <h1 class="page-header">
                Dashboard <small>Welcome John Doe</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#">Beranda</a></li>
                <li><a href="#">Dashboard</a></li>
                <li class="active">Daftar Pemilik Kos</li>
            </ol>

        </div>
        <div id="page-inner">
            <!-- /. ROW  -->
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">

                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Daftar Pemilik Kos
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th class="text-center">No.</th>
                                            <th class="text-center">Gambar</th>
                                            <th>Nama</th>
                                            <th class="text-center">Nomor Handphone</th>
                                            <th class="text-center">Nomor KTP</th>
                                            <th>Alamat</th>
                                            <th class="text-center">Tanggal Dibuat</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($owner as $item)
                                            <tr>
                                                <td class="text-center">{{ $loop->iteration }}</td>
                                                <td class="text-center">
                                                    <img src="{{ asset($item->foto) }}" alt="foto pemilik kos" height="120px">    
                                                </td>
                                                <td>{{ $item->nama }}</td>
                                                <td class="text-center">{{ $item->no_hp }}</td>
                                                <td class="text-center">{{ $item->no_ktp }}</td>
                                                <td>{{ $item->alamat }}</td>
                                                <td class="text-center">{{ $item->created_at->format('Y-m-d') }}</td>
                                                <td style="display: flex; margin: 5px" class="m-sm-1">
                                                    <a href="{{ url('admin/owner/edit/'.$item->id) }}" class="btn btn-success" style="margin-right: 5px">Sunting</a>
                                                    <form action="{{route('hapusOwner')}}" method="POST" enctype="multipart/form-data">
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