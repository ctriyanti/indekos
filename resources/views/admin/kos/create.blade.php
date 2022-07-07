<x-app-layout>
    <div id="page-wrapper">
        <div class="header">
            <h1 class="page-header">
                Tambah Kos
            </h1>
            <ol class="breadcrumb">
                <li><a href="#">Beranda</a></li>
                <li><a href="#">Dashboard</a></li>
                <li class="active">Tambah Kos</li>
            </ol>

        </div>
        <div id="page-inner">
            <!-- /. ROW  -->
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <form action="{{ route('tambahKos') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method("POST")
                                <div class="sub-title">Pemilik Kos</div>
                                <div>
                                    <select class="form-control get-owner" name="pemilik_kos" id="pemilik_kos"">
                                        <option value="" disabled>-- Pilih Pemilik Kos --</option>
                                        @foreach ($owners as $owner)
                                            <option  value="{{ $owner->id }}">{{ $owner->nama }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                {{-- <div class="sub-title">Nomor Handphone</div>
                                <div>
                                    <input type="text" name="no_hp" class="form-control" value="" disabled>
                                </div>
                                <div class="sub-title">Nomor KTP</div>
                                <div>
                                    <input type="text" name="no_ktp" class="form-control" value="" disabled>
                                </div>
                                <div class="sub-title">Alamat</div>
                                <div>
                                    <textarea class="form-control" rows="3" name="alamat" disabled></textarea>
                                </div> --}}
                                <div class="sub-title">Kecamatan</div>
                                <div>
                                    <select class="form-control" name="kecamatan_id" id="kecamatan_id">
                                        <option value="" disabled>-- Pilih Kecamatan --</option>
                                        @foreach ($kecamatans as $kec)
                                            <option value="{{ $kec->id }}">{{ $kec->kecamatan }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="sub-title">Nama Kos</div>
                                <div>
                                    <input type="text" name="nama_kos" class="form-control" value="" >
                                </div>
                                <div class="sub-title">Harga</div>
                                <div>
                                    <input type="number" name="harga" class="form-control" value="" >
                                </div>
                                <div class="sub-title">Deskripsi</div>
                                <div>
                                    <textarea class="form-control" rows="3" name="deskripsi"></textarea>
                                </div>
                                <div class="sub-title">URL Map</div>
                                <div>
                                    <input type="text" name="url_map" class="form-control" value="" >
                                </div>
                                {{-- <div class="sub-title">Embed Map</div>
                                <div>
                                    <input type="text" name="embed_map" class="form-control" value="" >
                                </div> --}}
                                <div class="sub-title">Jenis Sewa</div>
                                <div>
                                    <select class="form-control" name="jenis_sewa" id="jenis_sewa">
                                        <option value="" disabled>-- Pilih Jenis Sewa --</option>
                                        <option value="harian">Harian</option>
                                        <option value="bulanan">Bulanan</option>
                                        <option value="tahunan">Tahunan</option>
                                    </select>
                                </div>
                                <div class="sub-title">Foto Kos</div>
                                <div>
                                    <input type="file" name="foto_kos" id="foto_kos" class="form-control">
                                </div>
                                <div class="sub-title">Status</div>
                                <div>
                                    <div class="radio3 radio-check radio-inline">
                                        <input type="radio" id="status" name="status" value="active" checked>
                                        <label for="status">
                                            Aktif
                                        </label>
                                    </div>
                                    <div class="radio3 radio-check radio-inline">
                                        <input type="radio" id="status" name="status" value="inactive">
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