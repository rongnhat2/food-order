const IndexView = {
    Cart: {
        add_to_card(name, callback){
            $(document).on('click', `.action-add-to-card`, function() {
                if($(this).attr('atr').trim() == name) {
                    callback($(this));
                }
            });
        },
        update(){
            var card_data = localStorage.getItem("mother-card")
            var count = (card_data == null || card_data == "") ? 0 : card_data.split(",").length;
            $(".cart-count .count").html(count)
        },
        init(){ 
            var card_data = localStorage.getItem("mother-card") 
            if (card_data == null) {

            }else{
                card_data.split(",").map(v => {
                    $(`.action-add-to-card[data-id=${v}]`).text("Đã thêm");
                    // $(`.action-add-to-card[data-id=${v}]`).remove();
                })
            }

        }
    },
    onSearch(callback){
        $(document).on('keyup', '.product-search-field', function() {
            $('.suggest-list .suggess-wrapper').remove()
            var data = $(this).val(); 
            var data_text      = $(this).val();
            var data_category  = $(`#category-search`).val();
            var fd = new FormData();
            fd.append('data_text', data_text);
            fd.append('data_category', data_category);
            if (data_text) callback(fd, data_text);
        });
        $(document).mouseup(function(e) {
            var container = $(".searchProduct");
            if (!container.is(e.target) && container.has(e.target).length === 0) {
                $('.suggest-list .suggess-wrapper').remove()
            }
        });
    },
    doSearch(callback){
        $(document).on('keypress', '.product-search-field', function(e) { 
            if (e.which == 13) {
                var data_text      = $(this).val();
                var data_category  = $(`#category-search`).val();
                callback(data_text, data_category);
            }
        });
    },
    init(){
        IndexView.Cart.init()
        IndexView.Cart.update()
    }
};
(() => {
    IndexView.init(); 
    function init(){

    }
    
    IndexView.onSearch((fd, text) => {
        Api.Product.GetSearch(fd).done(res => { 
            $('.suggest-list .suggess-wrapper').remove()
            $('.suggest-list')
                .append(`<div class="suggess-wrapper"></div>`)
            if (res.data.length > 0) {
                res.data.map(v => {
                    $(".suggess-wrapper").append(`
                            <div class="suggess-item">
                                <a title="${v.name}" href="/product/${ v.id }-${v.slug }">${v.name}</a>
                                <p>${highlight(text, v.name)}</p>
                            </div>`)
                })
            }else{
                $(".suggess-wrapper").append(`<div class="suggess-item">検索結果がありません</div>`)
            }
        })
    })
    IndexView.doSearch((text, category) => {
        window.location.replace(`/category?keyword=${text}&tag=${category}`);
    })
    function highlight(text, inputText) {
        var index = inputText.toLowerCase().indexOf(text.toLowerCase());
       inputText = inputText.substring(0,index) + "<span class='highlight'>" + inputText.substring(index,index+text.length) + "</span>" + inputText.substring(index + text.length);
       return inputText
        
    }
    IndexView.Cart.add_to_card("Add to card", (item) => {
        console.log(item);
        var card        = localStorage.getItem("mother-card"); 
        var data_id     = item.attr("data-id");
        if (card == null || card == "") {
            localStorage.setItem("mother-card", data_id);  
        }else{
            var card_array  = card.split(",");
            hasId = card_array.includes(data_id)
            if (!hasId) {
                card_array.push(data_id) 
                localStorage.setItem("mother-card", card_array.toString()); 
            }
        } 
        IndexView.Cart.update();
    })
    init();
})();