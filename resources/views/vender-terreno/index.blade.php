@extends('layouts.app')

@section('title', '- Venda seu Terreno')

@section('content')

    <div id="venda-terreno">

        <div class="page-title-content"
            style="background: url('{{ asset('assets/images/banner-pages/banner-terreno.png') }}')">
            <div class="container">
                <h5>Venda seu Terreno</h5>
                <h1>Lorem Ipsum Dolor Sit Amet</h1>
            </div>
        </div>

        <div class="container">

            <div class="content">

                <div class="row">

                    <div class="col-lg-4 col-md-12">

                        <div class="box-info">

                            <h1>Pensando em vender seu terreno?</h1>

                            <hr>

                            <h2 class="mb-5">Nós temos a solução na medida certa para você!</h2>

                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer viverra eros eget erat pellentesque, quis rutrum justo tincidunt. Suspendisse potenti. Ut vestibulum luctus nibh. </p>

                            <a href="tel:5565454117"><span class="phone-box"><i class="fas fa-phone-alt"></i></span>
                                <span>11 90000-0000</span></a>
                        </div>


                    </div>

                    <div class="col-lg-8 col-md-12">

                        <h4>Insira abaixo suas informações para realizar seu cadastro</h4>

                        <div class="form-contato">

                            <form action="">

                                <div class="row">

                                    <div class="col-md-12 col-lg-12 my-3">
                                        <label class="me-2">Você é: </label>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                            <label class="form-check-label" for="inlineRadio1">Proprietário</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                            <label class="form-check-label" for="inlineRadio2">Corretor</label>
                                        </div>
                                    </div>

                                    <div class="col-md-12 col-lg-6">
                                        <div class="form-group my-3">
                                            <input type="text" class="form-control" name="empresa" placeholder="Empresa">
                                        </div>
                                    </div>

                                    <div class="col-md-12 col-lg-6">
                                        <div class="form-group my-3">
                                            <input type="text" class="form-control" name="nome" placeholder="Nome">
                                        </div>
                                    </div>

                                    <div class="col-md-12 col-lg-6">
                                        <div class="form-group my-3">
                                            <input type="email" class="form-control" name="email" placeholder="E-mail">
                                        </div>
                                    </div>

                                    <div class="col-md-12 col-lg-6">
                                        <div class="form-group my-3">
                                            <input type="text" class="form-control telefone" name="telefone" placeholder="Telefone">
                                        </div>
                                    </div>

                                    <div class="col-md-12 col-lg-6">
                                        <div class="form-group my-3">
                                            <input type="text" class="form-control telefone" name="celular" placeholder="Celular">
                                        </div>
                                    </div>

                                    <div class="col-md-12 col-lg-6">
                                        <div class="form-group my-3">
                                            <input type="text" class="form-control cep" name="cep" placeholder="CEP do Terreno">
                                        </div>
                                    </div>

                                    <div class="col-md-12 col-lg-6">
                                        <div class="form-group my-3">
                                            <input type="text" class="form-control" name="bairro" placeholder="Bairro do Terreno">
                                        </div>
                                    </div>

                                    <div class="col-md-12 col-lg-6">
                                        <div class="form-group my-3">
                                            <input type="text" class="form-control" name="cidade" placeholder="Cidade do Terreno">
                                        </div>
                                    </div>

                                    <div class="col-md-12 col-lg-6">
                                        <div class="form-group my-3">
                                            <input type="text" class="form-control" name="cidade" placeholder="Estado do Terreno">
                                        </div>
                                    </div>

                                    <div class="col-md-12 col-lg-6">
                                        <div class="form-group my-3">
                                            <input type="text" class="form-control" name="area" placeholder="Área do Terreno (m²)">
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group my-3">
                                            <textarea class="form-control" name="mensagem" rows="8" placeholder="Mensagem"></textarea>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group my-3">
                                            <button type="submit" class="btn btn-default">Enviar Mensagem <i class="fas fa-arrow-right ms-2"></i></button>
                                        </div>
                                    </div>


                                </div>


                            </form>

                        </div>


                    </div>

                </div>




            </div>

        </div>

    </div>

@endsection
