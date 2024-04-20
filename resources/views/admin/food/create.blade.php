@extends('admin.layouts.main')
@section('content')
    <form action="{{route('admin.food.store')}}" method="post" enctype="multipart/form-data" class="form-horizontal">
        @csrf

        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <strong>Thông tin cơ bản</strong>
                </div>
                <div class="card-body card-block">
                    <div class="row form-group">
                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Tên món</label>
                        </div>
                        <div class="col-12 col-md-9"><input type="text" id="text-input" name="name"
                                                            placeholder="Tên món" class="form-control"></div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3"><label for="textarea-input" class=" form-control-label">Mô tả</label>
                        </div>
                        <div class="col-12 col-md-9"><textarea name="description" id="textarea-input" rows="4"
                                                               placeholder="Mô tả..." class="form-control"></textarea>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3"><label for="select" class=" form-control-label">Loại món</label></div>
                        <div class="col-12 col-md-9">
                            <select name="category_food_id" id="select" class="form-control">
                                <option value="0">Chọn loại món</option>
                                @foreach($categories as $category)
                                    <option value="{{$category->id}}">{{$category->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3"><label for="textarea-input" class=" form-control-label">Ghi
                                chú</label></div>
                        <div class="col-12 col-md-9"><textarea name="note" id="textarea-input" rows="4"
                                                               placeholder="Ghi chú..." class="form-control"></textarea>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Tổng thời gian nấu
                                (phút)</label></div>
                        <div class="col-12 col-md-9"><input type="number" id="text-input" name="total_time"
                                                            placeholder="Tổng thời gian nấu" class="form-control"></div>
                    </div>
                </div>

            </div>
        </div>
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <strong>Nguyên Liệu</strong>
                </div>
                <div class="card-body card-block">
                    <div class="ingredient-input">
                        <div class="row form-group ingredient-entry">
                            <div class="col-3">
                                <div class="form-group">
                                    <label for="amount" style="margin-bottom: 5px">Tên:</label>
                                    <input type="text" name="ingredients[0][name]" class="form-control amount"
                                           id="amount">
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="form-group">
                                    <label for="quantity" style="margin-bottom: 5px">Số lượng:</label>
                                    <input type="number" name="ingredients[0][quantity]" class="form-control quantity" id="quantity">
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="form-group">
                                    <label for="unit" style="margin-bottom: 5px">Đơn vi:</label>
                                    <input type="text" name="ingredients[0][unit]" class="form-control unit" id="unit">
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="form-group" style="margin-top: 25px">
                                    <label>&nbsp;</label>
                                    <button type="button" class="btn btn-success btn-add-ingredient">+</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <strong>Công thức</strong>
                </div>
                <div class="card-body card-block">
                    <div class="recipe-input">
                        <div class="row form-group recipe-entry">
                            <div class="col-2">
                                <div class="form-group">
                                    <label for="amount" style="margin-bottom: 5px">Bước:</label>
                                    <input type="number" name="recipes[0][step]" class="form-control amount"
                                           id="amount">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="form-group">
                                    <label for="prep_time" style="margin-bottom: 5px">Thời gian chuẩn bị (phút):</label>
                                    <input type="number" name="recipes[0][prep_time]" class="form-control price" id="prep_time">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="form-group">
                                    <label for="cook_time" style="margin-bottom: 5px">Thời gian nấu (phút):</label>
                                    <input type="number" name="recipes[0][cook_time]" class="form-control cook_time" id="price">
                                </div>
                            </div>
                            <div class="col-5">
                                <div class="form-group">
                                    <label for="textarea-input" style="margin-bottom: 5px">Mô tả:</label>
                                    <textarea name="recipes[0][description]" id="textarea-input" rows="4"
                                              placeholder="Mô tả..." class="form-control"></textarea>
                                </div>
                            </div>
                            <div class="col-1">
                                <div class="form-group" style="margin-top: 25px">
                                    <label>&nbsp;</label>
                                    <button type="button" class="btn btn-success btn-add-recipe">+</button>
                                </div>
                            </div>
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        let ingredientIndex = 0;
        $(document).ready(function() {
            $('.btn-add-ingredient').on('click', function() {
                const newEntry = $('.ingredient-entry').first().clone();
                newEntry.find('input').val('');
                newEntry.find('label').remove();
                newEntry.find('.btn-add-ingredient').remove();
                newEntry.appendTo('.ingredient-input');
                ingredientIndex++;
                newEntry.find('input').each(function() {
                    const currentName = $(this).attr('name');
                    const newName = currentName.replace(/\[\d+\]/, '[' + ingredientIndex + ']');
                    $(this).attr('name', newName);
                });
            });
            let recipeIndex = 0;
            $('.btn-add-recipe').on('click', function() {
                const newEntry = $('.recipe-entry').first().clone();
                newEntry.find('input').val('');
                newEntry.find('label').remove();
                newEntry.find('.btn-add-recipe').remove();
                newEntry.appendTo('.recipe-input');
                recipeIndex++;
                newEntry.find('input').each(function() {
                    const currentName = $(this).attr('name');
                    const newName = currentName.replace(/\[\d+\]/, '[' + recipeIndex + ']');
                    $(this).attr('name', newName);
                });
                newEntry.find('textarea').attr('id', 'textarea-input-' + recipeIndex);
                newEntry.find('textarea').attr('name', 'recipes[' + recipeIndex + '][description]');
            });
        });
    </script>
@endsection()
