<x-layout>

<div class="container">
    <div class="row">
        <div class="col-6">
            <h1 class="display-5">{{$annuncio['name']}}</h1>
            <p>{{$annuncio['description']}}</p>
            <h4>{{$annuncio['price']}}</h4>
            <p>{{$annuncio['seller']}}</p>
        </div>
        <div class="col-6">
          <img class="wrap-image" src="{{$annuncio['img']}}" alt="">
        </div>
    </div>
   </div>
   
</x-layout>