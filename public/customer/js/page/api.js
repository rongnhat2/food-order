const Api = { 
    Product: {}, 
    Order: {}, 
};
(() => {
    $.ajaxSetup({
        headers: { 
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr('content'),
        },
        crossDomain: true
    });
})();


//Product
(() => {  
    Api.Product.GetSearch = (data) => $.ajax({
        url: `/customer/apip/product/get-search`,
        method: 'POST',
        data: data,
        contentType: false,
        processData: false,
    });
    Api.Product.getOne = (id) => $.ajax({
        url: `/customer/apip/product/get-one/${id}`,
        method: 'GET',
    });

    Api.Order.Checkout = (data) => $.ajax({
        url: `/customer/apip/order/create`,
        method: 'POST',
        data: data,
        contentType: false,
        processData: false,
    });
})(); 



