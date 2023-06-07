const Api = {
    Ingredient: {},  
    Tool: {},   
    Kitchen: {},   
    Food: {},   

    Image: {},
    
};
(() => {
    $.ajaxSetup({
        headers: { 
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr('content'),
        },
        crossDomain: true
    });
})();

//Ingredient
(() => {
    Api.Ingredient.GetAll = () => $.ajax({
        url: `/apip/ingredient/get`,
        method: 'GET',
    }); 
    Api.Ingredient.Store = (data) => $.ajax({
        url: `/apip/ingredient/store`,
        method: 'POST',
        data: data,
        contentType: false,
        processData: false,
    });
    Api.Ingredient.getOne = (id) => $.ajax({
        url: `/apip/ingredient/get-one/${id}`,
        method: 'GET',
    });
    Api.Ingredient.Update = (data) => $.ajax({
        url: `/apip/ingredient/update`,
        method: 'POST',
        data: data,
        contentType: false,
        processData: false,
    }); 
    Api.Ingredient.Delete = (id) => $.ajax({
        url: `/apip/ingredient/delete/${id}`,
        method: 'GET',
    });
})(); 

//Tool
(() => {
    Api.Tool.GetAll = () => $.ajax({
        url: `/apip/tool/get`,
        method: 'GET',
    }); 
    Api.Tool.Store = (data) => $.ajax({
        url: `/apip/tool/store`,
        method: 'POST',
        data: data,
        contentType: false,
        processData: false,
    });
    Api.Tool.getOne = (id) => $.ajax({
        url: `/apip/tool/get-one/${id}`,
        method: 'GET',
    });
    Api.Tool.Update = (data) => $.ajax({
        url: `/apip/tool/update`,
        method: 'POST',
        data: data,
        contentType: false,
        processData: false,
    }); 
    Api.Tool.Delete = (id) => $.ajax({
        url: `/apip/tool/delete/${id}`,
        method: 'GET',
    });
})(); 

//Kitchen
(() => {
    Api.Kitchen.GetAll = () => $.ajax({
        url: `/apip/kitchen/get`,
        method: 'GET',
    }); 
    Api.Kitchen.Store = (data) => $.ajax({
        url: `/apip/kitchen/store`,
        method: 'POST',
        data: data,
        contentType: false,
        processData: false,
    });
    Api.Kitchen.getOne = (id) => $.ajax({
        url: `/apip/kitchen/get-one/${id}`,
        method: 'GET',
    });
    Api.Kitchen.Update = (data) => $.ajax({
        url: `/apip/kitchen/update`,
        method: 'POST',
        data: data,
        contentType: false,
        processData: false,
    }); 
    Api.Kitchen.Delete = (id) => $.ajax({
        url: `/apip/kitchen/delete/${id}`,
        method: 'GET',
    });
})(); 

//Food
(() => {
    Api.Food.GetAll = () => $.ajax({
        url: `/apip/food/get`,
        method: 'GET',
    }); 
    Api.Food.Store = (data) => $.ajax({
        url: `/apip/food/store`,
        method: 'POST',
        data: data,
        contentType: false,
        processData: false,
    });
    Api.Food.getOne = (id) => $.ajax({
        url: `/apip/food/get-one/${id}`,
        method: 'GET',
    });
    Api.Food.Update = (data) => $.ajax({
        url: `/apip/food/update`,
        method: 'POST',
        data: data,
        contentType: false,
        processData: false,
    }); 
    Api.Food.Delete = (id) => $.ajax({
        url: `/apip/food/delete/${id}`,
        method: 'GET',
    });
})(); 
 

// Image
(() => {
    Api.Image.Create = (data) => $.ajax({
        url: `/apip/post-image`,
        method: 'POST',
        data: data,
        contentType: false,
        processData: false,
    });
})();
