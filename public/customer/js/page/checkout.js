const View = {
    Cart: {
        getVal(){
            var resource = $(".order-formdata");
            var fd = new FormData();
            var required_data = [];
            var onPushData = true;
 
            var data_name          = resource.find('.data-name').val();
            var data_address       = resource.find('.data-address').val();
            var data_phone         = resource.find('.data-phone').val();
            var data_email         = resource.find('.data-email').val(); 
 
            if (data_name == '') { required_data.push('Nhập tên.'); onPushData = false }
            if (data_address == '') { required_data.push('Nhập địa chỉ.'); onPushData = false }
            if (data_phone == '') { required_data.push('Nhập số điện thoại.'); onPushData = false }
            if (data_email == '') { required_data.push('Nhập email.'); onPushData = false } 

            if (onPushData) {
                fd.append('data_cart', localStorage.getItem("mother-card-cart"));
                fd.append('data_prices', localStorage.getItem("mother-card-total"));
                fd.append('data_name', data_name);
                fd.append('data_address', data_address);
                fd.append('data_phone', data_phone);
                fd.append('data_email', data_email); 
                return fd;
            }else{
                resource.find('.error-log .js-response').remove();
                var required_noti = ``;
                for (var i = 0; i < required_data.length; i++) { required_noti += `<li class="error">${required_data[i]}</li>`; }
                resource.find('.error-log').prepend(`<div class="js-response js-errors">${required_noti}</div> `)
                return false;
            }
        },
        onCheckout(callback){
            $(document).on('click', `.action-checkout`, function(event) {
                var data = View.Cart.getVal();
                if (data) callback(data);
            });
        },
    },
    init(){ 
    }
};
(() => {
    View.init()

    function init(){ 
    }
 
    View.Cart.onCheckout((fd) => { 
        Api.Order.Checkout(fd)
            .done(res => { 
                localStorage.removeItem("mother-card-cart");
                localStorage.removeItem("mother-card-total");
                localStorage.removeItem("mother-card");
                $('.error-log').prepend(`<div class="js-response js-success"><li class="success">Đặt hàng thành công</li></div> `)
            })
            .fail(err => {   })
            .always(() => { }); 
    })
    init()
})();