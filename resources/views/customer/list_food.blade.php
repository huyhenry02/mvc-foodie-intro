@extends('customer.layouts.main')
@section('content')
    <!-- Recipe Section Begin -->
    <section class="recipe-section spad">
        <div class="container">
            <div class="row">
                @foreach($foods as $food)
                    <div class="col-lg-4 col-sm-6">
                        <div class="recipe-item">
                            <a href="#"><img src="/customer/img/recipe/recipe-1.jpg" alt=""></a>
                            <div class="ri-text">
                                <div class="cat-name">{{$food->categoryFood->name ?? ''}}</div>
                                <a href="{{route('customer.recipe', $food->id)}}">
                                    <h4>{{$food->name ?? ''}}</h4>
                                </a>
                                <p>{{$food->description ?? ''}}</p>
                            </div>
                        </div>
                    </div>

                @endforeach
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="recipe-pagination">
                        <a href="#" class="active">01</a>
                        <a href="#">02</a>
                        <a href="#">03</a>
                        <a href="#">04</a>
                        <a href="#">Next</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Recipe Section End -->
@endsection()
