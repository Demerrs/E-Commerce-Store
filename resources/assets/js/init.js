(function (){
    'use strict';
    $(document).foundation();


    $(document).ready(function (){
        switch ($("body").data("page-id")){
            case 'home':
                break;
            case 'adminCategories' :
                ESTORE.admin.update();
                break;
            default:
                // do nothing
        }
    })


})();