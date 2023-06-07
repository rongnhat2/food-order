const View = {
    Category: {
        data: [],
        render(){
            View.Category.data.map(v => {
                $(".data-category")
                    .append(`<option value="${v.id}">${v.name}</option>`)
            })
        },
        setVal(){

        },
        getVal(){

        }
    },
    table: {
        __generateDTRow(data){ 
            return [
                `<div class="id-order">${data.id}</div>`,
                data.name,  
                data.category_name,  
                `<img src="/${data.image}" style="width:100px" alt="">`,   
                `<div class="view-data tab-action" atr="Edit" style="cursor: pointer" data-id="${data.id}"><i class="anticon anticon-edit"></i></div>
                <div class="view-data tab-action" atr="Delete" style="cursor: pointer" data-id="${data.id}"><i class="anticon anticon-delete"></i></div>`
            ]
        },
        init(){
            var row_table = [ 
                                { title: 'ID', name: 'id', orderable: true, width: '10%', },
                                { title: 'Tên', name: 'name', orderable: true, },
                                { title: 'Danh mục', name: 'name', orderable: true, },
                                { title: 'Hình ảnh', name: 'image', orderable: true, }, 
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
 
                var data_image          = $(`${resource}`).find('.data-image')[0].files;
                var data_name           = $(`${resource}`).find('.data-name').val().replace(noTag, "");  
                var data_link           = $(`${resource}`).find('.data-link').val().replace(noTag, "");  
                var data_description           = $(`${resource}`).find('.data-description').val().replace(noTag, "");  
                var data_category      = $(`${resource}`).find('.data-category').val(); 
                var data_detail         = $(`${resource}`).find('.data-detail').val();  
 
                // --Required Value
                if (data_image.length <= 0) { required_data.push('Hãy chọn ảnh.'); onPushData = false }  
                if (data_name == '') { required_data.push('Nhập tên.'); onPushData = false }  
                if (data_description == '') { required_data.push('Nhập mô tả.'); onPushData = false }  
                if (data_detail == '') { required_data.push('Nhập nội dung.'); onPushData = false }
                if (data_category == '') { required_data.push('Chọn danh mục.'); onPushData = false } 

                if (onPushData) {
                    fd.append('data_image', data_image[0] ?? "null"); 
                    fd.append('data_description', data_description); 
                    fd.append('data_name', data_name); 
                    fd.append('data_link', data_link); 
                    fd.append('data_detail', data_detail);
                    fd.append('data_category', data_category);

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
        Update: { 
            setVal(resource, data){
                $(`${resource}`).find('.data-id').val(data.id);
                $(`${resource}`).find('.data-name').val(data.name);
                $(`${resource}`).find('.data-description').val(data.description);
                $(`${resource}`).find('.image-preview').css({
                    'background-image': `url('/${data.image ?? 'icon/noimage.png'}')`
                })
                $('.id_100 option[value=val2]').attr('selected','selected');
                $(`${resource}`).find(`.data-category option[value=${data.category_id}]`).attr('selected','selected'); 
                IndexView.summerNote.update(`${resource} .data-detail`, data.detail); 
            },
            getVal(resource){ 
                var fd = new FormData();
                var required_data = [];
                var onPushData = true;
                const noTag = /(<([^>]+)>)/ig;
                const noScript = /(<\s*script[^>]*>(.*?)<\s*\/\s*script>)/ig;

                var data_id             = $(`${resource}`).find('.data-id').val().replaceAll(noTag, "");

                var data_image          = $(`${resource}`).find('.data-image')[0].files;
                var data_name           = $(`${resource}`).find('.data-name').val().replace(noTag, "");  
                var data_link           = $(`${resource}`).find('.data-link').val().replace(noTag, "");  
                var data_description           = $(`${resource}`).find('.data-description').val().replace(noTag, "");  
                var data_category      = $(`${resource}`).find('.data-category').val(); 
                var data_detail         = $(`${resource}`).find('.data-detail').val();  

                // --Required Value  
                if (data_name == '') { required_data.push('Nhập tên.'); onPushData = false }  
                if (data_detail == '') { required_data.push('Nhập nội dung.'); onPushData = false }
                if (data_description == '') { required_data.push('Nhập mô tả.'); onPushData = false }  
                if (data_category == '') { required_data.push('Chọn danh mục.'); onPushData = false } 

                if (onPushData) {
                    fd.append('data_id', data_id); 
                    fd.append('data_image', data_image[0] ?? "null");
                    fd.append('data_link', data_link); 
                    fd.append('data_description', data_description);  
                    fd.append('data_name', data_name); 
                    fd.append('data_detail', data_detail);
                    fd.append('data_category', data_category);

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
    }
};
(() => {
    View.init();
    function init(){
        getData();
        getCategory();

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
        View.Category.render();
    })
    View.FullTab.onPush("Confirm", "#popup-create", () => { 
        var fd = View.FullTab.Create.getVal("#popup-create");
        if (fd) {
            View.FullTab.doShow("Table");
            View.FullTab.default();
            IndexView.helper.showToastProcessing('Process', 'Đang xử lí');
            Api.Product.Store(fd)
                .done(res => { 
                    IndexView.helper.showToastSuccess('Success', 'Thành công');
                    getData();
                })
                .fail(err => { IndexView.helper.showToastError('Error', 'Có lỗi sảy ra'); })
                .always(() => { });
        }
    })
    View.FullTab.onPush("Confirm", "#link", () => { 
        var fd = new FormData();
        fd.append('data_link', $("#link .data-link").val()); 
        if (fd) { 
            Api.Product.Link(fd)
                .done(res => { 
                    IndexView.helper.showToastSuccess('Success', 'Thành công'); 
                })
                .fail(err => { IndexView.helper.showToastError('Error', 'Có lỗi sảy ra'); })
                .always(() => { });
        }
    })


    // Update
    View.FullTab.onShow("Edit", (id) => {
        View.FullTab.doShow("Update");
        View.FullTab.Update.init("Update");
        View.Category.render();
        IndexView.helper.showToastProcessing('Process', 'Đang xử lí');
        Api.Product.getOne(id)
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
            Api.Product.Update(fd)
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
        Api.Product.Delete($("#popup-delete").find('.data-id').val())
            .done(res => { 
                IndexView.helper.showToastSuccess('Success', 'Thành công');
                getData();
            })
            .fail(err => { IndexView.helper.showToastError('Error', 'Có lỗi sảy ra'); })
            .always(() => { });
    })

 
    function getData(){
        Api.Product.GetAll()
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

    function getCategory(){
        Api.Category.GetAll()
            .done(res => {
                View.Category.data = res.data;
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
