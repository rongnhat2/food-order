const View = {
    Kitchen: {
        render(data){
            data.map(v => {
                $(".data-list")
                    .append(`<div class="col-md-3">
                                <div class="card">
                                    <div class="card-body">
                                        <h4>${v.name}</h4>
                                        <p>Hệ số: ${v.coefficient}</p>
                                        <p>Trạng thái: ${v.valid == 1 ? "Còn trống" : "Đã sử dụng"}</p>
                                    </div>
                                    <div class="card-footer">
                                        <div class="text-right">
                                            <button class="btn btn-primary">Nhận đơn</button>
                                        </div>
                                    </div>
                                </div>
                            </div> `)
            })
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
