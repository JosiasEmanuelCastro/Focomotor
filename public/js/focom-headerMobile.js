if ( /* Si se coloca en false se desactiva el script*/ true) {

    // El navbar mobile desaparece al scrollear la pagina hacia abajo y aparce
    // al subir (la variable filter se usa en la pagina de listado.html)

    // BEGIN 
    var filters = document.getElementById('focom-mobile-navbar-filters');
    let scrollUbication = window.pageYOffset;
    window.onscroll = function() {
        let scrollDisplacement = window.pageYOffset;
        if ((scrollUbication) >= scrollDisplacement) {
            document.getElementById('focom-mobile-navbar').style.top = '0';

            if (filters != null) {
                filters.style.top = '0';
                document.getElementById('focomFiltersCollapse').style.top = '100px';
            }
        } else {
            document.getElementById('focom-mobile-navbar').style.top = '-56.08px';

            if (filters != null) {
                filters.style.top = '-56.08px';
                document.getElementById('focomFiltersCollapse').style.top = '43.92px';
            }
        }
        scrollUbication = scrollDisplacement;
    }
    // END

    // BEGIN
    // Al presionar el icono de buscar en mobile el header
    // cambia a un input y se selecciona para escribir alli
    var iconSearch = document.getElementById('focom-nav-mobile-icon-search');
    var inputSearch = document.getElementById('focom-nav-mobile-input-search');


    iconSearch.addEventListener("click", function() {
        inputSearch.click();
    });

    inputSearch.addEventListener("click", searchMobile);

    function searchMobile() {
        document.getElementById('focom-nav-mobile-logo-search').style.display = 'none';
        document.getElementById('focom-nav-mobile-icon-search').style.display = 'none';
        document.getElementById('focom-nav-mobile').style.display = 'none';
        document.getElementById('hide-in-search').style.display = 'none';

        document.getElementById('focom-nav-arrowback').style.display = 'block';
        document.getElementById('focom-nav-mobile-input-search').style.display = 'block';

        inputSearch.focus();
    }

    var arrowBack = document.getElementById('focom-nav-arrowback');
    arrowBack.addEventListener("click", backSearch);

    function backSearch() {
        document.getElementById('focom-nav-mobile-logo-search').style.display = 'block';
        document.getElementById('focom-nav-mobile-icon-search').style.display = 'block';
        document.getElementById('focom-nav-mobile').style.display = 'block';
        document.getElementById('hide-in-search').style.display = 'block';

        document.getElementById('focom-nav-arrowback').style.display = 'none';
        document.getElementById('focom-nav-mobile-input-search').style.display = 'none';
    }
    // END

};