@extends('admin.layouts.main')
@section('content')
    <div class="breadcrumbs">
        <div class="breadcrumbs-inner">
            <div class="row m-0">
                <div class="col-sm-4">
                    <div class="page-header float-left">
                        <div class="page-title">
                            <div class="card-body">
                                <a href="{{route('admin.category_food.create')}}" type="button" class="btn btn-primary">Tạo loại món</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="page-header float-right">
                        <div class="page-title">
                            <ol class="breadcrumb text-right">
                                <li><a href="#">Loại món</a></li>
                                <li class="active">Danh sách</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="content">
        <div class="animated fadeIn">
            <div class="row">

                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Danh sách</strong>
                        </div>
                        <div class="card-body">
                            <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                <thead>
                                <tr>
                                    <th>STT</th>
                                    <th>Tên Loại món</th>
                                    <th>Mô tả</th>
                                    <th>Hành động</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($categoryFoods as $categoryFood)

                                    <tr>
                                        <td width="5%">{{$categoryFood->id ?? ''}}</td>
                                        <td width="20%">{{$categoryFood->name ?? ''}}</td>
                                        <td width="20%">{{$categoryFood->description ?? ''}}</td>
                                        <td width="15%">
                                            <a href="#"
                                               class="btn btn-primary">Sửa</a>
                                            <a href="{{route('admin.category_food.delete',[$categoryFood->id])}}"
                                               class="btn btn-danger">Xóa</a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
@endsection()
