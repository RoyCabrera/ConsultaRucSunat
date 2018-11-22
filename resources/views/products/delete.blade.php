@auth
    {!! Form::open(['method'=>'DELETE','route'=>['productos.destroy',$product->id],'onsubmit'=>
    'return confirm("¿Estas seguro de eliminar el producto?")']) !!}
    <input type="submit" value="Eliminar producto" class="btn btn-outline-danger">

    {!! Form::close() !!}
@endauth