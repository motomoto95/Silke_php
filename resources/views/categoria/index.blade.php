@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        @if (\Session::has('edit'))
            <div class="alert alert-success">
                <p> {{\Session::get('edit')}}</p>
            </div>
        @endif
        @if (\Session::has('fallo'))
            <div class="alert alert-danger">
                <p> {{\Session::get('fallo')}}</p>
            </div>
        @endif
            <div class="card">
                <div class="card-header">{{ __('Opciones con Categoria') }}</div>
                <div class="card-body">
                    <div class="container">
                        <div class="row">
                            <div class="col">
                            <a href=""  class="btn btn-outline-success" data-toggle="modal" data-target="#agregarcategoria" > Agregar Categoria</a>
                                    <div class="modal fade" id="agregarcategoria" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="agregarcategoria">Agregar Saldo</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form method="POST" action="{{route('ccategoria.update',1)}}">
                                                @csrf @method('PUT')
                                                <div class="form-group">
                                                    <label for="categoria" class="col-form-label">Nombre de la categoria:</label>
                                                    <input type="text" name="categoria" class="form-control" id="categoria">
                                                </div>
                                                <div class="form-group">
                                                    <label for="detalles" class="col-form-label">Detalles de la categoria:</label>
                                                    <textarea  class="form-control" name="detalles" id="detalles"> </textarea>
                                                </div>                                                
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                                                <button type="submit" name="editar" class="btn btn-success">Agregar Categoria</a>
                                                </form>
                                            </div>
                                            </div>
                                        </div>
                                    </div>
                            </div>
                            <div class="col">
                            <a href=""  class="btn btn-outline-success" data-toggle="modal" data-target="#agregarsubcategoria" > Agregar Subcategoria</a>
                                    <div class="modal fade" id="agregarsubcategoria" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="agregarsubcategoria">Agregar Saldo</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form method="POST" action="{{route('ccategoria.store',1)}}">
                                                @csrf @method('POST')

                                                <div class="form-group">
                                                    <label for="subcategoria" class="col-form-label">Nombre de la subcategoria:</label>
                                                    <input type="text" name="subcategoria" class="form-control" id="subcategoria">
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleFormControlSelect1">Selecci categoria</label>
                                                    <select class="form-control" name="seleccionar" id="exampleFormControlSelect1">
                                                    @foreach($categorias as $categorias)
                                                    <option>{{$categorias->nombre}}</option>
                                                    @endforeach
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label for="detalles" class="col-form-label">Detalles de la subcategoria:</label>
                                                    <textarea  class="form-control" name="detalles" id="detalles"> </textarea>
                                                </div>                                                
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                                                <button type="submit" name="editar" class="btn btn-success">Agregar Categoria</a>
                                                </form>
                                            </div>
                                            </div>
                                        </div>
                                    </div>
                            </div>
                            
                        </div>
                        <div>
                        <table class="table table-striped mt-4">
                    <thead>
                        <tr>
                            <th scope="col">Nombre</th>
                            <th scope="col">Descripción</th>
                            <th scope="col">Subcategoria</th>
                            <th scope="col">Descripción subcategoria</th>
                            <th scope="col">Editar</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($subcategoria as $subcategoria)
                        <tr>
                            <td>{{ $subcategoria->nombre }}</td>
                            <td>{{ $subcategoria->descripcion }}</td>
                            <td>{{ $subcategoria->subnombre }}</td>
                            <td>{{ $subcategoria->subdescripcion }}</td>
                            <td>
                            <a href=""  class="btn btn-outline-success" data-toggle="modal" data-target="#editar_categorias" >Editar</a>
                                    <div class="modal fade" id="editar_categorias" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="editar_categorias">Editar Valore</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form method="POST" action="{{route('ccategoria.show',1)}}">

                                                <div class="form-group">
                                                    <label for="recipient-name" class="col-form-label">Nombre:</label>
                                                    <input type="text" name="nombre" class="form-control" id="recipient-name" value="{{$subcategoria->nombre}} " >
                                                </div>
                                                <div class="form-group">
                                                    <label for="recipient-name" class="col-form-label">Descripción:</label>
                                                    <input type="text" name="descripcion" class="form-control" id="recipient-name" value="{{$subcategoria->descripcion}} " >
                                                </div>
                                                <div class="form-group">
                                                    <label for="recipient-name" class="col-form-label">Sub nombre:</label>
                                                    <input type="text" name="subnombre" class="form-control" id="recipient-name" value="{{$subcategoria->subnombre}} " >
                                                </div>
                                                <div class="form-group">
                                                    <label for="recipient-name" class="col-form-label">Sub descripcion:</label>
                                                    <input type="text" name="subdescripcion" class="form-control" id="recipient-name" value="{{$subcategoria->subdescripcion}} ">
                                                </div>
                                                
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                                                <button type="submit" name="editar" class="btn btn-success">Editar </button>
                                                </form>
                                            </div>
                                            </div>
                                        </div>
                                    </div>
                            </td>
                        </tr>                      
                        @endforeach
                        
                    </tbody>
                   
                </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
</div>
@endsection