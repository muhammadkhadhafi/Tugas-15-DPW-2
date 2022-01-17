@extends('ecommerce.section.base')

@section('content')

    <div class="col-md-9 content_right">
        <div class="dreamcrub">
            <ul class="breadcrumbs">
                <li class="home">
                    <a href="{{ url('home') }}" title="Go to Home Page">Home</a>
                    <span>&gt;</span>
                </li>
                <li class="home">&nbsp;
                    Apparel&nbsp;
                    <span>&gt;</span>
                </li>
                <li class="home">
                    &nbsp;Women
                    <span>&gt;</span>
                </li>
                <li class="women">
                    Lorem Ipsum
                </li>
            </ul>
            <ul class="previous">
                <li><a href="{{ url('home') }}">Back to Previous Page</a></li>
            </ul>
            <div class="clearfix"></div>
        </div>
        <div class="singel_right">
            <div class="labout span_1_of_a1">
                <!-- start product_slider -->
                <ul id="etalage">
                    <li>
                        <a href="optionallink.html">
                            <img class="etalage_thumb_image" src="{{ url('public') }}/images/s11.jpg"
                                class="img-responsive" />
                            <img class="etalage_source_image" src="{{ url('public') }}/images/s13.jpg"
                                class="img-responsive" />
                        </a>
                    </li>
                    <li>
                        <img class="etalage_thumb_image" src="{{ url('public') }}/images/s12.jpg"
                            class="img-responsive" />
                        <img class="etalage_source_image" src="{{ url('public') }}/images/s12.jpg"
                            class="img-responsive" />
                    </li>
                    <li>
                        <img class="etalage_thumb_image" src="{{ url('public') }}/images/s13.jpg"
                            class="img-responsive" />
                        <img class="etalage_source_image" src="{{ url('public') }}/images/s13.jpg"
                            class="img-responsive" />
                    </li>
                    <li>
                        <img class="etalage_thumb_image" src="{{ url('public') }}/images/s11.jpg"
                            class="img-responsive" />
                        <img class="etalage_source_image" src="{{ url('public') }}/images/s11.jpg"
                            class="img-responsive" />
                    </li>
                    <li>
                        <img class="etalage_thumb_image" src="{{ url('public') }}/images/s12.jpg"
                            class="img-responsive" />
                        <img class="etalage_source_image" src="{{ url('public') }}/images/s12.jpg"
                            class="img-responsive" />
                    </li>
                    <li>
                        <img class="etalage_thumb_image" src="{{ url('public') }}/images/s13.jpg"
                            class="img-responsive" />
                        <img class="etalage_source_image" src="{{ url('public') }}/images/s13.jpg"
                            class="img-responsive" />
                    </li>
                    <li>
                        <img class="etalage_thumb_image" src="{{ url('public') }}/images/s11.jpg"
                            class="img-responsive" />
                        <img class="etalage_source_image" src="{{ url('public') }}/images/s11.jpg"
                            class="img-responsive" />
                    </li>
                    <div class="clearfix"> </div>
                </ul>
                <!-- end product_slider -->
            </div>
            <div class="cont1 span_2_of_a1">
                <h1> Lorem Ipsum</h1>
                <ul class="rating">
                    <li><a class="product-rate" href="#"> </a> <span> </span></li>
                    <li><a href="#">1 Review(s) Add Review</a></li>
                    <div class="clearfix"></div>
                </ul>
                <div class="price_single">
                    <span class="reducedfrom">$140.00</span>
                    <span class="actual">$120.00</span><a href="#">click for offer</a>
                </div>
                <h2 class="quick">Quick Overview:</h2>
                <p class="quick_desc"> Nam liber tempor cum soluta nobis eleifend option congue nihil
                    imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem
                    insitam; es</p>
                <ul class="size">
                    <h3>Size</h3>
                    <li><a href="#">25</a></li>
                    <li><a href="#">26</a></li>
                    <li><a href="#">27</a></li>
                    <li><a href="#">28</a></li>
                    <li><a href="#">29</a></li>
                    <li><a href="#">30</a></li>
                    <li><a href="#">31</a></li>
                    <li><a href="#">32</a></li>
                    <li><a href="#">33</a></li>
                </ul>
                <ul class="size">
                    <h3>Length</h3>
                    <li><a href="#">32</a></li>
                    <li><a href="#">34</a></li>
                </ul>
                <ul class="product-qty">
                    <span>Quantity:</span>
                    <select>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                        <option>6</option>
                    </select>
                </ul>
                <div class="btn_form">
                    <form>
                        <input type="submit" value="Add to Cart" title="">
                    </form>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
        {{-- Ajax --}}
        <div class="container">
            <div class="row">
                <div class="col-md-12 mt-5">
                    <div class="card">
                        <div class="card-header">
                            Alamat
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-3">
                                    <label for="" class="control-label">Provinsi</label>
                                    <select name="" class="form-control" onchange="gantiProvinsi(this.value)">
                                        <option value="">Pilih Provinsi</option>
                                        @foreach ($list_provinsi as $provinsi)
                                            <option value="{{ $provinsi->id }}">{{ $provinsi->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-md-3">
                                    <label for="" class="control-label">Kabupaten/Kota</label>
                                    <select name="" class="form-control" id="kabupaten"
                                        onchange="gantiKabupaten(this.value)">
                                        <option value="">Pilih Provinsi Terlebih Dahulu</option>
                                    </select>
                                </div>
                                <div class="col-md-3">
                                    <label for="" class="control-label">Kecamatan</label>
                                    <select name="" class="form-control" id="kecamatan"
                                        onchange="gantiKecamatan(this.value)">
                                        <option value="">Pilih Kabupaten Terlebih Dahulu</option>
                                    </select>
                                </div>
                                <div class="col-md-3">
                                    <label for="" class="control-label">Desa</label>
                                    <select name="" class="form-control" id="desa">
                                        <option value="">Pilih Kecamatan Terlebih Dahulu</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- End Ajax --}}
        <div class="sap_tabs">
            <div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
                <ul class="resp-tabs-list">
                    <li class="resp-tab-item" aria-controls="tab_item-0" role="tab"><span>Product
                            Description</span></li>
                    <li class="resp-tab-item" aria-controls="tab_item-1" role="tab"><span>Additional
                            Information</span></li>
                    <li class="resp-tab-item" aria-controls="tab_item-2" role="tab"><span>Reviews</span></li>
                    <div class="clear"></div>
                </ul>
                <div class="resp-tabs-container">
                    <div class="tab-1 resp-tab-content" aria-labelledby="tab_item-0">
                        <div class="facts">
                            <ul class="tab_list">
                                <li><a href="#">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed
                                        diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat
                                        volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation
                                        ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo
                                        consequat</a></li>
                                <li><a href="#">augue duis dolore te feugait nulla facilisi. Nam liber tempor
                                        cum soluta nobis eleifend option congue nihil imperdiet doming id quod
                                        mazim placerat facer possim assum. Typi non habent claritatem insitam;
                                        est usus legentis in iis qui facit eorum claritatem. Investigatione</a>
                                </li>
                                <li><a href="#">claritatem insitam; est usus legentis in iis qui facit eorum
                                        claritatem. Investigationes demonstraverunt lectores legere me lius quod
                                        ii legunt saepius. Claritas est etiam processus dynamicus, qui sequitur
                                        mutationem consuetudium lectorum. Mirum est notare quam littera
                                        gothica</a></li>
                                <li><a href="#">Mirum est notare quam littera gothica, quam nunc putamus parum
                                        claram, anteposuerit litterarum formas humanitatis per seacula quarta
                                        decima et quinta decima. Eodem modo typi, qui nunc nobis videntur parum
                                        clari, fiant sollemnes in futurum.</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="tab-1 resp-tab-content" aria-labelledby="tab_item-1">
                        <div class="facts">
                            <ul class="tab_list">
                                <li><a href="#">augue duis dolore te feugait nulla facilisi. Nam liber tempor
                                        cum soluta nobis eleifend option congue nihil imperdiet doming id quod
                                        mazim placerat facer possim assum. Typi non habent claritatem insitam;
                                        est usus legentis in iis qui facit eorum claritatem. Investigatione</a>
                                </li>
                                <li><a href="#">claritatem insitam; est usus legentis in iis qui facit eorum
                                        claritatem. Investigationes demonstraverunt lectores legere me lius quod
                                        ii legunt saepius. Claritas est etiam processus dynamicus, qui sequitur
                                        mutationem consuetudium lectorum. Mirum est notare quam littera
                                        gothica</a></li>
                                <li><a href="#">Mirum est notare quam littera gothica, quam nunc putamus parum
                                        claram, anteposuerit litterarum formas humanitatis per seacula quarta
                                        decima et quinta decima. Eodem modo typi, qui nunc nobis videntur parum
                                        clari, fiant sollemnes in futurum.</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="tab-1 resp-tab-content" aria-labelledby="tab_item-2">
                        <ul class="tab_list tab_last">
                            <li><a href="#">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam
                                    nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat
                                    volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation
                                    ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat</a>
                            </li>
                            <li><a href="#">augue duis dolore te feugait nulla facilisi. Nam liber tempor cum
                                    soluta nobis eleifend option congue nihil imperdiet doming id quod mazim
                                    placerat facer possim assum. Typi non habent claritatem insitam; est usus
                                    legentis in iis qui facit eorum claritatem. Investigatione</a></li>
                            <li><a href="#">claritatem insitam; est usus legentis in iis qui facit eorum
                                    claritatem. Investigationes demonstraverunt lectores leg</a></li>
                            <li><a href="#">Mirum est notare quam littera gothica, quam nunc putamus parum
                                    claram, anteposuerit litterarum formas humanitatis per seacula quarta decima
                                    et quinta decima. Eodem modo typi, qui nunc nobis videntur parum clari,
                                    fiant sollemnes in futurum.</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <h3 class="like">You Might Also Like</h3>
        <ul id="flexiselDemo3">
            <li><img src="{{ url('public') }}/images/pic3.jpg" class="img-responsive" />
                <div class="grid-flex"><a href="#">Syenergy 2mm</a>
                    <p>Rs 850</p>
                </div>
            </li>
            <li><img src="{{ url('public') }}/images/pic4.jpg" class="img-responsive" />
                <div class="grid-flex"><a href="#">Surf Yoke</a>
                    <p>Rs 1050</p>
                </div>
            </li>
            <li><img src="{{ url('public') }}/images/pic5.jpg" class="img-responsive" />
                <div class="grid-flex"><a href="#">Salty Daiz</a>
                    <p>Rs 990</p>
                </div>
            </li>
            <li><img src="{{ url('public') }}/images/pic3.jpg" class="img-responsive" />
                <div class="grid-flex"><a href="#">Cheeky Zane</a>
                    <p>Rs 850</p>
                </div>
            </li>
            <li><img src="{{ url('public') }}/images/pic4.jpg" class="img-responsive" />
                <div class="grid-flex"><a href="#">Synergy</a>
                    <p>Rs 870</p>
                </div>
            </li>
        </ul>
        <script type="text/javascript">
            $(window).load(function() {
                $("#flexiselDemo3").flexisel({
                    visibleItems: 3,
                    animationSpeed: 1000,
                    autoPlay: true,
                    autoPlaySpeed: 3000,
                    pauseOnHover: true,
                    enableResponsiveBreakpoints: true,
                    responsiveBreakpoints: {
                        portrait: {
                            changePoint: 480,
                            visibleItems: 1
                        },
                        landscape: {
                            changePoint: 640,
                            visibleItems: 2
                        },
                        tablet: {
                            changePoint: 768,
                            visibleItems: 3
                        }
                    }
                });

            });
        </script>
        <script type="text/javascript" src="{{ url('public') }}/js/jquery.flexisel.js"></script>
        <h3 class="recent">Recently Viewed</h3>
        <ul id="flexiselDemo1">
            <li><img src="{{ url('public') }}/images/pic6.jpg" class="img-responsive" />
                <div class="grid-flex"><a href="#">Syenergy 2mm</a>
                    <p>Rs 850</p>
                </div>
            </li>
            <li><img src="{{ url('public') }}/images/pic7.jpg" class="img-responsive" />
                <div class="grid-flex"><a href="#">Surf Yoke</a>
                    <p>Rs 1050</p>
                </div>
            </li>
            <li><img src="{{ url('public') }}/images/pic8.jpg" class="img-responsive" />
                <div class="grid-flex"><a href="#">Salty Daiz</a>
                    <p>Rs 990</p>
                </div>
            </li>
            <li><img src="{{ url('public') }}/images/pic6.jpg" class="img-responsive" />
                <div class="grid-flex"><a href="#">Cheeky Zane</a>
                    <p>Rs 850</p>
                </div>
            </li>
            <li><img src="{{ url('public') }}/images/pic7.jpg" class="img-responsive" />
                <div class="grid-flex"><a href="#">Synergy</a>
                    <p>Rs 870</p>
                </div>
            </li>
        </ul>
        <script type="text/javascript">
            $(window).load(function() {
                $("#flexiselDemo1").flexisel({
                    visibleItems: 3,
                    animationSpeed: 1000,
                    autoPlay: true,
                    autoPlaySpeed: 3000,
                    pauseOnHover: true,
                    enableResponsiveBreakpoints: true,
                    responsiveBreakpoints: {
                        portrait: {
                            changePoint: 480,
                            visibleItems: 1
                        },
                        landscape: {
                            changePoint: 640,
                            visibleItems: 2
                        },
                        tablet: {
                            changePoint: 768,
                            visibleItems: 3
                        }
                    }
                });

            });
        </script>
    </div>
    <div class="clearfix"> </div>
@endsection

@push('script')
    <script>
        contoh = {
            "id": 6101,
            "id_provinsi": "61",
            "name": "KAB. SAMBAS",
            "id_jenis": 1
        }

        function gantiProvinsi(id) {
            $.get("api/provinsi/" + id, function(result) {
                result = JSON.parse(result)
                option = ""
                for (item of result) {
                    option += `<option value="${item.id}">${item.name}</option>`;
                }
                $("#kabupaten").html(option)
            });
        }

        function gantiKabupaten(id) {
            $.get("api/kabupaten/" + id, function(result) {
                result = JSON.parse(result)
                option = ""
                for (item of result) {
                    option += `<option value="${item.id}">${item.name}</option>`;
                }
                $("#kecamatan").html(option)
            });
        }

        function gantiKecamatan(id) {
            $.get("api/kecamatan/" + id, function(result) {
                result = JSON.parse(result)
                option = ""
                for (item of result) {
                    option += `<option value="${item.id}">${item.name}</option>`;
                }
                $("#desa").html(option)
            });
        }
    </script>
@endpush
