@extends('customer.layouts.main')
@section('content')
    <!-- Single Recipe Section Begin -->
    <section class="single-page-recipe spad">
        <div class="recipe-top">
            <div class="container-fluid">
                <div class="recipe-title">
                    <h2>{{$food->name ?? ''}}</h2>
                    <ul class="tags">
                        <li>Ngon</li>
                        <li>{{$food->categoryFood->name ?? ''}}</li>
                        <li>Tiện lợi</li>
                    </ul>
                </div>
                <img src="/customer/img/recipe-single.jpg" alt="">
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="ingredients-item">
                        <div class="intro-item">
                            <img src="/customer/img/intro-img.jpg" alt="">
                            <h2>{{$food->name ?? ''}}</h2>
                            <div class="rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="reviews">4.9 trên lượt 25 reviews</div>
                            <div class="recipe-time">
                                <ul>
                                    <li>Thời gian nấu: <span>{{$food->total_time ?? ''}} phút</span></li>
                                    <li>Số bước: <span>{{$recipeCount ?? ''}}</span></li>
                                </ul>
                            </div>
                        </div>
                        <div class="ingredient-list">
                            <div class="list-item">
                                <h5>Nguyên liệu</h5>
                                <div class="salad-list">
                                    <ul>
                                        @foreach($ingredients as $ingredient)
                                            <li>{{$ingredient->quantity ?? ''}}{{$ingredient->unit ?? ''}} cho {{$ingredient->name ?? ''}}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="recipe-right">
                        <div class="recipe-desc">
                            <h3>Mô tả</h3>
                            <p>{{$food->description ?? ''}}</p>
                        </div>
                        <div class="instruction-list">
                            <h3>Các bước làm</h3>
                            <ul>
                                @foreach($recipes as $recipe)
                                    <li>
                                        <span>{{$recipe->step ?? ''}}</span>
                                        <p>{{$recipe->description ?? ''}}</p>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="notes">
                            <h3>Ghi chú</h3>
                            <div class="notes-item">
                                <span>i</span>
                                <p>{{$food->note ?? ''}}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Single Recipe Section End -->
@endsection()
