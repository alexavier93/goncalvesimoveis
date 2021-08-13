@extends('layouts.app')

@section('content')

    <!-- Home -->
    <div id="home">

        <!-- Banner Section -->
        <section class="banner-section">

            <div class="banner-carousel owl-carousel owl-theme">
                <!-- Slide Item -->

                <div class="slide-item" style="background-image: url('{{ asset('assets/images/banner-01.jpg') }}');">
                    <div class="container">
                        <div class="title">
                            <h1>Soluções imobiliárias</h1>
                            <h4>para investidores de alta renda</h4>
                        </div>
                    </div>
                </div>
                
            </div>

            <div class="searchblock__content">
                <form id="formBusca" class="filtros__form" action="{{ route('imoveis.busca') }}" method="post">
                    @csrf
                    <div class="row justify-content-start">
                        <div class="col-md-4">
                            <div class="filtros__form__item">
                                <input type="text" id="geocomplete"
                                    class="form-control input_form input__location pac-target-input" name="localizacao"
                                    placeholder="Digite bairro, cidade ou cep" autocomplete="off">
                                <input name="sublocality" type="hidden" value="">
                                <input name="administrative_area_level_2" type="hidden" value="">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="filtros__form__item">
                                <select class="form-control" name="categoria">
                                    @foreach ($categorias as $categoria)
                                        <option value="{{ $categoria->id }}">{{ $categoria->nome }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="filtros__form__item">
                                <select class="form-control" name="tipo">
                                    @foreach ($tipos as $tipo)
                                        <option value="{{ $tipo->id }}">{{ $tipo->nome }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="filtros__form__item">
                                <button type="submit" class="btn btn-default ml-2">Buscar</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </section>

        <section class="imoveis-home">

            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <div class="title-section">
                            <h2><span>Imóveis</span> em destaque</h2>
                            <p>Separamos para você os Empreendimentos Exclusivos do mercado imobiliário.</p>
                        </div>
                    </div>
                </div>

                <div class="imoveis mt-5">
                    <div class="imoveis-carousel owl-carousel owl-theme">

                        @foreach ($imoveis as $imovel)
                            <div class="item">
                                <div class="img">
                                    <div class="tag">{{ $imovel->tag }}</div>
                                    <img src="{{ asset('storage/' . $imovel->imagem) }}" alt="">
                                </div>
                                <div class="label-categoria text-center mb-2">{{ $imovel->categoriaNome }}</div>
                                <div class="content">
                                    <span class="localizacao text-center mb-1">{{ $imovel->cidade.' - '.$imovel->estado}}</span>
                                    <span class="preco text-center mb-2">R$ 300.000,00</span>
                                    <hr class="m-1">
                                    <div class="info">
                                        <div class="clearfix">
                                            <div class="property-meta">
                                                <ul class="property-meta-list list-inline">
                                                    <li>
                                                        <span class="label-content"><i class="fas fa-bed"></i></span>
                                                        <span
                                                            class="label-property quarto">{{ $imovel->dormitorios }}</span>
                                                    </li>
                                                    <li>
                                                        <span class="label-content"><i class="fas fa-bath"></i></span>
                                                        <span
                                                            class="label-property banheiro">{{ $imovel->banheiros }}</span>
                                                    </li>
                                                    <li>
                                                        <span class="label-content"><i
                                                                class="fas fa-ruler-combined"></i></span>
                                                        <span
                                                            class="label-property garagem">{{ $imovel->area_privativa }}</span>
                                                    </li>
                                                    <li><a href="{{ route('imoveis.info', ['slug' => $imovel->slug]) }}"
                                                            class="btn btn-sm">Detalhes</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div>

                </div>

            </div>

        </section>

        <section class="sobre">

            <div class="content">

                <div class="row justify-content-center">
                    <div class="col-sm-12 col-lg-6 texto">
                        <h2>Conheça a<br> Gonçalves Imóvies</h2>

                        <p>Fundada por Nelson Gonçalves Dias – Um jovem empresário que cresceu em Osasco e conquistou seu
                            espaço no mercado imobiliário.</p>
                        <p>Com experiência comercial de 25 anos, desde 2000 construindo e realizando sonhos. Quem conhece,
                            confia e sabe da sua honestidade, seriedade e transparência nos negócios.</p>
                        <p>Venha fazer parte da família Gonçalves, a empresa que cresce cada dia mais com solidez.</p>

                        <a href="#" class="saiba-mais"><i class="far fa-arrow-alt-circle-right"></i> Saiba Mais</a>

                    </div>
                    <div class="col-sm-12 col-lg-6 p-0">
                        <img class="img-fluid" src="{{ asset('assets/images/goncalves_imoveis.jpg') }}" alt="">
                    </div>
                </div>

            </div>

        </section>

        <section class="imoveis-entregues pt-5">

            <div class="container">

                <div class="title-section text-center">
                    <h2><span>Empreendimentos </span> entregues</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut nec sem sed lectus tempus maximus. Sed
                        condimentum, tellus et finibus placerat.</p>
                </div>

                <div class="row mt-5">

                    <div class="col-md-4">

                        <div class="categoria">
                            <img class="img-fluid w-100" src="{{ asset('images/residencias.png') }}" alt="">
                            <div class="label text-center">
                                <h3>Residências</h3>
                                <a href="#" class="btn btn-sm">Saiba mais</a>
                            </div>
                        </div>

                    </div>

                    <div class="col-md-4">

                        <div class="categoria">
                            <img class="img-fluid w-100" src="{{ asset('images/apartamentos.png') }}" alt="">
                            <div class="label text-center">
                                <h3>Apartamentos</h3>
                                <a href="#" class="btn btn-sm">Saiba mais</a>
                            </div>
                        </div>

                    </div>

                    <div class="col-md-4">

                        <div class="categoria">
                            <img class="img-fluid w-100" src="{{ asset('images/comercial.png') }}" alt="">
                            <div class="label text-center">
                                <h3>Comerciais</h3>
                                <a href="#" class="btn btn-sm">Saiba mais</a>
                            </div>
                        </div>

                    </div>




                </div>

            </div>


        </section>

        <section class="blog pt-5">

            <div class="container">

                <div class="title-section text-center">
                    <h2><span>Nosso </span> Blog</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut nec sem sed lectus tempus maximus. Sed
                        condimentum, tellus et finibus placerat.</p>
                </div>

                <div class="row posts my-4">

                    <div class="col-md-3 mb-3">

                        <div class="card">

                            <div class="card-body">

                                <img class="img-fluid w-100 mb-2" src="{{ asset('images/blog-01.png') }}" alt="">

                                <h5 class="card-title">Vestibulum ut justo tincidunt</h5>
                                <h6 class="card-date mb-2 text-muted date">Out 2020</h6>
                                <p class="card-text">Nam mattis, mauris vitae iaculis sagittis, sapien lectus accumsan erat, ut consequat enim massa sed nibh. In vel elementum elit. Fusce vehicula, neque nec varius elementum, justo elit porttitor velit, in aliquam massa odio at est.</p>
                                <a href="#" class="card-link">Continue lendo</a>
                            </div>

                        </div>

                    </div>

                    <div class="col-md-3 mb-3">

                        <div class="card">

                            <div class="card-body">

                                <img class="img-fluid w-100 mb-2" src="{{ asset('images/blog-02.png') }}" alt="">

                                <h5 class="card-title">Curabitur sodales ante</h5>
                                <h6 class="card-date mb-2 text-muted date">Nov 2020</h6>
                                <p class="card-text">Nam mattis, mauris vitae iaculis sagittis, sapien lectus accumsan erat, ut consequat enim massa sed nibh. In vel elementum elit. Fusce vehicula, neque nec varius elementum, justo elit porttitor velit, in aliquam massa odio at est.</p>
                                <a href="#" class="card-link">Continue lendo</a>
                            </div>

                        </div>

                    </div>

                    <div class="col-md-3 mb-3">

                        <div class="card">

                            <div class="card-body">

                                <img class="img-fluid w-100 mb-2" src="{{ asset('images/blog-03.png') }}" alt="">

                                <h5 class="card-title">Morbi posuere, turpis vita</h5>
                                <h6 class="card-date mb-2 text-muted date">Dez 2020</h6>
                                <p class="card-text">Nam mattis, mauris vitae iaculis sagittis, sapien lectus accumsan erat, ut consequat enim massa sed nibh. In vel elementum elit. Fusce vehicula, neque nec varius elementum, justo elit porttitor velit, in aliquam massa odio at est.</p>
                                <a href="#" class="card-link">Continue lendo</a>
                            </div>

                        </div>

                    </div>

                    <div class="col-md-3 mb-3">

                        <div class="card">

                            <div class="card-body">

                                <img class="img-fluid w-100 mb-2" src="{{ asset('images/blog-01.png') }}" alt="">

                                <h5 class="card-title">Vestibulum ut justo tincidunt</h5>
                                <h6 class="card-date mb-2 text-muted date">Out 2020</h6>
                                <p class="card-text">Nam mattis, mauris vitae iaculis sagittis, sapien lectus accumsan erat, ut consequat enim massa sed nibh. In vel elementum elit. Fusce vehicula, neque nec varius elementum, justo elit porttitor velit, in aliquam massa odio at est.</p>
                                <a href="#" class="card-link">Continue lendo</a>
                            </div>

                        </div>

                    </div>


                </div>

            </div>

        </section>


    </div>
    <!-- End Home -->


@endsection
