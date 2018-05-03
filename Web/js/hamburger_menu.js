// Menu hamburger pour smartphones et tablettes

menu = {
    hamburger: $(".fa-bars"),
    croix: $(".fa-times"),
    liste: $(".list_menu"),

    init: function () {
        
        menu.hamburger.on("click", function () {
            menu.hamburger.hide();
            menu.croix.show();
        });
        menu.croix.on("click", function () {
            
            menu.croix.hide();
            menu.hamburger.show();
        });
    }
}

// appel de la méthode init sur l'objet menu
menu.init();
