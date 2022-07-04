<x-app-layout>
    <div id="page-wrapper">
        <div class="header">
            <h1 class="page-header">
                Sunting Kecamatan {{ $kecamatan->kecamatan }}
            </h1>
            <ol class="breadcrumb">
                <li><a href="#">Beranda</a></li>
                <li><a href="#">Dashboard</a></li>
                <li class="active">Sunting Kecamatan</li>
            </ol>

        </div>
        <div id="page-inner">
            <!-- /. ROW  -->
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <form action="{{ route('simpanKecamatan') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method("POST")
                                <div class="sub-title">Kecamatan</div>
                                <div>
                                    <input type="hidden" name="id" id="id" value="{{ $kecamatan->id }}">
                                    <input type="text" name="kecamatan" class="form-control" value="{{ $kecamatan->kecamatan }}">
                                </div>
                                <div class="sub-title">Deskripsi</div>
                                <div>
                                    <textarea class="form-control" rows="3" name="deskripsi">{{ $kecamatan->description }}</textarea>
                                </div>
                                <div class="sub-title">Status</div>
                                <div>
                                    <div class="radio3 radio-check radio-inline">
                                        <input type="radio" id="status" name="status" value="active" {{ $kecamatan->status == 'active' ? 'checked' : '' }}>
                                        <label for="status">
                                            Aktif
                                        </label>
                                    </div>
                                    <div class="radio3 radio-check radio-inline">
                                        <input type="radio" id="status" name="status" value="inactive" {{ $kecamatan->status == 'inactive' ? 'checked' : '' }}>
                                        <label for="status">
                                            Inaktif
                                        </label>
                                    </div>
                                </div>
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