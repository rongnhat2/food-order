const View = {
    Cart: {
        total: 0,
        getData(){
            let data = '{ "data": [] }';
            let dataArray = JSON.parse(data);
            $(`.cart-list .data-item`).each(function(index, el) {
                dataArray.data.push(`{ "id": "${$(this).attr("item-id")}", "quantity": "${$(this).find(".number").val()}" }`)
            });  
            localStorage.setItem("mother-card-cart", JSON.stringify(dataArray));  
            localStorage.setItem("mother-card-total", View.Cart.total);  
        },
        render(data){  
            $(`.cart-list`)
                .append(`<div class="cart-strip-main-wrapper data-item" item-id="${data.id}" cart-price="${data.prices}">
                      <div class="cart-item">
                         <div class="cart-item-img">
                            <img src="${data.image}" alt="logo">
                            <h5>${data.name}</h5>
                         </div>
                      </div> 
                      <div class="cart-item">
                         <div class="quantity-field">
                            <input type="text" class="number" value="1">
                         </div>
                      </div>
                      <div class="cart-item">
                         <h4 class="data-price">${data.prices}</h4>
                      </div>
                      <div class="cart-item">
                         <span class="remove-item"><a href="javscript:;">X</a></span>
                      </div>
                   </div>`)  
            View.Cart.total += data.prices
            $(".total-price").text(View.Cart.total + " đ")
        }
    },
    init(){
        $(document).on('click', '.cart-item .remove-item', function() {
            $(this).parent().parent().remove()
        });
        $(document).on('click', '.on-checkout', function() {
            View.Cart.getData()
        });
        $(document).on('click', '.on-update', function() {
            $(`.cart-list .data-item`).each(function(index, el) {
                let item_price = $(this).attr("cart-price");
                View.Cart.total -= item_price;
                View.Cart.total += item_price * $(this).find(".number").val();
                $(this).find(".data-price").text(item_price * $(this).find(".number").val());
            });  
            $(".total-price").text(View.Cart.total + " đ")
            View.Cart.getData()
        });
    }
};
(() => {
    View.init()

    function init(){
        getData()
    }

    function getData(){
        var card_data = localStorage.getItem("mother-card") 
        card_data.split(",").map(v => { 
            Api.Product.getOne(v)
            .done(res => {
                console.log(res);
                View.Cart.render(res.data)
            })
            .fail(err => { IndexView.helper.showToastError('Error', 'Có lỗi sảy ra'); })
            .always(() => { });
        })
    }

    init()
})();