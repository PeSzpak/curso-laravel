@include("common.header")

@foreach ($products as $product)
    <p>Nome: {{ $product->name }}</p>
    <p>Nome: {{ $product->sku }}</p>
    <p>Nome: {{ $product->description }}</p>
    <p>Nome: {{ $product->stock }}</p>

    @if (product->status == 0)
        <p>Status: Desabilitado</p>
        @else 
        <p>Status: Habilitado</p>
    @endif

    <p>Nome: {{ $product->brand }}</p>

    @switch($product->status)
        @case(1)
        <p>Status: Desabilitado</p>
            @break
        @case(2)
        <p>Status: Habilitado</p>
            @break
        @default
        <p>Status: Desabilitado</p>
    @endswitch

    @empty($product->brand_id)
        Produto: {{$product->name}} não possui marca cadastrada
    @endempty
    
    The current UNIX timestamp is {{ time() }}.

    <hr>

@endforeach

@include("common.footer")