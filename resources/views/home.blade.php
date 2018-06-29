@extends('layouts.master')

@section('title')
   Home
@endsection

@section('content')

<div class="container">
  <div class="row">
      <div class="col-8 mx-auto">
        <div class="card">
            <form class="" action="post/preview" method="post" enctype="multipart/form-data">
              @csrf
              <div class="card-body bg-light">
                <textarea class="form-control border-0" name="text_post" placeholder="¿Que estás pensando?"></textarea>
              </div>

              <div class="card-footer bg-light">
                <div>
                  <label for="img_post">Ingresar una Imagen</label>
                  <input class="hidden" name="img_post" id='img_post' type="file">
                </div>
                <div>
                  <label>Seleccione redes a previsualizar:  </label>
                  @foreach ($networks as $network)
                    <input type="checkbox" name="net{{$network->id}}" value="{{$network->id}}">{{$network->description}}</input>
                  @endforeach
                </div>
                <button class="btn btn-primary" id="create-status">Previsualizar</button>
              </div>
            </form>
        </div>
      </div>
  </div>
</div>
<br>
<div class="col-8 mx-auto card border-0 shadow-sm bg-light">
  <h4 class="mx-auto">Posteos realizados</h4>
  <div class="card-body d-flex flex-column">
    <div class="d-flex align-items-center">
      <img class="rounded-circle mr-3" width="40px" src="https://upload.wikimedia.org/wikipedia/commons/1/1e/Default-avatar.jpg" alt="">
      <div class="">
        <h5 class="mb-1 shadow-sm">Dario Capdevila</h5>
        <div class="small text-muted">Hace una hora</div>
      </div>
    </div>
    <div class="card-text text-secondary">
      @foreach ($posts as $post)
        <p>{{ $post->text_post }}</p>
      @endforeach    </div>
  </div>
</div>
@endsection
