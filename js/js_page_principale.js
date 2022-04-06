var row_cache = true;
var affichage_complet = false;
var nb_colonnes_img = 12;
var nb_pages = 2;
var nb_zones;
initialisation_maquette(nb_pages);

$("#double-page").click(function () {
    $(".page").addClass("bg-selected");
    $(".page").removeClass("bg-default");
    $(".one-page").addClass("bg-default");
    $(".one-page").removeClass("bg-selected");
    nb_pages = 2;
    initialisation_maquette(nb_pages,nb_zones);
})

$("#simple-page").click(function () {
    $(".one-page").addClass("bg-selected");
    $(".one-page").removeClass("bg-default");
    $(".page").addClass("bg-default");
    $(".page").removeClass("bg-selected");
    nb_pages = 1;
    initialisation_maquette(nb_pages,nb_zones);
})

$("#case_plus").click(function () {
    if (row_cache === true) {
        $("#row_case_plus").addClass("d-flex justify-content-around");
        $("#row_case_plus").removeClass("d-none");
        $("#icon-circle").replaceWith("<i id='icon-circle' class='bi bi-dash-circle'></i>");
        $("#scroll-bar-img").css("height", "50vh");
        row_cache = false;
    } else {
        $("#row_case_plus").removeClass("d-flex justify-content-around");
        $("#row_case_plus").addClass("d-none");
        $("#icon-circle").replaceWith("<i id='icon-circle' class='bi bi-plus-circle'></i>");
        $("#scroll-bar-img").css("height", "63vh");
        row_cache = true;
    }
});

$("#affichage_complet").click(function () {
    if (affichage_complet === true) {
        $("#colonne_left").removeClass("d-none");
        $("#colonne_left").addClass("col-4");
        $("#colonne_right").removeClass("col-12");
        $("#colonne_right").addClass("col-8");
        $("#circle-arrow").replaceWith("<i id='circle-arrow' class='bi bi-arrow-left-circle'></i>");
        affichage_complet = false;
    } else {
        $("#colonne_left").addClass("d-none");
        $("#colonne_left").removeClass("col-4");
        $("#colonne_right").removeClass("col-8");
        $("#colonne_right").addClass("col-12");
        $("#circle-arrow").replaceWith("<i id='circle-arrow' class='bi bi-arrow-right-circle'></i>");
        affichage_complet = true;
    }
});

$("#btn-zoom").click(function () {
    if (nb_colonnes_img === 12) {
        $(".zoom").addClass("col-3");
        $(".zoom").removeClass("col-1");
        $("#icon-zoom").replaceWith('<i id="icon-zoom" class="bi bi-zoom-in"></i>');
        nb_colonnes_img = 4;
    } else if (nb_colonnes_img === 4) {
        $(".zoom").addClass("col-2");
        $(".zoom").removeClass("col-3");
        nb_colonnes_img = 6;
    } else {
        $(".zoom").addClass("col-1");
        $(".zoom").removeClass("col-2");
        $("#icon-zoom").replaceWith('<i id="icon-zoom" class="bi bi-zoom-out"></i>');
        nb_colonnes_img = 12;
    }
});

// ! --------------------------------------------------------------------------------------------------
// ! INITIALISATION DE LA LISTE DU NOMBRE DE PHOTOS
// ! --------------------------------------------------------------------------------------------------

$.ajax({
    url: '../traitements/page_principale/select_nb_photos.php',
    dataType: 'json',
    async: false,
    success: function (data) {
        $('#nb_photos').html(data.HTML);
    }
});

$('#nb_photos').change(function() {
    nb_zones = $('#nb_photos').val();
    initialisation_maquette(nb_pages,nb_zones);
});

// ! --------------------------------------------------------------------------------------------------
// ! INITIALISATION DE LA LISTE DES MAQUETTES
// ! --------------------------------------------------------------------------------------------------

function initialisation_maquette($nbPages, $nbZones = 0) {
    $.ajax({
        url: '../traitements/page_principale/initialisation_maquette.php',
        dataType: 'json',
        data: {'nbPages' : $nbPages, 'nbZones' : $nbZones},
        async: false,
        success: function (data) {
            $('#liste-maquette').html(data.HTML);
        }
    });
};

$('.test2').click(function(){
    var img = $(this).attr('id');
    var code_html = "<img class='border rounded' src='../ressources/maquettes/jpg/" + img + ".jpg'>";
    $('#maquette-choisi').html(code_html);
});
