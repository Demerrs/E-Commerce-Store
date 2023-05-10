
(function () {
    'use strict';

    $(document).foundation();

    $(document).ready(function () {

        //SWITCH PAGES
        switch ($("body").data("page-id")){
            case 'home':
                ESTORE.homeslider.initCarousel();
                ESTORE.homeslider.homePageProducts();
                break;
            case 'product':
                ESTORE.product.details();
                break;
            case 'adminProduct':
                ESTORE.admin.changeEvent();
                ESTORE.admin.delete();
                break;
            case 'adminCategories':
                ESTORE.admin.update();
                ESTORE.admin.delete();
                ESTORE.admin.create();
                break;
            default:
            //do nothing
        }
    })

})();