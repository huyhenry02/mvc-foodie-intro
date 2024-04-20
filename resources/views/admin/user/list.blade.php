@extends('admin.layouts.main')
@section('content')
    <div class="breadcrumbs">
        <div class="breadcrumbs-inner">
            <div class="row m-0">
                <div class="col-sm-4">
                    <div class="page-header float-left">
                        <div class="page-title">
                            <div class="card-body">
                                <a href="{{route('admin.user.create')}}" type="button" class="btn btn-primary">Tạo Nhân viên</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="page-header float-right">
                        <div class="page-title">
                            <ol class="breadcrumb text-right">
                                <li><a href="#">Nhân viên</a></li>
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
                                <tr class="text-center">
                                    <th>STT</th>
                                    <th>Tên Nhân viên</th>
                                    <th>Số điện thoại</th>
                                    <th>Email</th>
                                    <th>Địa chỉ</th>
                                    <th>Tuổi</th>
                                    <th>Hành động</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($users as $user)

                                    <tr class="text-center">
                                        <td width="5%">{{$user->id ?? ''}}</td>
                                        <td width="20%">{{$user->name ?? ''}}</td>
                                        <td width="20%">{{$user->phone ?? ''}}</td>
                                        <td width="20%">{{$user->email ?? ''}}</td>
                                        <td width="10%">{{$user->address ?? ''}}</td>
                                        <td width="10%">{{$user->age ?? ''}}</td>
                                        <td width="15%">
                                            <a href="#"
                                               class="btn btn-primary">Sửa</a>
                                            <a href="{{route('admin.user.delete',[$user->id])}}"
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
