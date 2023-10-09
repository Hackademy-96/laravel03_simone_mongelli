 
<div class="col-3">
    <div class="card mt-4" style="width: 18rem;">
        <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">NEW</span>
        <img src="{{$productImage}}" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">{{$productName}}</h5>
            <p class="card-text">{{substr($productDescription,0,25)}} ...</p>
            <h5 class="card-title">{{$productPrice}}</h5>
            <p class="card-text"><small class="text-body-secondary">{{$productSeller}}</small></p>
            <a href="{{route('annunci_cards', ['article'=> $productName])}}" class="btn btn-primary">Visualizza dettagli</a>
        </div>
    </div> 
</div>
