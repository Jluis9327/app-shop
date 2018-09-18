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
                            <th class="text-right">Precio</th>
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
                                    <button type="button" rel="tooltip" class="btn btn-info btn-link btn-just-icon btn-sm" data-original-title="" title="">
                                        <i class="material-icons">person</i>
                                        <div class="ripple-container"></div></button>
                                    <a href="{{url('/admin/products/'.$product->id.'/edit')}}"  rel="tooltip" class="btn btn-success btn-link btn-just-icon btn-sm" data-original-title="" title="Editar Producto">
                                        <i class="material-icons">edit</i>
                                        <div class="ripple-container"></div></a>
                                    <button type="button" rel="tooltip" class="btn btn-danger btn-link btn-just-icon btn-sm" data-original-title="" title="">
                                        <i class="material-icons">close</i>
                                        <div class="ripple-container"></div></button>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>

                    {{$products->links()}}

                </div>
            </div>
        </div>

    </div>
</div>
<footer class="footer footer-default">
    <div class="container">
        <nav class="float-left">
            <ul>
                <li>
                    <a href="https://www.creative-tim.com">
                        Creative Tim
                    </a>
                </li>
                <li>
                    <a href="https://creative-tim.com/presentation">
                        About Us
                    </a>
                </li>
                <li>
                    <a href="http://blog.creative-tim.com">
                        Blog
                    </a>
                </li>
                <li>
                    <a href="https://www.creative-tim.com/license">
                        Licenses
                    </a>
                </li>
            </ul>
        </nav>
        <div class="copyright float-right">
            &copy;
            <script>
                document.write(new Date().getFullYear())
            </script>, made with <i class="material-icons">favorite</i> by
            <a href="https://www.creative-tim.com" target="_blank">Creative Tim</a> for a better web.
        </div>
    </div>
</footer>
@endsection