@extends('Layout.app')
@section('title')
Home page

@endsection
@section('content')

<div id="home">
    <div class="image">
        <div class="container">
            <div class="row ">
                <div class="col-12  d-flex align-items-center justify-content-center text-light darkknight p-2">
                    <h1>Vegan Store </h1>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="container text-center my-5">
    <h2>
        Fruits
    </h2>
    <div class="row">
        <div class="col-md-4 p-1">
          <div class="card" style="width:100%">
            <img src="{{asset('image/fruits.jpg')}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">fruit Name</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <button class="btn btn-primary">View More</button>
                </div>
                </div>
          </div>

          <div class="col-md-4 p-1">
          <div class="card" style="width:100%">
            <img src="{{asset('image/fruits.jpg')}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">fruit Name</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <button class="btn btn-primary">View More</button>
                </div>
                </div>
          </div>

          <div class="col-md-4 p-1">
          <div class="card" style="width:100%">
            <img src="{{asset('image/fruits.jpg')}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">fruit Name</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <button class="btn btn-primary">View More</button>
                </div>
                </div>
          </div>

        </div>

</div>

<div class="jumbotron jumbotron-fluid bg-secondary ">
    <div class="container text-center my-1">
        <h2>Recent vega</h2><br><br>
        <div class="row">
        <div class="col-md-4 p-1">
          <div class="card" style="width:100%">
            <img src="{{asset('image/vega.jpg')}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">vegetable Name</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>

                </div>
                </div>
          </div>

          <div class="col-md-4 p-1">
          <div class="card" style="width:100%">
            <img src="{{asset('image/vega.jpg')}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">vegetable Name</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
                </div>
          </div>

          <div class="col-md-4 p-1">
          <div class="card" style="width:100%">
            <img src="{{asset('image/vega.jpg')}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">vegetable Name</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>

                </div>
                </div>
          </div>

        </div>
    </div>
</div>


<div class="container mb-5 mt-5">
    <h2>Contact With Me</h2><br><br>
    <div class="row">
        <div class="col-md-6">
        <form>
        <div class="form-group">
            <label for="exampleInputEmail1">Your Name</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>

        <div class="form-group">
            <label for="exampleInputEmail1">Your Mobile</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>

        <div class="form-group">
            <label for="exampleInputEmail1">Your Email</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>

        <div class="form-group">
            <label for="exampleInputEmail1">Your Message</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>



      <button type="submit" class="btn btn-block btn-primary">Send Now</button>
    </form>
        </div>

        <div class="col-md-6">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d120414.98292577287!2d-99.23071264179691!3d19.413779200000004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d1ff8ec39ec4d1%3A0x704bb5bc3e37f030!2sFat%20Vegan!5e0!3m2!1sfr!2stn!4v1628291542580!5m2!1sfr!2stn" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>

    </div>
    </div>



@endsection
