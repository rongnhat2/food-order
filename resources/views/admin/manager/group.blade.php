@extends('admin.layout')
@section('title', 'Bếp nấu')
@section('menu-data')
<input type="hidden" name="" class="menu-data" value="group-group | group">
@endsection()


@section('css')

@endsection()


@section('body')

    
<div class="page-header no-gutters has-tab">
    <div class="d-md-flex m-b-15 align-items-center justify-content-between notification relative" id="notification">
        <div class="media align-center justify-content-between m-b-15 w-100">
            <div class="m-l-15">
                <h4 class="m-b-0">Bếp nấu</h4>
            </div>
            @include('admin.alert')
        </div>
    </div>
</div>

<div class="row data-list">
    
    
</div>      

<div class="data-custom-tab" data-tab-name="Create" id="popup-create"> </div>
<div class="data-custom-tab" data-tab-name="Update" id="popup-update"> </div>
<div class="data-custom-tab" data-tab-name="Delete" id="popup-delete"> </div>

@endsection()
 

@section('js')
    
    <script src="{{ asset('manager/assets/js/page/group.js') }}"></script>

@endsection()