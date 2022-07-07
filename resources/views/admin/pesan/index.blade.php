<x-app-layout>
    <div id="page-wrapper">
        <div class="header">
            <h1 class="page-header">
                Dashboard <small>Welcome Admin</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#">Beranda</a></li>
                <li><a href="#">Dashboard</a></li>
                <li class="active">Daftar Pesan</li>
            </ol>

        </div>
        <div id="page-inner">
            <!-- /. ROW  -->
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">

                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Daftar Pesan
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th class="text-center">No.</th>
                                            <th>Nama</th>
                                            <th>Email</th>
                                            <th class="text-center">No wa/hp</th>
                                            <th>Pesan</th>
                                            <th class="text-center">Testimoni</th>
                                            <th class="text-center">Tanggal Dibuat</th>
                                            <th class="text-center">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($pesan as $item)
                                            <tr>
                                                <td class="text-center">{{ $loop->iteration }}</td>
                                                <td>{{ $item->name }}</td>
                                                <td>{{ $item->email }}</td>
                                                <td class="text-center">{{ $item->phone }}</td>
                                                <td>{{ $item->message }}</td>
                                                <td class="text-center">{{ $item->is_testimoni == false ? "Tidak" : "Tampil"}}</td>
                                                <td class="text-center">{{ $item->created_at }}</td>
                                                <td style="display: flex; margin: 5px;" class="m-sm-1">
                                                    <form action="{{route('setTestimoni')}}" method="POST" enctype="multipart/form-data" style="margin: 0 px 5px">
                                                        @csrf
                                                        @method("POST")
                                                        <input type="hidden" value="{{ $item->id }}" name="id">
                                                        <button class="btn btn-primary">Set Testimoni</button>
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