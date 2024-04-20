@extends('admin.layouts.main')
@section('content')
    <form action="{{route('admin.category_food.store')}}" method="post" class="form-horizontal">
        @csrf

        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <strong>Thông tin cơ bản</strong>
                </div>
                <div class="card-body card-block">
                    <div class="row form-group">
                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Tên loại món</label>
                        </div>
                        <div class="col-12 col-md-9"><input type="text" id="text-input" name="name"
                                                            placeholder="Tên loại món" class="form-control"></div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3"><label for="textarea-input" class=" form-control-label">Mô tả</label>
                        </div>
                        <div class="col-12 col-md-9"><textarea name="description" id="textarea-input" rows="4"
                                                               placeholder="Mô tả..." class="form-control"></textarea>
                        </div>
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
