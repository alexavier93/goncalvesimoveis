@extends('admin.layouts.app')

@section('title', '- Editar Imóvel')

@section('content')

    <!-- Page Heading -->
    <div class="page-header-content py-3">

        <div class="d-sm-flex align-items-center justify-content-between">
            <h1 class="h3 mb-0 text-gray-800">Imóveis</h1>
        </div>

        <ol class="breadcrumb mb-0 mt-4">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item"><a href="{{ route('admin.imoveis.index') }}">Imóveis</a></li>
            <li class="breadcrumb-item active" aria-current="page">Editar Imóvel</li>
        </ol>

    </div>

    <!-- Content Row -->
    <div class="row">

        <div class="col-md-12 mb-4">
            @include('flash::message')
        </div>

        <!-- Content Column -->
        <div class="col-xl-12 col-md-12 mb-4">

            <!-- Project Card Example -->
            <div class="card shadow mb-4">

                <div class="card-header">
                    <span class="m-0 font-weight-bold text-primary">Informações</span>
                </div>

                <div class="card-body">

                    <form action="{{ route('admin.imoveis.update', ['imovel' => $imovel->id]) }}" method="post">

                        @csrf
                        @method("PUT")

                        <div class="row">

                            <div class="col-md-6">

                                <div class="form-group row">
                                    <div class="col-md-3">Status</div>
                                    <div class="col-md-9">
                                        <label class="switch">
                                            <input type="checkbox" name="status" value="1" {{ ($imovel->status == 1 ? 'checked' : '') }}>
                                            <span class="slider success"></span>
                                        </label>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-md-3">Mostrar na Home</div>
                                    <div class="col-md-9">
                                        <label class="switch">
                                            <input type="checkbox" name="view_home" value="1" {{ ($imovel->view_home == 1 ? 'checked' : '') }}>
                                            <span class="slider success"></span>
                                        </label>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label">Ordem Home</label>
                                    <div class="col-md-9">
                                        <select name="order_home" class="form-control">
                                            @php $i = 1 @endphp
                                            @foreach ($imoveisOrder as $item)
                                                <option value="{{ $i }}" {{ ($imovel->order_home == $i ? 'selected' : '') }}>{{ $i }}</option>
                                                @php $i++ @endphp 
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label">Categorias</label>
                                    <div class="col-md-9">
                                        <select name="categoria_id" class="form-control">
                                            @foreach ($categorias as $categoria)
                                                <option value="{{ $categoria->id }}" {{ $imovel->categoria_id ==  $categoria->id ? 'selected' : '' }} >{{ $categoria->nome }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label">Tipos</label>
                                    <div class="col-md-9">
                                        <select name="tipo_id" class="form-control">
                                            @foreach ($tipos as $tipo)
                                                <option value="{{ $tipo->id }}" {{ $imovel->tipo_id ==  $tipo->id ? 'selected' : '' }} >{{ $tipo->nome }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label">Nome</label>
                                    <div class="col-md-9">
                                        <input type="text" name="nome" class="form-control @error('nome') is-invalid @enderror" value="{{ $imovel->nome }}">
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
                                        <input type="text" name="tag" class="form-control @error('tag') is-invalid @enderror" value="{{ $imovel->tag }}">
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
                                        <input type="text" name="incorporador" class="form-control @error('incorporador') is-invalid @enderror" value="{{ $imovel->incorporador }}">
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
                                        <input type="text" name="projeto_arquitetonico" class="form-control @error('projeto_arquitetonico') is-invalid @enderror" value="{{ $imovel->projeto_arquitetonico }}">
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
                                        <textarea name="descricao" class="form-control @error('descricao') is-invalid @enderror" rows="7">{{ $imovel->descricao }}</textarea>
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
                                                <option value="{{ $diferencial->id }}" @if ($imovel->diferenciais->contains($diferencial)) selected @endif>{{ $diferencial->nome }}</option>
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
                                        <input type="text" name="obra_entrega" class="form-control mes_ano @error('obra_entrega') is-invalid @enderror" value="{{ $imovel->obra_entrega }}" placeholder="01/2000">
                                        @error('obra_entrega')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <label class="col-md-3 col-form-label">Nº de torres</label>
                                    <div class="col-md-3">
                                        <input type="text" name="torres" class="form-control @error('torres') is-invalid @enderror" value="{{ $imovel->torres }}">
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
                                        <input type="text" name="pavimento_terreo" class="form-control @error('pavimento_terreo') is-invalid @enderror" value="{{ $imovel->pavimento_terreo }}">
                                        @error('pavimento_terreo')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <label class="col-md-3 col-form-label">Nº de pavimento tipo</label>
                                    <div class="col-md-3">
                                        <input type="text" name="pavimento_tipo" class="form-control @error('pavimento_tipo') is-invalid @enderror" value="{{ $imovel->pavimento_tipo }}">
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
                                        <input type="text" name="pavimento_cobertura" class="form-control @error('pavimento_cobertura') is-invalid @enderror" value="{{ $imovel->pavimento_cobertura }}">
                                        @error('pavimento_cobertura')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <label class="col-md-3 col-form-label">Nº de unidades por pavimento</label>
                                    <div class="col-md-3">
                                        <input type="text" name="unidade_pavimento" class="form-control @error('unidade_pavimento') is-invalid @enderror" value="{{ $imovel->unidade_pavimento }}">
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
                                        <input type="text" name="total_unidade" class="form-control @error('total_unidade') is-invalid @enderror" value="{{ $imovel->total_unidade }}">
                                        @error('total_unidade')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <label class="col-md-3 col-form-label">Dormitórios</label>
                                    <div class="col-md-3">
                                        <input type="text" name="dormitorios" class="form-control @error('dormitorios') is-invalid @enderror" value="{{ $imovel->dormitorios }}" placeholder="Ex. 2 e 3">
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
                                        <input type="text" name="banheiros" class="form-control @error('banheiros') is-invalid @enderror" value="{{ $imovel->banheiros }}">
                                        @error('banheiros')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <label class="col-md-3 col-form-label">Nº de elevadores</label>
                                    <div class="col-md-3">
                                        <input type="text" name="elevadores" class="form-control @error('elevadores') is-invalid @enderror" value="{{ $imovel->elevadores }}">
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
                                        <input type="text" name="area_privativa" class="form-control @error('area_privativa') is-invalid @enderror" value="{{ $imovel->area_privativa }}" placeholder="Ex. 50m² à 100m²">
                                        @error('area_privativa')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <label class="col-md-3 col-form-label">Área do terreno m²</label>
                                    <div class="col-md-3">
                                        <input type="text" name="area_terreno" class="form-control @error('area_terreno') is-invalid @enderror" value="{{ $imovel->area_terreno }}" placeholder="Ex. 50m² à 100m²">
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
                                        <input type="text" name="subsolo" class="form-control @error('subsolo') is-invalid @enderror" value="{{ $imovel->subsolo }}">
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
                                        <input type="text" name="video" class="form-control @error('video') is-invalid @enderror" value="@if ($imovel->video != null)https://www.youtube.com/watch?v=@endif{{ $imovel->video }}">
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
                                        <input type="text" name="tour_virtual" class="form-control @error('tour_virtual') is-invalid @enderror" value="{{ $imovel->tour_virtual }}">
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
                                        <input type="text" name="endereco" id="geocompletecad" class="form-control @error('endereco') is-invalid @enderror" value="{{ $imovel->endereco }}">
                                        <input name="lat" type="hidden" value="{{ $imovel->latitude }}">
                                        <input name="lng" type="hidden" value="{{ $imovel->longitude }}">
                                        <input name="postal_code" type="hidden" value="{{ $imovel->cep }}">
                                        <input name="route" type="hidden" value="{{ $imovel->lougradouro }}">
                                        <input name="sublocality" type="hidden" value="{{ $imovel->bairro }}">
                                        <input name="administrative_area_level_2" type="hidden" value="{{ $imovel->cidade }}">
                                        <input name="administrative_area_level_1" type="hidden" value="{{ $imovel->estado }}">

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

        <!-- Content Column -->
        <div class="col-xl-12 col-md-12 mb-4">

            <div class="row">

                <div class="col-md-6">

                    <div class="col-md-12">

                        <!-- Project Card Example -->
                        <div class="card shadow mb-4">
    
                            <div class="card-header">
                                <span class="m-0 font-weight-bold text-primary">Imagens</span>
                                <button class="btn btn-primary btn-sm float-right" data-toggle="modal" data-target="#modalImages">Upload</button>
                            </div>
    
                            <div class="card-body">
    
                                <div class="owl-carousel owl-theme">
                                    @foreach ($images as $image)
                                        <div class="item">
                                            <img class="img-fluid" src="{{ asset('storage/' . $image->thumbnail) }}" alt="">
    
                                            <div class="text-center">
                                                <div class="btn-group btn-group-sm mt-2" role="group" aria-label="Basic example">
                                                    <a href="{{ route('admin.imoveis.makeCover', ['image' => $image->id]) }}" class="btn btn-primary {{ $image->cover == 1 ? 'btn-disabled' : '' }}">Tornar Capa</a>
                                                    <a href="{{ route('admin.imoveis.deleteImage', ['image' => $image->id]) }}" class="btn btn-danger">Excluir</a>
                                                </div>
                                            </div>
                                            
                                        </div>
                                    @endforeach
    
                                </div>
    
                            </div>
    
                        </div>
    
                        <!-- Modal -->
                        <div class="modal fade" id="modalImages" tabindex="-1" aria-labelledby="modalImagesLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="modalImagesLabel">Upload de Imagens</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form id="imageUpload" action="{{ route('admin.imoveis.uploadImages') }}" method="post" enctype="multipart/form-data">
                                            @csrf
    
                                            <input type="hidden" name="imovel_id" value="{{ $imovel->id }}">
    
                                            <div class="form-group">
                                                <input type="file" class="form-control-file" name="image[]" multiple>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                                        <button type="submit" form="imageUpload" class="btn btn-primary">Salvar</button>
                                    </div>
                                </div>
                            </div>
                        </div>
    
                    </div>
    
                    <div class="col-md-12">
    
                        <!-- Project Card Example -->
                        <div class="card shadow mb-4">
    
                            <div class="card-header">
                                <span class="m-0 font-weight-bold text-primary">Plantas</span>
                                <button class="btn btn-primary btn-sm float-right" data-toggle="modal" data-target="#modalPlantas">Upload</button>
                            </div>
    
                            <div class="card-body">
    
                                <div class="owl-carousel owl-theme">
                                    @foreach ($plantas as $planta)
                                        <div class="item">
                                            <img class="img-fluid" src="{{ asset('storage/' . $planta->image) }}" alt="">
    
                                            <div class="text-center">
                                                <div class="btn-group btn-group-sm mt-2" role="group" aria-label="Basic example">
                                                    <a href="{{ route('admin.imoveis.deletePlanta', ['planta' => $planta->id]) }}" class="btn btn-danger">Excluir</a>
                                                </div>
                                            </div>
                                            
                                        </div>
                                    @endforeach
    
                                </div>
    
    
                            </div>
    
                        </div>
    
                        <!-- Modal -->
                        <div class="modal fade" id="modalPlantas" tabindex="-1" aria-labelledby="modalPlantasLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="modalPlantasLabel">Plantas</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form id="plantaUpload" action="{{ route('admin.imoveis.uploadPlantas') }}" method="post" enctype="multipart/form-data">
                                            @csrf
                                            <input type="hidden" name="imovel_id" value="{{ $imovel->id }}">
                                            <div class="form-group">
                                                <input type="file" class="form-control-file" name="image[]" multiple>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                                        <button type="submit" form="plantaUpload" class="btn btn-primary">Salvar</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>

                </div>

                <div class="col-md-6">
                    
                    <div class="col-md-12">

                        <!-- Project Card Example -->
                        <div class="card shadow mb-4">
    
                            <div class="card-header">
                                <span class="m-0 font-weight-bold text-primary">Logo Empreendimento</span>
                                <button class="btn btn-primary btn-sm float-right" data-toggle="modal" data-target="#modalLogo">Upload</button>
                            </div>
    
                            <div class="card-body text-center">

                                @if ($imovel->logo != null)
                                    <img src="{{ asset('storage/' . $imovel->logo) }}" class="img-fluid mx-auto w-50">
                                @endif

                                <div class="text-center">
                                    <div class="btn-group btn-group-sm mt-2" role="group" aria-label="Basic example">
                                        <a href="{{ route('admin.imoveis.deleteLogo', ['logo' => $imovel->id]) }}" class="btn btn-danger">Excluir</a>
                                    </div>
                                </div>
    
                            </div>
    
                        </div>
    
                        <!-- Modal -->
                        <div class="modal fade" id="modalLogo" tabindex="-1" aria-labelledby="modalLogoLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="modalLogoLabel">Upload Logo</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form id="logoUpload" action="{{ route('admin.imoveis.uploadLogo') }}" method="post" enctype="multipart/form-data">
                                            @csrf
    
                                            <input type="hidden" name="imovel_id" value="{{ $imovel->id }}">
    
                                            <div class="form-group">
                                                <input type="file" class="form-control-file" name="logo">
                                            </div>

                                        </form>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                                        <button type="submit" form="logoUpload" class="btn btn-primary">Salvar</button>
                                    </div>
                                </div>
                            </div>
                        </div>
    
                    </div>
                
                    <div class="col-md-12">
                        <!-- Project Card Example -->
                        <div class="card shadow mb-4">
    
                            <div class="card-header">
                                <span class="m-0 font-weight-bold text-primary">Progresso</span>
                                <button class="btn btn-primary btn-sm float-right" data-toggle="modal" data-target="#modalProgress">Cadastrar</button>
                            </div>
    
                            <div class="card-body">
                                
                                @foreach ($status as $stats)
                                @foreach ($statusProgresso as $progresso)

                                @if ($stats->id == $progresso->status_id)
                                    
                                <div class="status-item mt-2">
                                    <small>{{ $stats->nome }} <a href="{{ route('admin.imoveis.deleteProgress', ['id' => $progresso->id]) }}" class="close" title="Excluir Status">×</a></small>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" style="width: {{ $progresso->porcentagem }}%;" aria-valuenow="{{ $progresso->porcentagem }}" aria-valuemin="0" aria-valuemax="100">{{ $progresso->porcentagem }}%</div>
        
                                    </div>
                                </div>

                                @endif
                                    
                                @endforeach
                                @endforeach
    
                            </div>
    
                        </div>
    
                        <!-- Modal -->
                        <div class="modal fade" id="modalProgress" tabindex="-1" aria-labelledby="modalProgressLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="modalProgressLabel">Inserir Progresso</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form id="progressInsert" action="{{ route('admin.imoveis.insertProgress') }}" method="post">

                                            @csrf
    
                                            <input type="hidden" name="imovel_id" value="{{ $imovel->id }}">

                                            <div class="form-group">
                                                <label>Categorias</label>
                                                <select name="status_id" class="form-control">
                                                    @foreach ($status as $stats)
                                                        <option value="{{ $stats->id }}">{{ $stats->nome }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
    
                                            <div class="form-group">
                                                <input type="text" class="form-control" name="porcentagem">
                                            </div>

                                        </form>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                                        <button type="submit" form="progressInsert" class="btn btn-primary">Salvar</button>
                                    </div>
                                </div>
                            </div>
                        </div>
    
                    </div>

                </div>

            </div>

        </div>

    </div>

@endsection
