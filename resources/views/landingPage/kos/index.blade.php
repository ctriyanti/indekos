<x-guest-layout>
    {{-- Banner Header --}}
    <header class="masthead">
        <div class="container">
            <div class="masthead-subheading">Selamat datang di [nama_website]</div>
            <div class="masthead-heading text-uppercase">Temukan kos menarik sesuai selera mu!</div>
            <div class="find-kos">
                <form action="{{ route('findKos') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method("POST")
                    <select name="kecamatan" id="kecamatan" class="form-control kecamatan">
                        <option value="" disabled selected >-- Pilih Kecamatan --</option>
                        @foreach ($kecamatan as $item)
                            <option value="{{ $item->id }}" >{{ $item->kecamatan }}</option>  
                        @endforeach
                    </select>
                    <button class="btn btn-primary text-uppercase">Cari Kos</button>
                </form>
            </div>
        </div>
    </header><!-- Portfolio Grid-->
    <section class="page-section bg-light" id="portfolio">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">Daftar Semua Kos</h2>
                <h3 class="section-subheading text-muted">find your comfy place here!</h3>
            </div>
            <div class="row">
                @foreach ($kos as $place)
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Portfolio item 1-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal{{ $place->id }}">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="{{ asset($place->foto_utama) }}" alt="{{ $place->nama_kos }}" />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">{{ $place->nama_kos }}</div>
                                <div class="portfolio-caption-subheading text-muted text-justify">{{ Str::limit($place->description, 100, '...') }}</div>
                            </div>
                        </div>
                    </div>
                    <!-- Portfolio item 1 modal popup-->
                    <div class="portfolio-modal modal fade" id="portfolioModal{{ $place->id }}" tabindex="-1" role="dialog" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="close-modal" data-bs-dismiss="modal"><img src="{{asset('tlandingPage/assets/img/close-icon.svg')}}" alt="Close modal" /></div>
                                <div class="container">
                                    <div class="row justify-content-center">
                                        <div class="col-lg-8">
                                            <div class="modal-body">
                                                <!-- Project details-->
                                                <h2 class="text-uppercase">Project Name</h2>
                                                <p class="item-intro text-muted">{{ $place->kecamatan->kecamatan }}</p>
                                                <img class="img-fluid d-block mx-auto" src="{{ asset($place->foto_utama) }}" alt="{{ $place->nama_kos }}" />
                                                <p>
                                                    {{ $place->description }}
                                                </p>
                                                <ul class="list-inline">
                                                    <li>
                                                        <strong>Fasilitas:</strong>
                                                        Threads
                                                    </li>
                                                </ul>
                                                <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                                    <i class="fas fa-home me-1"></i>
                                                    Booking Kos!
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- Services-->
    <section class="page-section" id="services">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">Layanan</h2>
                <h3 class="section-subheading text-muted">Kami menyediakan kos terbaik se-Jakarta</h3>
            </div>
            <div class="row text-center">
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fas fa-circle fa-stack-2x text-primary"></i>
                        <i class="fas fa-shopping-cart fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="my-3">Bersih</h4>
                    <p class="text-muted">Terjaminnya kebersian setiap kos yang membuat penyewa merasa nyaman.</p>
                </div>
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fas fa-circle fa-stack-2x text-primary"></i>
                        <i class="fas fa-laptop fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="my-3">Keamanan</h4>
                    <p class="text-muted">Setiap kos dipastikan memiliki sistem keamanan yang sudah dikonfirmasi.</p>
                </div>
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fas fa-circle fa-stack-2x text-primary"></i>
                        <i class="fas fa-lock fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="my-3">Pemilik Kos</h4>
                    <p class="text-muted">Keramahan pemilik kos tentunya impian semua orang.</p>
                </div>
            </div>
        </div>
    </section>
    
    <!-- About-->
    <section class="page-section" id="about">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">Kosan Lainnya...</h2>
                <h3 class="section-subheading text-muted">Pilihan kos kami lainnya</h3>
            </div>
            <ul class="timeline">
                <li>
                    <div class="timeline-image"><img class="rounded-circle img-fluid" src="{{asset('tlandingPage/assets/img/about/1.jpg')}}" alt="..." /></div>
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            <h4>2009-2011</h4>
                            <h4 class="subheading">Our Humble Beginnings</h4>
                        </div>
                        <div class="timeline-body"><p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p></div>
                    </div>
                </li>
                <li class="timeline-inverted">
                    <div class="timeline-image"><img class="rounded-circle img-fluid" src="{{asset('tlandingPage/assets/img/about/2.jpg')}}" alt="..." /></div>
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            <h4>March 2011</h4>
                            <h4 class="subheading">An Agency is Born</h4>
                        </div>
                        <div class="timeline-body"><p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p></div>
                    </div>
                </li>
                <li>
                    <div class="timeline-image"><img class="rounded-circle img-fluid" src="{{asset('tlandingPage/assets/img/about/3.jpg')}}" alt="..." /></div>
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            <h4>December 2015</h4>
                            <h4 class="subheading">Transition to Full Service</h4>
                        </div>
                        <div class="timeline-body"><p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p></div>
                    </div>
                </li>
                <li class="timeline-inverted">
                    <div class="timeline-image"><img class="rounded-circle img-fluid" src="{{asset('tlandingPage/assets/img/about/4.jpg')}}" alt="..." /></div>
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            <h4>July 2020</h4>
                            <h4 class="subheading">Phase Two Expansion</h4>
                        </div>
                        <div class="timeline-body"><p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p></div>
                    </div>
                </li>
                <li class="timeline-inverted">
                    <div class="timeline-image">
                        <h4>
                            Pilih
                            <br />
                            Kos Kamu
                            <br />
                            Sekarang!
                        </h4>
                    </div>
                </li>
            </ul>
        </div>
    </section>
    
    <!-- Clients-->
    <div class="py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-3 col-sm-6 my-3">
                    <a href="#!"><img class="img-fluid img-brand d-block mx-auto" src="{{asset('tlandingPage/assets/img/logos/microsoft.svg')}}" alt="..." aria-label="Microsoft Logo" /></a>
                </div>
                <div class="col-md-3 col-sm-6 my-3">
                    <a href="#!"><img class="img-fluid img-brand d-block mx-auto" src="{{asset('tlandingPage/assets/img/logos/google.svg')}}" alt="..." aria-label="Google Logo" /></a>
                </div>
                <div class="col-md-3 col-sm-6 my-3">
                    <a href="#!"><img class="img-fluid img-brand d-block mx-auto" src="{{asset('tlandingPage/assets/img/logos/facebook.svg')}}" alt="..." aria-label="Facebook Logo" /></a>
                </div>
                <div class="col-md-3 col-sm-6 my-3">
                    <a href="#!"><img class="img-fluid img-brand d-block mx-auto" src="{{asset('tlandingPage/assets/img/logos/ibm.svg')}}" alt="..." aria-label="IBM Logo" /></a>
                </div>
            </div>
        </div>
    </div>
    
</x-guest-layout>