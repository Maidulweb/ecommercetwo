@extends('frontend.layouts.master')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-4">
            <div class="card" style="">
                  <a href=""><img src="" alt="No found"></a>
                <div class="card-body">
                    <a href=""><h5 class="card-title">Title</h5></a>

                  <p class="card-text">Description</p>
                  <p class="card-text">Price</p>

                  <form action="" method="post">
                      @csrf
                      <input type="hidden" name="addtocart" value="">
                      <button type="submit" class="btn btn-success">Add To Cart</button>
                  </form>


                </div>
              </div>
        </div>
    </div>
</div>
@endsection
