@extends('layouts.app')
@section('title',"Imagenes de productos")
@section('body-class',"profile-page")
@section('content')
<div class="page-header header-filter" data-parallax="true" style="background-image: url('{{asset('img/profile_city.jpg')}}')">

</div>
<div class="main main-raised">
    <div class="container">
        <div class="section text-center">
            <h2 class="title">Imagenes de producto "{{$product->name}}"</h2>
            <div class="card">
                <div class="card-body">
            <form method="post" action="{{url('/admin/products/'.$product->id.'/images')}}" enctype="multipart/form-data">
                {{csrf_field()}}
                <input type="file" name="photo" class="" required>
                <button type="submit" class="btn btn-primary btn-round">Subir nueva Imagen</button>
                <a href="{{url('/admin/products')}}" class="btn btn-default btn-round">Volver al listado de productos</a>
            </form >
                </div>
            </div>
            <div class="row">
            @foreach($images as $image)
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <img src="{{$image->url}}" width="250" height="250">
                        <form method="post"action="">
                            {{csrf_field()}}
                            {{method_field('DELETE')}}
                            <input type="hidden" name="image_id"value="{{$image->id}}">
                            <button type="submit" class="btn btn-danger btn-round">Eliminar imagen</button>
                            <a  href="{{url('/admin/products/'.$product->id.'/images/'.$image->id)}}" class="btn btn-primary btn-fab btn-round">
                                <i class="material-icons">favorite</i>
                                <div class="ripple-container"></div></a>
                        </form>

                    </div>
                </div>
            </div>
            @endforeach
                </div>
        </div>


    </div>
</div>

@endsection