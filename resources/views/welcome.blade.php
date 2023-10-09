<x-layout>


<h1 class="text-center display-5 color-text border-bottom pb-2 mt-5">SCOPRI I NOSTRI ANNUNCI </h1>
<div class="container-fluid">
    <div class="row justify-content-center">
        @foreach ($articoli as $product)
            <x-card productImage="{{$product['img']}}"
                    productName="{{$product['name']}}"
                    productDescription="{{$product['description']}}"
                    productPrice="{{$product['price']}}"
                    productSeller="{{$product['seller']}}"/>


        @endforeach
    </div>
</div>

</x-layout>

