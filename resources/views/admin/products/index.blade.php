@extends('layouts.app')
@section('title',"Listado de Productos")
@section('body-class',"profile-page")
@section('content')
<div class="page-header header-filter" data-parallax="true" style="background-image: url('{{asset('img/profile_city.jpg')}}')">
</div>
<div class="main main-raised">
    <div class="container">
        <div class="section text-center">
            <h2 class="title">Listado de productos</h2>
            <div class="team">
                <div class="row">
                    <a href="{{url('/admin/products/create')}}" class="btn btn-primary btn-round">Nuevo Producto</a>
                    <table class="table">
                        <thead>
                        <tr>
                            <th class="text-center">#</th>
                            <th>Nombre</th>
                            <th>Descripción</th>
                            <th>Categoria</th>
                            <th class="text-center">Precio</th>
                            <th class="text-right">Opciones</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($products as $product)
                            <tr>
                                <td class="text-center">{{$product->id}}</td>
                                <td>{{$product->name}}</td>
                                <td class="col-md-4">{{$product->description}}</td>
                                <td>{{$product->category? $product->category->name: 'General'}}</td><!- ? se usa para saber si tiene elementos si no lo tiene mediante ":"imprime general->
                                <td class="text-right col-md-5">&euro; {{$product->price}}</td>
                                <td class="td-actions text-right ">

                                    <form method="post" action="{{url('/admin/products/'.$product->id)}}">
                                        {{csrf_field()}}
                                        {{method_field('DELETE')}}
                                        <a href="#" rel="tooltip" class="btn btn-info btn-link btn-just-icon btn-sm" data-original-title="" title="">
                                            <i class="material-icons">person</i>
                                            <div class="ripple-container"></div></a>
                                        <a href="{{url('/admin/products/'.$product->id.'/edit')}}"  rel="tooltip" class="btn btn-success btn-link btn-just-icon btn-sm" data-original-title="" title="Editar Producto">
                                            <i class="material-icons">edit</i>
                                            <div class="ripple-container"></div></a>
                                        <a href="{{url('/admin/products/'.$product->id.'/images')}}" rel="tooltip" class="btn btn-warning btn-link btn-just-icon btn-sm" data-original-title="" title="Imagenes del Producto">
                                            <i class="material-icons">image</i>
                                            <div class="ripple-container"></div></a>
                                        <button  type="submit" rel="tooltip" class="btn btn-danger btn-link btn-just-icon btn-sm" data-original-title="" title="Eliminar Producto">
                                            <i class="material-icons">close</i>
                                            <div class="ripple-container"></div></button>
                                    </form>

                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <div class="pagination-area " >
                    {{$products->links()}}
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

@endsection