@foreach ($products as $product )
<h1>{{ $product->title}}</h1>
{{var_dump($product->_tags)}}

{{$product->_tags['auth']}}

@endforeach
