@extends('admin.layout')
@section('title', 'Công cụ')
@section('menu-data')
<input type="hidden" name="" class="menu-data" value="tool-group | tool">
@endsection()


@section('css')

@endsection()


@section('body')

    
<div class="page-header no-gutters has-tab">
    <div class="d-md-flex m-b-15 align-items-center justify-content-between notification relative" id="notification">
        <div class="media align-center justify-content-between m-b-15 w-100">
            <div class="m-l-15">
                <h4 class="m-b-0">Công cụ</h4>
            </div>
            @include('admin.alert')
        </div>
    </div>
</div>
<div class="card data-custom-tab on-show" data-tab-name="Table">
    <div class="card-body">
        <div class="row">
            <div class="col-sm-12 col-md-6">
                
            </div>
            <div class="col-sm-12 col-md-6">
                <div class="align-justify-center">
                    <a href="#" class="btn btn-default btn-sm flex-right tab-action" atr="Create">Tạo mới<i class="fas fa-plus m-l-5"></i></a> 
                </div>
            </div>
        </div>
        <div class="m-t-25">
            <table id="data-table" class="table"> </table>
        </div>
    </div>
</div>

<div class="layout-tab-create">
    <input type="hidden" class="form-control data-id">

    <div class="row">
        <div class="col-md-6 offset-3">  
            <div class="card">
                <div class="card-body">   
                    <div class="tab-content" id="myTabContent">
                        <div class="error-log"> </div> 
                        <div class="form-group row">
                            <label class="col-sm-4 col-form-label control-label">Tên công cụ</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control data-name" placeholder="">
                            </div>
                        </div>    
                        <div class="form-group row">
                            <label class="col-sm-4 col-form-label control-label">Mô tả ngắn</label>
                            <div class="col-md-8">
                                <textarea name="" id="" cols="30" rows="10" class="form-control data-description"></textarea>
                            </div>
                        </div>    
                        <div class="form-group row">
                            <label class="col-sm-4 col-form-label control-label">Số lượng</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control data-total number-type" placeholder="">
                            </div>
                        </div>    
                        <div class="form-group row">
                            <label class="col-sm-4 col-form-label control-label">Kích thước</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control data-size number-type" placeholder="">
                            </div>
                        </div>    
                        <div class="form-group text-right">
                            <button class="btn btn-defauld mr-2 tab-action" atr="Table">Hủy</button>
                            <button class="btn btn-primary full-tab-action" atr="Confirm">Xác nhận</button>
                        </div>
                    </div> 
                </div>
            </div>
        </div>
    </div>
</div>
<div class="layout-tab-delete">
    <input type="hidden" class="form-control data-id">
    <div class="row">
        <div class="col-md-6 offset-3">
            <div class="card">
                <div class="card-body">   
                    <h3>Xóa đối tượng</h3>
                    <div class="form-group text-right">
                        <button class="btn btn-defauld mr-2 tab-action" atr="Table">Hủy</button>
                        <button class="btn btn-primary full-tab-action" atr="Delete">Xác nhận</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="data-custom-tab" data-tab-name="Create" id="popup-create"> </div>
<div class="data-custom-tab" data-tab-name="Update" id="popup-update"> </div>
<div class="data-custom-tab" data-tab-name="Delete" id="popup-delete"> </div>

@endsection()
 

@section('js')
    
    <script src="{{ asset('manager/assets/js/page/tool.js') }}"></script>

@endsection()