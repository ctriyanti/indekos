<x-app-layout>
    <div id="page-wrapper">
        <div class="header">
            <h1 class="page-header">
                Sunting Pemilik Kos
            </h1>
            <ol class="breadcrumb">
                <li><a href="#">Beranda</a></li>
                <li><a href="#">Dashboard</a></li>
                <li class="active">Sunting Pemilik Kos</li>
            </ol>

        </div>
        <div id="page-inner">
            <!-- /. ROW  -->
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <form action="{{ route('simpanOwner') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method("POST")
                                <div class="sub-title">Nama</div>
                                <div>
                                    <input type="hidden" name="id" id="id" value="{{ $owner->id }}">
                                    <input type="text" name="nama" class="form-control" value="{{ $owner->nama }}">
                                </div>
                                <div class="sub-title">Nomor KTP</div>
                                <div>
                                    <input type="text" name="no_ktp" class="form-control" value="{{ $owner->no_ktp }}">
                                </div>
                                <div class="sub-title">Nomor Handphone</div>
                                <div>
                                    <input type="text" name="no_hp" class="form-control" value="{{ $owner->no_hp }}">
                                </div>
                                <div class="sub-title">Alamat</div>
                                <div>
                                    <textarea class="form-control" rows="3" name="alamat">{{ $owner->alamat }}</textarea>
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