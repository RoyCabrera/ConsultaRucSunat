{!! Form::open(['route'=> [$product->url(),$product->id],'method'=>$product->method(),'class'=>'app-form'])  !!}
    <div>
        {!! Form::label('title','Titulo del producto') !!}
        {!! Form::text('title',$product->title,['class'=>'form-control']) !!}
    </div>
    <div>
        {!! Form::label('description','Descripción del producto') !!}
        {!! Form::textarea('description',$product->description,['class'=>'form-control']) !!}
    </div>
    <div>
        {!! Form::label('price','Precio del producto') !!}
        {!! Form::number('price',$product->price,['class'=>'form-control']) !!}
    </div>
    <div class="text-center pt-2">
        <input type="submit" value="Guardar" class="btn btn-outline-danger">
    </div>

{!! Form::close() !!}

{{--<form action="{{url('/productos')}}" method="post">--}}
    {{--<div>--}}
        {{--<label for="title">Titulo del producto</label>--}}
        {{--<input type="text" id="title" class="form-control" name="title">--}}
    {{--</div>--}}
    {{--<div>--}}
        {{--<label for="description">Titulo del producto</label>--}}
        {{--<textarea name="description" id="description" cols="30" rows="10" class="form-control"></textarea>--}}
    {{--</div>--}}
    {{--<div>--}}
        {{--<label for="price">Titulo del producto</label>--}}
        {{--<input type="number" id="price" name="price" class="form-control">--}}
    {{--</div>--}}
    {{--<div class="">--}}
        {{--<input type="submit" class="btn btn-outline-primary" value="Guardar">--}}
    {{--</div>--}}
{{--</form>--}}