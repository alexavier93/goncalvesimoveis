<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="{{ asset('/assets/images/favicon.ico') }} ">

    <title>Gonçalves Imóveis @yield('title')</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css">
    <link href="{{ asset('assets/css/app.css') }}" rel="stylesheet">

    <script
        src="https://maps.googleapis.com/maps/api/js?v=3&sensor=false&amp;libraries=places&key=AIzaSyAexUoFpkweVmPfHrClf8SMzt-lzHPmiJs">
    </script>

</head>

<body>

    <!-- Header -->
    <header id="header">

        <div class="header-top">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-3 col-lg-3 text-center text-md-start">
                        <ul class="nav-top">
                            <li><a href="https://www.facebook.com/goncalvesimob/" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="https://www.instagram.com/energy_imoveis/" target="_blank"><i class="fab fa-instagram"></i></a></li>
                        </ul>
                    </div>

                    <div class="col-sm-12 col-md-9 col-lg-9 text-center text-md-end">
                        <ul class="nav-top">
                            <li><a href=""><i class="fab fa-whatsapp"></i> 11 94000-7194</a></li>
                            <li><a href=""><i class="far fa-envelope"></i> contato@goncalvesimob.com.br</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="header-nav">

            <div class="container">

                <div class="wrap">

                    <div class="logo">
                        @if (route('home'))
                            <a href="{{ route('home') }}" class="logo-main"><img src="{{ asset('assets/images/logo-goncalvesimoveis.png') }}" alt=""></a>
                        @else
                            <a href="{{ route('home') }}" class="logo-main"><img class="img-fluid"
                                    src="{{ asset('assets/images/logo-goncalvesimoveis.png') }}" alt=""></a>
                        @endif
                        <a href="{{ route('home') }}" class="logo-fix"><img class="img-fluid"
                                src="{{ asset('assets/images/logo-goncalvesimoveis.png') }}" alt=""></a>
                    </div>

                    <div class="menu">

                        <nav class="nav">
                            <ul>
                                <li class="nav-item">
                                    <a class="nav-link @if (\Route::current()->getName() ==
                                        'home') active @endif"
                                        href="{{ route('home') }}">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link @if (\Route::current()->getName() ==
                                        'quemsomos') active @endif"
                                        href="{{ route('quemsomos.index') }}">Empresa</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link @if (\Route::current()->getName() ==
                                        'imoveis') active @endif"
                                        href="{{ route('imoveis.index') }}">Imóveis</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link @if (\Route::current()->getName() ==
                                        'servicos') active @endif"
                                        href="{{ route('home') }}">Blog</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link @if (\Route::current()->getName() ==
                                        'contato') active @endif"
                                        href="{{ route('contato.index') }}">Contato</a>
                                </li>
                            </ul>
                        </nav>

                    </div>

                    <div class="contact">
                        <h5><i class="fas fa-phone-alt"></i> 11 3683-4004</h5>
                    </div>

                    <a href="javascript:void(0)" class="sidemenu_btn d-lg-none" id="sidemenu_toggle">
                        <span></span>
                        <span></span>
                        <span></span>
                    </a>

                </div>

            </div>

        </div>

        <!--Side Nav-->
        <div class="side-menu hidden">
            <div class="inner-wrapper">
                <span class="btn-close" id="btn_sideNavClose"><i></i></span>
                <nav class="side-nav w-100">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('home') }}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('home') }}">Imóveis</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('home') }}">Serviços</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('home') }}">Quem Somos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="">Área do Cliente</a>
                        </li>

                    </ul>
                </nav>

            </div>

        </div>

        <a id="close_side_menu" href="javascript:void(0);"></a>

    </header>
    <!-- Header -->

    <main role="main">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer id="footer">

        <div class="footer-top">

            <div class="container">

                <div class="row justify-content-between links">

                    <div class="col-sm-12 col-md-6 col-lg-5 item-link">

                        <img class="img-fluid mb-4 w-50 logo-footer p-2" src="{{ asset('assets/images/logo-goncalvesimoveis.png') }}" alt="">

                        <p>Com experiência comercial de 25 anos, desde 2000 construindo e realizando sonhos. Quem conhece, confia e sabe da sua honestidade, seriedade e transparência nos negócios.</p>

                        <div class="contact">
                            <div class="contact-icon"><i class="fab fa-whatsapp"></i></div>
                            <div class="contact-info">11 94000-7194</div>
                        </div>

                        <div class="contact">
                            <div class="contact-icon"><i class="fas fa-phone-alt"></i></div>
                            <div class="contact-info">11 3683-4004</div>
                        </div>

                        <div class="contact">
                            <div class="contact-icon"><i class="far fa-envelope"></i></div>
                            <div class="contact-info">contato@goncalvesimob.com.br</div>
                        </div>


                        <div class="address">
                            <div class="address-icon"><i class="fas fa-map-marker-alt"></i></div>
                            <div class="address-info">Av. Hildebrando de Lima, 700 - Km 18<br> Osasco - SP, 06190-160</div>
                        </div>

                        <ul class="social list-inline">
                            <li>
                                <a href="https://www.facebook.com/goncalvesimob" target="_blank">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                            </li>

                            <li>
                                <a href="https://www.instagram.com/energy_imoveis/" target="_blank">
                                    <i class="fab fa-instagram"></i>
                                </a>
                            </li>

                        </ul>

                    </div>

                    <div class="col-sm-12 col-md-6 col-lg-5 item-link">

                        <h3>Fale conosco</h3>
                        <h5 class="mb-3">Praesent blandit pellentesque diam, nec rutrum ipsum ut. Ut viverra tellus sit amet sem sollicitudin aliquam.</h5>

                        <div class="form-contato">

                            <form id="formContato" method="POST">

                                @csrf

                                <input type="hidden" name="url" value="{{ route('contato.sendMail') }}">

                                <div class="row">

                                    <div class="col-md-12">
                                        <div class="form-group my-3">
                                            <input type="text" name="name"
                                                class="form-control @error('name') is-invalid @enderror"
                                                value="{{ old('name') }}" placeholder="Nome" required>
                                            @error('name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group mb-3">
                                            <input type="email" name="email"
                                                class="form-control @error('email') is-invalid @enderror"
                                                value="{{ old('email') }}" placeholder="E-mail" required>
                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group mb-3">
                                            <input type="text" name="phone"
                                                class="form-control telefone @error('phone') is-invalid @enderror"
                                                value="{{ old('phone') }}" placeholder="Telefone">
                                            @error('phone')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group mb-3">
                                            <textarea name="description"
                                                class="form-control @error('description') is-invalid @enderror" rows="5"
                                                placeholder="Mensagem" required>{{ old('description') }}</textarea>
                                            @error('description')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                </div>

                                <div class="form-group mb-3 text-end">
                                    <button type="submit" class="btn btn-primary mb-2">Enviar</button>
                                </div>
                            </form>
                        </div>

                    </div>

                </div>

            </div>

        </div>

        <div class="bottom-footer">

            <div class="container">

                <div class="clearfix">

                    <p class="col-sm-12 col-md-6 col-lg-6 copy">© {{ now()->year }} Gonçalves Imóveis - Todos os
                        direitos reservados</p>

                    <p class="col-sm-12 col-md-6 col-lg-6 dev">
                        Desenvolvido por <a href="https://www.agenciaaffinity.com.br"><img width="90" src="https://agenciaaffinity.com.br/assinatura/affinity-logo-branco.svg"></a>
                    </p>

                </div>

            </div>

        </div>

    </footer>
    <!-- End Footer -->


    <div id="floating-smi" class="floating-smi hidden-xs hidden-sm">
        <div class="floating-smi-wrap">
            <div class="floating-smi-list">
                <div class="textwidget custom-html-widget">
                    <ul>
                        <li>
                            <a href="https://api.whatsapp.com/send?phone=5511958416767" target="_blank"
                                rel="noopener noreferrer">
                                <span class="fab fa-whatsapp"></span>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.facebook.com/goncalvesimob/" target="_blank" rel="noopener noreferrer">
                                <span class="fab fa-facebook-f"></span>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.instagram.com/energy_imoveis/" target="_blank"
                                rel="noopener noreferrer">
                                <span class="fab fa-instagram"></span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>



    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/mixitup/2.1.11/jquery.mixitup.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/geocomplete/1.7.0/jquery.geocomplete.min.js"></script>

    <script src="{{ asset('/assets/js/app.js') }} "></script>



</body>

</html>
