$(function () {

    //pour afficher les différentes div définitions
    $('.competences li a').click(function (e) {
        e.preventDefault();

        let afficher = '#' + $(this).attr('href');
        let couleur = $(this).children('figure');

        $('.definitions:not(' + afficher + ')').hide();
        $(afficher).fadeIn(1000).css('display', 'flex');

        $('section figure').css('filter', 'grayscale(1)');
        $(couleur.css('filter', 'grayscale(0)'));
    });

    //pour afficher les différentes div définitions par le bouton dropdown (pour les petis écrans)
    $('.dropdown a').click(function (e) {
        e.preventDefault();

        let afficher = '#' + $(this).attr('href');

        $('.definitions:not(' + afficher + ')').hide();
        $(afficher).fadeIn(1000).css('display', 'flex');

        $('.dropdown a').removeClass('active');
        $(this).addClass('active');
    });


});