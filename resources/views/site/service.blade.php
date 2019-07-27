@extends('site.template')
@section('title', 'Serviços')
@section('content')

<section>
    <div class="index">
        <div class="container-fluid album-fotos">
            <div class="row">
                <div class="col-md-12">
                    <h1>Serviços</h1>
                    <hr>
                </div>
                <div class="col-md-3 col-sm-12 text-center">
                    <div class="pos-f-t">
                        <div class="collapse" id="navbarToggleExternalContent">
                            <div class="p-4 menu-album">
                                <h5 class="text-white text-center">Categorias</h5>
                                <span class="text-muted">Selecione por categoria.</span>
                                <ul class="list-group">
                                @foreach($tab as $table)
                                    <li class="list-group-item text-center" style="background: #FF1493;"><a style="color: white;" href="{{url('services/'.$table->name_service)}}">{{ $table->name_service }}</a></li>
                                @endforeach
                                </ul>
                            </div>
                        </div>
                        <nav class="navbar navbar-dark" style="background: #FF1493;">
                        <h5>Selecione</h5>
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Alterna navegação">
                            <span class="navbar-toggler-icon"></span>
                            </button>
                        </nav>
                    </div>
                </div>
                <div class="col-md-9 col-sm-12">
                    <div class="card-title">
                        @foreach($service as $serv)
                        <h4>{{ $serv->name_service }}</h4>
                        <hr>
                        @endforeach
                    </div>
                    <div class="card-body">
                        <p>
                        <strong>O que é selagem capilar:</strong>
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolorum 
                        inventore officia hic, non sed vel odio officiis suscipit nesciunt 
                        umenda sequi error, dignissimos quam accusantium harum excepturi, odit
                         maiores perferendis!
                        </p>
                        <p>
                        <strong>Indicações da selagem capilar:</strong>
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolorum 
                        inventore officia hic, non sed vel odio officiis suscipit nesciunt 
                        umenda sequi error, dignissimos quam accusantium harum excepturi, odit
                         maiores perferendis!
                        </p>
                        <p>
                        <strong>Como é feita a selagem capilar:</strong>
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolorum 
                        inventore officia hic, non sed vel odio officiis suscipit nesciunt 
                        umenda sequi error, dignissimos quam accusantium harum excepturi, odit
                         maiores perferendis!
                        </p>
                        <p>
                        <strong>Cuidados após a selagem capilar:</strong>
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolorum 
                        inventore officia hic, non sed vel odio officiis suscipit nesciunt 
                        umenda sequi error, dignissimos quam accusantium harum excepturi, odit
                         maiores perferendis!
                        </p>
                    </div>
                    <div class="card-footer text-center">
                        <h4>Clique nas fotos para ampliar</h4>
                        <hr>
                        <img class="img-thumbnail mt-2 mb-2" width="150px" src="{{ asset('image/image2.jpg') }}" alt="">
                        <img class="img-thumbnail mt-2 mb-2" width="150px" src="{{ asset('image/image2.jpg') }}" alt="">
                        <img class="img-thumbnail mt-2 mb-2" width="150px" src="{{ asset('image/image2.jpg') }}" alt="">
                        <img class="img-thumbnail mt-2 mb-2" width="150px" src="{{ asset('image/image2.jpg') }}" alt="">
                        <img class="img-thumbnail mt-2 mb-2" width="150px" src="{{ asset('image/image2.jpg') }}" alt="">
                        <img class="img-thumbnail mt-2 mb-2" width="150px" src="{{ asset('image/image2.jpg') }}" alt="">
                        <img class="img-thumbnail mt-2 mb-2" width="150px" src="{{ asset('image/image2.jpg') }}" alt="">
                        <img class="img-thumbnail mt-2 mb-2" width="150px" src="{{ asset('image/image2.jpg') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection