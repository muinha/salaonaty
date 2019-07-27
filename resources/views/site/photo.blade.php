@extends('site.template')

@section('title', 'Fotos Cabelos')

@section('content')

<section>
        <div class="container-fluid album-fotos">
            <div class="row">
                <div class="col-md-12">
                    <h1>Album De Fotos</h1>
                </div>
                <div class="col-md-3 col-sm-12 text-center">
                    <div class="pos-f-t">
                        <div class="collapse" id="navbarToggleExternalContent">
                            <div class="p-4 menu-album">
                                <h5 class="text-white text-center">Categorias</h5>
                                <span class="text-muted">Selecione por categoria.</span>
                                <ul class="list-group">
                                @foreach($tab as $table)
                                    <li class="list-group-item text-center" style="background: #FF1493;"><a style="color: white;" href="{{ url('services/'.$table->name_service) }}">{{ $table->name_service }}</a></li>
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
                    <div class="card-footer">
                        <h4>Clique nas fotos para ampliar</h4>
                        <hr>
                        <!-- Trigger the Modal -->
                        <img id="myImg" src="{{asset('image/image2.jpg')}}" alt="Snow">

                        <!-- The Modal -->
                        <div id="myModal" class="modal">

                            <!-- The Close Button -->
                            <span class="close">&times;</span>

                            <!-- Modal Content (The Image) -->
                            <img class="modal-content" id="img01">

                            <!-- Modal Caption (Image Text) -->
                            <div id="caption"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>

@endsection