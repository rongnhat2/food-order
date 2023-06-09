const View = {
    Kitchen: {
        render(data){
            $(".data-list .col-md-3").remove();
            data.map(v => {
                $(".data-list")
                    .append(`<div class="col-md-3 data-item" data-id="${v.id}">
                                <div class="card">
                                    <div class="card-body">
                                        <h4>${v.name}</h4>
                                        <p>Hệ số: ${v.coefficient}</p>
                                        <p class="data-status">Trạng thái: ${v.valid == 1 ? "Còn trống" : "Đã sử dụng"}</p>
                                        <div class="data-info"></div>
                                    </div>
                                    <div class="card-footer">
                                        <div class="text-right">
                                            <button class="btn btn-primary ${v.valid == 1 ? "get-order" : "post-order"}" kitchen-id="${v.id}">
                                                ${v.valid == 1 ? "Nhận đơn" : "Trả đơn"}
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div> `)
            })
        },
        getOrder(callback){
            $(document).on('click', `.get-order`, function() {
                callback($(this).attr("kitchen-id"));
            });
        },
        postOrder(callback){
            $(document).on('click', `.post-order`, function() {
                callback($(this).attr("kitchen-id"));
            });
        }
    },
    init(){

    }
};
(() => {
    View.init();
    function init(){
        getData();
    }
 
    View.Kitchen.getOrder((id) => {
        getData()
        Api.Kitchen.getOrder(id)
            .done(res => {
                $(`.data-item[data-id=${id}]`)
                    .find(`.data-info`)
                    .append(`
                        <p>Tên món: ${res.data.name}</p>
                    `)

                $(`.data-item[data-id=${id}]`)
                    .find(`.data-status`).text('Đã sử dụng')

                $(`.data-item[data-id=${id}]`)
                    .find(`.get-order`).text('Trả đơn')

                $(`.data-item[data-id=${id}]`)
                    .find(`.get-order`).addClass('post-order')

                $(`.data-item[data-id=${id}]`)
                    .find(`.get-order`).removeClass('get-order')

            })
            .fail(err => { IndexView.helper.showToastError('Error', 'Có lỗi sảy ra'); })
            .always(() => { });
    })

    View.Kitchen.postOrder((id) => {
        getData()
        Api.Kitchen.postOrder(id)
            .done(res => {
                $(`.data-item[data-id=${id}]`)
                    .find(`.data-info p`).remove()

                $(`.data-item[data-id=${id}]`)
                    .find(`.data-status`).text('Chưa sử dụng')

                $(`.data-item[data-id=${id}]`)
                    .find(`.get-order`).text('Nhận đơn')

                $(`.data-item[data-id=${id}]`)
                    .find(`.post-order`).addClass('get-order')

                $(`.data-item[data-id=${id}]`)
                    .find(`.post-order`).removeClass('post-order')

            })
            .fail(err => { IndexView.helper.showToastError('Error', 'Có lỗi sảy ra'); })
            .always(() => { });
    })

    function getData(){
        Api.Kitchen.GetAll()
            .done(res => {
                View.Kitchen.render(res.data)
            })
            .fail(err => { IndexView.helper.showToastError('Error', 'Có lỗi sảy ra'); })
            .always(() => { });
    }

    init();
})();
