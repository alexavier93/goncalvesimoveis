@extends('admin.layouts.app')

@section('title', '- Novo Imóvel')

@section('content')

    <!-- Page Heading -->
    <div class="page-header-content py-3">

        <div class="d-sm-flex align-items-center justify-content-between">
            <h1 class="h3 mb-0 text-gray-800">Imóveis</h1>
        </div>

        <ol class="breadcrumb mb-0 mt-4">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item"><a href="{{ route('admin.imoveis.index') }}">Imóveis</a></li>
            <li class="breadcrumb-item active" aria-current="page">Novo Imóvel</li>
        </ol>

    </div>

    <!-- Content Row -->
    <div class="row">

        <!-- Content Column -->
        <div class="col-xl-12 col-lg-12 mb-4">

            <!-- Project Card Example -->
            <div class="card shadow mb-4">

                <div class="card-header">
                    <span class="m-0 font-weight-bold text-primary">Informações do Imóvel</span>
                </div>

                <div class="card-body">

                    <form action="{{ route('admin.imoveis.store') }}" method="post" enctype="multipart/form-data">

                        @csrf

                        <div class="row">

                            <div class="col-md-6">

                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label">Categorias</label>
                                    <div class="col-md-9">
                                        <select name="categoria_id" class="form-control">
                                            @foreach ($categorias as $categoria)
                                                <option value="{{ $categoria->id }}">{{ $categoria->nome }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label">Tipos</label>
                                    <div class="col-md-9">
                                        <select name="tipo_id" class="form-control">
                                            @foreach ($tipos as $tipo)
                                                <option value="{{ $tipo->id }}">{{ $tipo->nome }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label">Nome</label>
                                    <div class="col-md-9">
                                        <input type="text" name="nome" class="form-control @error('nome') is-invalid @enderror" value="{{ old('nome') }}">
                                        @error('nome')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label">Tag</label>
                                    <div class="col-md-9">
                                        <input type="text" name="tag" class="form-control @error('tag') is-invalid @enderror" value="{{ old('tag') }}">
                                        @error('tag')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label">Incorporador</label>
                                    <div class="col-md-9">
                                        <input type="text" name="incorporador" class="form-control @error('incorporador') is-invalid @enderror" value="{{ old('incorporador') }}">
                                        @error('incorporador')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label">Projeto Arquitetônico</label>
                                    <div class="col-md-9">
                                        <input type="text" name="projeto_arquitetonico" class="form-control @error('projeto_arquitetonico') is-invalid @enderror" value="{{ old('projeto_arquitetonico') }}">
                                        @error('projeto_arquitetonico')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
        
                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label">Descrição</label>
                                    <div class="col-md-9">
                                        <textarea name="descricao" class="form-control @error('descricao') is-invalid @enderror" rows="7">{{ old('descricao') }}</textarea>
                                        @error('descricao')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label">Diferenciais</label>
                                    <div class="col-md-9">
                                        <select class="form-control select" name="diferenciais[]" multiple="multiple">
                                            @foreach ($diferenciais as $diferencial)
                                                <option value="{{ $diferencial->id }}">{{ $diferencial->nome }}</option>
                                            @endforeach
                                        </select>
                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
        

                            </div>

                            

                            <div class="col-md-6">

                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label">Entrega da Obra</label>
                                    <div class="col-md-3">
                                        <input type="text" name="obra_entrega" class="form-control mes_ano @error('obra_entrega') is-invalid @enderror" value="{{ old('obra_entrega') }}" placeholder="01/2000">
                                        @error('obra_entrega')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <label class="col-md-3 col-form-label">Nº de torres</label>
                                    <div class="col-md-3">
                                        <input type="text" name="torres" class="form-control @error('torres') is-invalid @enderror" value="{{ old('torres') }}">
                                        @error('torres')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                </div>

                                <div class="form-group row">

                                    <label class="col-md-3 col-form-label">Nº de pavimento térreo</label>
                                    <div class="col-md-3">
                                        <input type="text" name="pavimento_terreo" class="form-control @error('pavimento_terreo') is-invalid @enderror" value="{{ old('pavimento_terreo') }}">
                                        @error('pavimento_terreo')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <label class="col-md-3 col-form-label">Nº de pavimento tipo</label>
                                    <div class="col-md-3">
                                        <input type="text" name="pavimento_tipo" class="form-control @error('pavimento_tipo') is-invalid @enderror" value="{{ old('pavimento_tipo') }}">
                                        @error('pavimento_tipo')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                </div>

                                <div class="form-group row">

                                    <label class="col-md-3 col-form-label">Nº de pavimento cobertura</label>
                                    <div class="col-md-3">
                                        <input type="text" name="pavimento_cobertura" class="form-control @error('pavimento_cobertura') is-invalid @enderror" value="{{ old('pavimento_cobertura') }}">
                                        @error('pavimento_cobertura')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <label class="col-md-3 col-form-label">Nº de unidades por pavimento</label>
                                    <div class="col-md-3">
                                        <input type="text" name="unidade_pavimento" class="form-control @error('unidade_pavimento') is-invalid @enderror" value="{{ old('unidade_pavimento') }}">
                                        @error('unidade_pavimento')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                </div>

                                <div class="form-group row">

                                    <label class="col-md-3 col-form-label">Total de unidades</label>
                                    <div class="col-md-3">
                                        <input type="text" name="total_unidade" class="form-control @error('total_unidade') is-invalid @enderror" value="{{ old('total_unidade') }}">
                                        @error('total_unidade')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <label class="col-md-3 col-form-label">Dormitórios</label>
                                    <div class="col-md-3">
                                        <input type="text" name="dormitorios" class="form-control @error('dormitorios') is-invalid @enderror" value="{{ old('dormitorios') }}" placeholder="Ex. 2 e 3">
                                        @error('dormitorios')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>


                                </div>

                                <div class="form-group row">

                                    <label class="col-md-3 col-form-label">Banheiros</label>
                                    <div class="col-md-3">
                                        <input type="text" name="banheiros" class="form-control @error('banheiros') is-invalid @enderror" value="{{ old('banheiros') }}" placeholder="">
                                        @error('banheiros')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <label class="col-md-3 col-form-label">Nº de elevadores</label>
                                    <div class="col-md-3">
                                        <input type="text" name="elevadores" class="form-control @error('elevadores') is-invalid @enderror" value="{{ old('elevadores') }}">
                                        @error('elevadores')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    
                                    
                                </div>

                                <div class="form-group row">

                                    <label class="col-md-3 col-form-label">Área privativa tipo m²</label>
                                    <div class="col-md-3">
                                        <input type="text" name="area_privativa" class="form-control @error('area_privativa') is-invalid @enderror" value="{{ old('area_privativa') }}" placeholder="Ex. 50m² à 100m²">
                                        @error('area_privativa')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>


                                    <label class="col-md-3 col-form-label">Área do terreno m²</label>
                                    <div class="col-md-3">
                                        <input type="text" name="area_terreno" class="form-control @error('area_terreno') is-invalid @enderror" value="{{ old('area_terreno') }}" placeholder="Ex. 50m² à 100m²">
                                        @error('area_terreno')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    
                                </div>

                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label">Subsolo</label>
                                    <div class="col-md-3">
                                        <input type="text" name="subsolo" class="form-control @error('subsolo') is-invalid @enderror" value="{{ old('subsolo') }}">
                                        @error('subsolo')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>


                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label">Video</label>
                                    <div class="col-md-9">
                                        <input type="text" name="video" class="form-control @error('video') is-invalid @enderror" value="{{ old('video') }}">
                                        @error('video')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label">Tour Virtual</label>
                                    <div class="col-md-9">
                                        <input type="text" name="tour_virtual" class="form-control @error('tour_virtual') is-invalid @enderror" value="{{ old('tour_virtual') }}">
                                        @error('tour_virtual')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label">Endereço</label>
                                    <div class="col-md-9">
                                        <input type="text" name="endereco" id="geocompletecad" class="form-control @error('endereco') is-invalid @enderror" value="{{ old('endereco') }}">
                                        <input name="lat" type="hidden" value="">
                                        <input name="lng" type="hidden" value="">
                                        <input name="postal_code" type="hidden" value="">
                                        <input name="route" type="hidden" value="">
                                        <input name="sublocality" type="hidden" value="">
                                        <input name="administrative_area_level_2" type="hidden" value="">
                                        <input name="administrative_area_level_1" type="hidden" value="">

                                        @error('endereco')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="col-md-12">
                                        <div class="mt-4" id="mapa" style="width: 100%;height: 300px;border: 1px solid #ccc;margin-bottom: 20px;"></div>
                                    </div>

                                </div>

                            </div>

                            <div class="col-md-12">

                                <div class="form-group row">
                                    <div class="col-sm-12">
                                        <button type="submit" class="btn btn-primary">Salvar</button>
                                    </div>
                                </div>

                            </div>

                        </div>

                    </form>

                </div>

            </div>

        </div>

    </div>


@endsection
