$(document).ready(function() {
    $('.menu-toggle').click(function(event) {
        event.preventDefault(); // Previene la acción por defecto del enlace
        var $menuItem = $(this).closest('.menu-item');
        // Alterna la clase activa para mostrar/ocultar el submenú
        $menuItem.toggleClass('active');
        // Cierra otros menús abiertos
        $('.menu-item').not($menuItem).removeClass('active');
    });

    // Oculta el submenú si se hace clic fuera de él
    $(document).click(function(event) {
        if (!$(event.target).closest('.menu-item').length) {
            $('.menu-item').removeClass('active');
        }
    });
});

