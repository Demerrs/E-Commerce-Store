
(function () {
    'use strict';

    $(document).foundation();

    $(document).ready(function () {

        //SWITCH PAGES
        switch ($("body").data("page-id")){
            case 'home':
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