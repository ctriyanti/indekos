<x-app-layout>
    <div id="page-wrapper">
        <div class="header">
            <h1 class="page-header">
                Tambah Pemilik Kos
            </h1>
            <ol class="breadcrumb">
                <li><a href="#">Beranda</a></li>
                <li><a href="#">Dashboard</a></li>
                <li class="active">Tambah Pemilik Kos</li>
            </ol>

        </div>
        <div id="page-inner">
            <!-- /. ROW  -->
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <form action="{{ route('tambahOwner') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method("POST")
                                <div class="sub-title">Foto Pemilik Kos</div>
                                <div>
                                    <input type="file" name="foto" class="form-control">
                                </div>
                                <div class="sub-title">Nama</div>
                                <div>
                                    <input type="text" name="nama" class="form-control" placeholder="Masukkan nama lengkap">
                                </div>
                                <div class="sub-title">Nomor KTP</div>
                                <div>
                                    <input type="text" name="no_ktp" class="form-control" placeholder="Masukkan nomor KTP">
                                </div>
                                <div class="sub-title">Nomor Handphone</div>
                                <div>
                                    <input type="text" name="no_hp" class="form-control" placeholder="Masukkan nomor handphone">
                                </div>
                                <div class="sub-title">Alamat</div>
                                <div>
                                    <textarea class="form-control" rows="3" name="alamat"></textarea>
                                </div>
                                {{-- <div class="sub-title">Status</div>
                                <div>
                                    <div class="radio3 radio-check radio-inline">
                                        <input type="radio" id="status" name="status" value="active" checked="">
                                        <label for="status">
                                            Aktif
                                        </label>
                                    </div>
                                    <div class="radio3 radio-check radio-inline">
                                        <input type="radio" id="status" name="status" value="inactive" checked="">
                                        <label for="status">
                                            Inaktif
                                        </label>
                                    </div>
                                </div> --}}
                                <div class="form-group">
                                    <div class="col-sm-offset-2 col-sm-10">
                                        <button type="submit" class="btn btn-primary">Simpan</button>
                                    </div>
                                </div>
                            </form>
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