@extends('layouts.app')

@section('title', '- Serviços')

@section('content')

    <div id="imoveis">

        <div class="page-title-content" style="background: url('{{ asset('assets/images/banner-pages/banner-imoveis.png') }}')">
            <div class="container">
                <h5>Imóveis</h5>
                <h1>Lorem Ipsum Dolor Sit Amet</h1>
            </div>
        </div>

        <div class="container">

            <div class="content">

                <div class="row">

                    <div class="col-md-3">

                        <form id="formFilter" action="{{ route('imoveis.busca') }}" method="POST">

                            @csrf

                            <h3>Filtros</h3>

                            <select class="form-control mb-3" name="categoria">
                                <option value="">Selecione uma categoria</option>
                                @foreach ($categorias as $categoria)
                                    <option value="{{ $categoria->id }}">{{ $categoria->nome }}</option>
                                @endforeach
                            </select>

                            <select class="form-control mb-3" name="tipo">
                                <option value="">Selecione um tipo</option>
                                @foreach ($tipos as $tipo)
                                    <option value="{{ $tipo->id }}">{{ $tipo->nome }}</option>
                                @endforeach
                            </select>

                            <button class="btn btn-default ml-2">Buscar</button>

                        </form>

                    </div>

                    <div class="col-md-9">

                        <div class="list">

                            <div class="row">

                                @foreach ($imoveis as $imovel)

                                <div class="col-md-6 col-lg-4">
                                    
                                    <div class="item">
                                        <div class="img">
                                            <div class="tag">{{ $imovel->tag }}</div>
                                            <img src="{{ asset('storage/' . $imovel->image) }}" alt="">
                                        </div>
                                        <div class="content">
                                            <span class="title">{{ $imovel->nome }}</span>
                                            <span class="description">{!! Str::limit($imovel->descricao, 130) !!}</span> 
                                            <div class="info">
                                                <div class="clearfix">
                                                    <div class="property-meta">
                                                        <ul class="property-meta-list list-inline">
                                                            <li>
                                                                <span class="label-content"><i class="fas fa-bed"></i></span>
                                                                <span class="label-property quarto">{{ $imovel->dormitorios }}</span>
                                                            </li>
                                                            <li>
                                                                <span class="label-content"><i class="fas fa-bath"></i></span>
                                                                <span class="label-property banheiro">{{ $imovel->banheiros }}</span>
                                                            </li>
                                                            <li>
                                                                <span class="label-content"><i class="fas fa-ruler-combined"></i></span>
                                                                <span class="label-property garagem">{{ $imovel->area_privativa }}</span>
                                                            </li>
                                                            <li><a href="{{ route('imoveis.info', ['slug' => $imovel->slug]) }}" class="btn btn-sm">Detalhes</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                
                                @endforeach

                            </div>

                        </div>

                    </div>

                </div>


            </div>

        </div>

    </div>

@endsection
