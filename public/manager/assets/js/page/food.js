const View = {
    table: {
        __generateDTRow(data){ 
            return [
                `<div class="id-order">${data.id}</div>`,
                data.name,     
                data.description,    
                data.prices,      
                `<div class="view-data tab-action" atr="Edit" style="cursor: pointer" data-id="${data.id}"><i class="anticon anticon-edit"></i></div>
                <div class="view-data tab-action" atr="Delete" style="cursor: pointer" data-id="${data.id}"><i class="anticon anticon-delete"></i></div>`
            ]
        },
        init(){
            var row_table = [ 
                                { title: 'ID', name: 'id', orderable: true, width: '10%', },
                                { title: 'Tên công cụ', name: 'name', orderable: true, },  
                                { title: 'Mô tả', name: 'name', orderable: true, },  
                                { title: 'Đơn giấ', name: 'name', orderable: true, },   
                                { title: 'Hành động', name: 'action', orderable: true, width: '10%', },
                            ];
            IndexView.table.init("#data-table", row_table);
        }
    },   
    Layout: {
        FormCreate: "",
        FormUpdate: "",
        FormDelete: "",
        init(){
            View.Layout.FormCreate = $(".layout-tab-create").html();
            View.Layout.FormUpdate = $(".layout-tab-create").html();
            View.Layout.FormDelete = $(".layout-tab-delete").html();
            $(".layout-tab-create").remove();
            $(".layout-tab-delete").remove();
        }
    },
    Ingredient: {
        data: [],
        render(data){

        },
        getVal(){
            let data = [];

            $(".igredient-item").each(function( index ) {
               data.push(`${$(this).find(".data-igredient").val()}-${$(this).find(".data-value").val()}`)
            })
            return JSON.stringify(data);
        },
        create(){ 
            $(".ingredient-list")
                .append(`<div class="igredient-item row mb-2">
                            <div class="col-md-6 px-1">
                                <select name="" id="" class="form-control data-igredient">
                                    ${View.Ingredient.data.map(v => {
                                        return `<option value="${v.id}">${v.name}</option>`
                                    }).join()}
                                </select>
                            </div>
                            <div class="col-md-4 px-1">
                                <input type="text" class="form-control data-value number-type" placeholder="Khối lượng (gam)">
                            </div>
                            <div class="col-md-2 px-1">
                                <button class="btn btn-danger igredient-delete">X</button>
                            </div>
                        </div>`)
        }, 
        remove(item){
            item.parent().parent().remove();
        },
        init(){
            $(document).on('click', `.igredient-create`, function() {
                View.Ingredient.create();
            }); 
            $(document).on('click', `.igredient-delete`, function() {
                View.Ingredient.remove($(this));
            }); 
        }
    },
    FullTab: {  
        Create: { 
            setVal(resource, data){
                
            },
            getVal(resource){ 
                var fd = new FormData();
                var required_data = [];
                var onPushData = true;
                const noTag = /(<([^>]+)>)/ig;
                const noScript = /(<\s*script[^>]*>(.*?)<\s*\/\s*script>)/ig;
 
                var data_name           = $(`${resource}`).find('.data-name').val().replace(noTag, "");  
                var data_description           = $(`${resource}`).find('.data-description').val().replace(noTag, "");  
                var data_coefficient           = $(`${resource}`).find('.data-coefficient').val().replace(noTag, "");  
                var data_price           = $(`${resource}`).find('.data-price').val().replace(noTag, "");  
                var data_image          = $(`${resource}`).find('.data-image')[0].files;
                var data_detail           = View.Ingredient.getVal() ;  

                // --Required Value
                if (data_name == '') { required_data.push('Nhập tên.'); onPushData = false }  
                if (data_description == '') { required_data.push('Nhập mô tả.'); onPushData = false }  
                if (data_price == '') { required_data.push('Nhập đơn giá.'); onPushData = false }  
                if (data_coefficient == '') { required_data.push('Nhập dung lượng.'); onPushData = false }  
                if (data_image.length <= 0) { required_data.push('Hãy chọn ảnh.'); onPushData = false }  

                if (onPushData) {
                    fd.append('data_name', data_name); 
                    fd.append('data_description', data_description); 
                    fd.append('data_coefficient', data_coefficient); 
                    fd.append('data_price', data_price); 
                    fd.append('data_detail', data_detail); 
                    fd.append('data_image', data_image[0] ?? "null"); 

                    return fd;
                }else{
                    $(`${resource}`).find('.error-log .js-errors').remove();
                    var required_noti = ``;
                    for (var i = 0; i < required_data.length; i++) { required_noti += `<li class="error">${required_data[i]}</li>`; }
                    $(`${resource}`).find('.error-log').prepend(` <ul class="js-errors">${required_noti}</ul> `)
                    return false;
                }
            }, 
            init(name){
                $(`[data-tab-name=${name}]`).html(View.Layout.FormCreate) 
            }
        },
        Update: { 
            setVal(resource, data){
                $(`${resource}`).find('.data-id').val(data.id);
                $(`${resource}`).find('.data-name').val(data.name);
                $(`${resource}`).find('.data-description').val(data.description);
                $(`${resource}`).find('.data-total').val(data.total);
                $(`${resource}`).find('.data-size').val(data.size);
            },
            getVal(resource){ 
                var fd = new FormData();
                var required_data = [];
                var onPushData = true;
                const noTag = /(<([^>]+)>)/ig;
                const noScript = /(<\s*script[^>]*>(.*?)<\s*\/\s*script>)/ig;

                var data_id             = $(`${resource}`).find('.data-id').val().replaceAll(noTag, "");
 
                var data_name           = $(`${resource}`).find('.data-name').val().replace(noTag, "");  
                var data_description           = $(`${resource}`).find('.data-description').val().replace(noTag, "");  
                var data_total           = $(`${resource}`).find('.data-total').val().replace(noTag, "");  
                var data_size           = $(`${resource}`).find('.data-size').val().replace(noTag, "");  

                // --Required Value 
                if (data_name == '') { required_data.push('Nhập tên.'); onPushData = false }  
                if (data_description == '') { required_data.push('Nhập mô tả.'); onPushData = false }  
                if (data_total == '') { required_data.push('Nhập số lượng.'); onPushData = false }  
                if (data_size == '') { required_data.push('Nhập dung lượng.'); onPushData = false }  

                if (onPushData) {
                    fd.append('data_id', data_id);  
                    fd.append('data_name', data_name); 
                    fd.append('data_description', data_description); 
                    fd.append('data_total', data_total); 
                    fd.append('data_size', data_size); 

                    return fd;
                }else{
                    $(`${resource}`).find('.error-log .js-errors').remove();
                    var required_noti = ``;
                    for (var i = 0; i < required_data.length; i++) { required_noti += `<li class="error">${required_data[i]}</li>`; }
                    $(`${resource}`).find('.error-log').prepend(` <ul class="js-errors">${required_noti}</ul> `)
                    return false;
                }
            },
            init(name){
                $(`[data-tab-name=${name}]`).html(View.Layout.FormCreate)
                IndexView.summerNote.init(".summernote", "", 300);
            }
        },
        Delete: {
            setVal(resource, id){
                $(resource).find('.data-id').val(id)
            },
            getVal(resource){ 
                $(resource).find('.data-id').val()
            },
            init(name){
                $(`[data-tab-name=${name}]`).html(View.Layout.FormDelete)
            }
        },
        onPush(name, resource, callback){ 
            $(document).on('click', `${resource} .full-tab-action`, function() {
                $(this).attr('atr').trim()
                if($(this).attr('atr').trim() == name) {
                    callback();
                }
            }); 
        },
        default(name){
            $(`[data-tab-name=${name}]`).html("");
        },
        doShow(name){
            $(".data-custom-tab").removeClass("on-show");
            $(`.data-custom-tab[data-tab-name=${name}]`).addClass("on-show"); 
        }, 
        onShow(name, callback){
            $(document).on('click', `.tab-action`, function() {
                if($(this).attr('atr').trim() == name) {
                    var id = $(this).attr("data-id");
                    callback(id);
                }
            });
        },
    },
    init(){
        View.Layout.init();
        View.table.init(); 
        View.Ingredient.init(); 
    }
};
(() => {
    View.init();
    function init(){
        getData();
        getIngredient();
    }

    // Table
    View.FullTab.onShow("Table", () => {
        View.FullTab.doShow("Table");
        View.FullTab.default("Create");
        View.FullTab.default("Update");
        View.FullTab.default("Delete");
        getData();
    })
 
    // Create
    View.FullTab.onShow("Create", () => {
        View.FullTab.doShow("Create");
        View.FullTab.Create.init("Create");
    })
    View.FullTab.onPush("Confirm", "#popup-create", () => { 
        var fd = View.FullTab.Create.getVal("#popup-create");
        if (fd) {
            View.FullTab.doShow("Table");
            View.FullTab.default();
            IndexView.helper.showToastProcessing('Process', 'Đang xử lí');
            Api.Food.Store(fd)
                .done(res => { 
                    IndexView.helper.showToastSuccess('Success', 'Thành công');
                    getData();
                })
                .fail(err => { IndexView.helper.showToastError('Error', 'Có lỗi sảy ra'); })
                .always(() => { });
        }
    })


    // Update
    View.FullTab.onShow("Edit", (id) => {
        View.FullTab.doShow("Update");
        View.FullTab.Update.init("Update");
        IndexView.helper.showToastProcessing('Process', 'Đang xử lí');
        Api.Food.getOne(id)
            .done(res => { 
                View.FullTab.Update.setVal("#popup-update", res.data)
                IndexView.helper.showToastSuccess('Success', 'Lấy ra dữ liệu'); 
            })
            .fail(err => { IndexView.helper.showToastError('Error', 'Có lỗi sảy ra'); })
            .always(() => { });
    })
    View.FullTab.onPush("Confirm", "#popup-update", () => { 
        var fd = View.FullTab.Update.getVal("#popup-update");
        if (fd) {
            View.FullTab.doShow("Table");
            View.FullTab.default();
            IndexView.helper.showToastProcessing('Process', 'Đang xử lí');
            Api.Food.Update(fd)
                .done(res => { 
                    IndexView.helper.showToastSuccess('Success', 'Thành công');
                    getData();
                })
                .fail(err => { IndexView.helper.showToastError('Error', 'Có lỗi sảy ra'); })
                .always(() => { });
        }
    })

    // Delete
    View.FullTab.onShow("Delete", (id) => {
        View.FullTab.doShow("Delete");
        View.FullTab.Delete.init("Delete"); 
        View.FullTab.Delete.setVal("#popup-delete", id)
    })
    View.FullTab.onPush("Delete", "#popup-delete", () => {
        View.FullTab.doShow("Table");
        View.FullTab.default();
        IndexView.helper.showToastProcessing('Process', 'Đang xử lí');
        Api.Food.Delete($("#popup-delete").find('.data-id').val())
            .done(res => { 
                IndexView.helper.showToastSuccess('Success', 'Thành công');
                getData();
            })
            .fail(err => { IndexView.helper.showToastError('Error', 'Có lỗi sảy ra'); })
            .always(() => { });
    })

 
    function getData(){
        Api.Food.GetAll()
            .done(res => {
                IndexView.table.clearRows();
                Object.values(res.data).map(v => {
                    IndexView.table.insertRow(View.table.__generateDTRow(v));
                    IndexView.table.render();
                })
                IndexView.table.render();
            })
            .fail(err => { IndexView.helper.showToastError('Error', 'Có lỗi sảy ra'); })
            .always(() => { });
    }
 
    function getIngredient(){
        Api.Ingredient.GetAll()
            .done(res => {
                View.Ingredient.data = res.data;
            })
            .fail(err => { IndexView.helper.showToastError('Error', 'Có lỗi sảy ra'); })
            .always(() => { });
    }
    
    function debounce(f, timeout) {
        let isLock = false;
        let timeoutID = null;
        return function(item) {
            if(!isLock) {
                f(item);
                isLock = true;
            }
            clearTimeout(timeoutID);
            timeoutID = setTimeout(function() {
                isLock = false;
            }, timeout);
        }
    }
    init();
})();
