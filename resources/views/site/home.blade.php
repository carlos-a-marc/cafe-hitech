<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Belvontti</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="{{url(mix('site/css/style.css'))}}">
</head>
<body onload="oferta_limitada()">
<div class="d-flex mx-auto flex-column">

    @if(Session::has('alert-success'))
        <p class="alert alert-success text-center">{{ Session::get('alert-success') }} <a href="#" class="close"
                                                                                          data-dismiss="alert"
                                                                                          aria-label="fechar">&times;</a>
        </p>
    @endif

    <div class="row header">
        <div class="col-lg-8  text-header">
            <h1>O melhor café do mundo na sua casa!</h1>
            <p class="p-subtitle">Com sabor inegualável e aprovado por milhares de especialistas em todo o mundo, o
                Belvontti te proporcionará uma experiencia completamente nova. Você esquecerá que já usou outros
                cafés...</p>
            <p class="small">Assinaturas a partir de:<br> <span class="oferta">R$ 17,90</span> <span class="small">( por tempo limitado )</span>
            </p>
            <p class="p-button">
                <a href="#planos" class="btn btn-primary">VER PLANOS</a>
            </p>
        </div>

    </div>

    <!-- benefícios -->
    <div class="benefits">
        <div class="container text-center">
            <h2>ESPECIAL PARA VOCE</h2>
            <p>Faça sua assinatura e receba mensalmente diversos benéficios além do café Belvontti e ainda participar de
                nossos sorteios com diversos prêmios</p>
            <div class="d-flex flex-row flex-wrap">
                <div class="col-lg-4 col-md-4 col-sm-12 col-12 ">
                    <div class="my-5 benefit-items align-items-center">
                        <div class="text-center">
                            <img src="{{ asset('site/images/sabor.jpg') }}" alt="sabor" class="rounded-circle">
                            <h4>Sabor Inesquecível</h4>
                            <p>Você provará mais que um café, experimentará uma experiencia sem igual. Um sabor
                                inestimável. Um respiro na tespestade... Belvontti!</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-12">
                    <div class="my-5 benefit-items align-items-center">
                        <div class="text-center">
                            <img src="{{ asset('site/images/graos.jpg') }}" alt="graos" class="rounded-circle">
                            <h4>Grãos Belvontti</h4>
                            <p>Nossos grãos já acumulam diversas premiações de melhor café Especial do Brasil pela BSCA.
                                Os grãos são cultivados no Cerrado Mineiro, região ideal para produção de cafés
                                especiais.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-12">
                    <div class="my-5 benefit-items align-items-center">
                        <div class="text-center">
                            <img src="{{ asset('site/images/itens.jpg') }}" alt="itens" class="rounded-circle">
                            <h4>Itens Exclusivos</h4>
                            <p>Enviamos diversos itens para proporcionar a nossos assinantes uma experiencia totalmente
                                única. Itens como canecas e cartilhas de receitas, cápsulas, pulseiras, medidores, e
                                muito mais...</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-flex flex-row flex-wrap px-2">
                <div class="col">
                    <div class="row my-5 benefit-items align-items-start">
                        <img src="{{ asset('site/images/drone-delivery.png') }}" alt="logistica"
                             class="w-lg-50 col-lg-5 col-md-12  col-sm-12 col-12 mb-3 img-drone">
                        <div class="col-lg-7 col-md-12 col-sm-12 text-center px-4">
                            <h4>Linha direta com a gente</h4>
                            <p>Com nossa forma excluisiva e direta de entregar nossos itens via drone, garantimos uma
                                entrega completamente ágil e rápida, sem os problemas enfrentados nos meios tradicionais
                                de transporte.</p>
                            <p class="p-button">
                                <a href="#planos" class="btn btn-primary custom-button">ASSINE AGORA</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Planos de assinatura -->
    <div class="planos" id="planos">
        <div class="container text-center pt-5">
            <h2>NOSSOS PLANOS</h2>
            <div class="card-deck mt-4 text-center">
                <div class="card mb-4 shadow-sm">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-normal">SEMANAL</h4>
                    </div>
                    <div class="card-body">
                        <h1 class="card-title pricing-card-title">R$ 17,90 <small class="text-muted"><s>R$
                                    27,90</s></small></h1>
                        <ul class="list-unstyled mt-3 mb-4">
                            <li>01 Caixa Belvontti 250g</li>
                            <li>01 Caneca Plástico ( mensal )</li>
                            <li>Brinde Básico</li>
                            <li>Cartilha de receitas</li>
                        </ul>
                        <a href="#assinar" class="btn btn-primary button-planos">ASSINAR AGORA</a>
                    </div>
                </div>
                <div class="card mb-4 shadow-sm">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-normal">QUINZENAL</h4>
                    </div>
                    <div class="card-body">
                        <h1 class="card-title pricing-card-title">R$ 27,90 <small class="text-muted">/ <s>R$
                                    37,90</s></small></h1>
                        <ul class="list-unstyled mt-3 mb-4">
                            <li>02 Caixa Belvontti 250g</li>
                            <li>01 Pocelanna Plástico ( mensal )</li>
                            <li>Brindes Gold</li>
                            <li>Cartilha de receitas</li>
                            <li>Sorteios Gold</li>
                        </ul>
                        <a href="#assinar" class="btn btn-primary button-planos">ASSINAR AGORA</a>
                    </div>
                </div>
                <div class="card mb-4 shadow-sm">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-normal">MENSAL</h4>
                    </div>
                    <div class="card-body">
                        <h1 class="card-title pricing-card-title">R$ 37,90 <small class="text-muted">/ <s>R$
                                    47,90</s></small></h1>
                        <ul class="list-unstyled mt-3 mb-4">
                            <li>03 Caixa Belvontti 250g</li>
                            <li>01 Pocelanna Plástico ( mensal )</li>
                            <li>Brinde Premium</li>
                            <li>Cartilha de receitas</li>
                            <li>Sorteios Premium</li>
                        </ul>
                        <a href="#assinar" class="btn btn-primary button-planos ">ASSINAR AGORA</a>
                    </div>
                </div>
            </div>
            <div class="container text-center pt-3">
                <div class="text-center row">
                    <div class="col-md-3 col-sm-3 col-12"></div>
                    <div class="col-md-6 col-sm-6 col-12 caixa-contador">
                        <p class="oferta-contador">ESSA PROMOÇÃO ACABA EM:</p>
                        <p id="contador" class="contador">60:00</p>
                    </div>
                    <div class="col-md-3 col-sm-3 col-12"></div>
                </div>
            </div>

        </div>
    </div>

    <!-- assinatura -->
    <div class="assinatura text-center pt-5" id="assinar">
        <h2>FAZER ASSINATURA</h2>
        <form class="mt-4 container form" method="post" action="{{url('/')}}">
            {{csrf_field()}}
            <div class="form-group ">
                <input type="text" class="form-control" id="name" name="name" aria-describedby="name"
                       placeholder="Nome completo"
                       required>
            </div>
            <div class="row">
                <div class="form-group col-8">
                    <input type="email" class="form-control mt-3" id="mail" name="mail" aria-describedby="email"
                           placeholder="Email"
                           required>
                </div>
                <div class="form-group col-4">
                    <input type="tel" class="form-control mt-3" id="phone" name="phone" aria-describedby="phone"
                           placeholder="Telefone"
                           required>
                </div>
            </div>
            <div class="form-group">
                <div class="row">
                    <div class="form-group col-lg-10 col-md-10 col-sm-10 col-8">
                        <input type="text" class="form-control mt-3" id="street" name="street" aria-describedby="street"
                               placeholder="Rua"
                               required>
                    </div>
                    <div class="form-group col-lg-2 col-md-2 col-sm-2 col-4">
                        <input type="text" class="form-control mt-3" id="number" name="number" aria-describedby="number"
                               placeholder="Nº"
                               required>
                    </div>
                </div>

                <div class="row">
                    <div class="form-group col-lg-6 col-sm-5">
                        <input type="text" class="form-control mt-3" id="nb" name="nb" aria-describedby="neighborhood"
                               placeholder="Bairro" required>
                    </div>
                    <div class="form-group col-lg-5 col-sm-5">
                        <input type="text" class="form-control mt-3" id="city" name="city" aria-describedby="city"
                               placeholder="Cidade"
                               required>
                    </div>
                    <div class="form-group col-lg-1 col-sm-2">
                        <input type="text" class="form-control mt-3" id="state" name="state" aria-describedby="state"
                               placeholder="UF" required>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <select class="form-control" id="plan" name="plan" required>
                    <option>Semanal (R$ 17,90)</option>
                    <option>Quinzenal (R$ 27,90)</option>
                    <option>Mensal (R$ 37,90)</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary assign-button">CONCLUIR ASSINATURA</button>
        </form>
    </div>


    <!-- Rodapé -->
    <div class="footer text-center">
        <div class="container">
            Belvontti - Todos os Direitos Reservados.
        </div>
    </div>

</div>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>
<script src="{{url(mix('site/javascript/home.js'))}}"></script>
</body>
</html>
