@extends('admin.layouts.main')
@section('content')
    <form action="{{route('admin.user.store')}}" method="post" class="form-horizontal">
        @csrf

        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <strong>Thông tin cơ bản</strong>
                </div>
                <div class="card-body card-block">
                    <div class="row form-group">
                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Tên</label>
                        </div>
                        <div class="col-12 col-md-9"><input type="text" id="text-input" name="name"
                                                            placeholder="Tên" class="form-control"></div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Địa chỉ</label>
                        </div>
                        <div class="col-12 col-md-9"><input type="text" id="text-input" name="address"
                                                            placeholder="Địa chỉ" class="form-control"></div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Số điện thoại</label>
                        </div>
                        <div class="col-12 col-md-9"><input type="text" id="text-input" name="phone"
                                                            placeholder="Số điện thoại" class="form-control"></div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Email</label>
                        </div>
                        <div class="col-12 col-md-9"><input type="text" id="text-input" name="email"
                                                            placeholder="Email" class="form-control"></div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Tuổi</label>
                        </div>
                        <div class="col-12 col-md-9"><input type="text" id="text-input" name="age"
                                                            placeholder="Tuổi" class="form-control"></div>
                    </div>
                </div>

            </div>
        </div>
        <div class="card-body" style="text-align: right">
            <button type="submit" class="btn btn-primary">Xác nhận</button>
            <button type="button" class="btn btn-primary">Hủy</button>
        </div>
    </form>
@endsection()
