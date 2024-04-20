@extends('admin.layouts.main')
@section('content')
    <div class="breadcrumbs">
        <div class="breadcrumbs-inner">
            <div class="row m-0">
                <div class="col-sm-4">
                    <div class="page-header float-left">
                        <div class="page-title">
                            <div class="card-body">
                                <a href="{{route('admin.food.create')}}" type="button" class="btn btn-primary">Tạo món ăn</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="page-header float-right">
                        <div class="page-title">
                            <ol class="breadcrumb text-right">
                                <li><a href="#">Món ăn</a></li>
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
                                    <th>Tên món</th>
                                    <th>Loại món</th>
                                    <th>Tổng thời gian nấu</th>
                                    <th>Người tạo</th>
                                    <th>Hành động</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($foods as $food)

                                    <tr>
                                        <td width="5%">{{$food->id ?? ''}}</td>
                                        <td width="20%">{{$food->name ?? ''}}</td>
                                        <td width="20%">{{$food->categoryFood->name ?? ''}}</td>
                                        <td width="20%">{{$food->total_time ?? ''}}</td>
                                        <td width="20%">{{$food->createUser->name ?? ''}}</td>
                                        <td width="15%">
                                            <a href="#"
                                               class="btn btn-primary">Sửa</a>
                                            <a href="{{route('admin.food.delete',[$food->id])}}"
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
