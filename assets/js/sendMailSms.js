$(document).ready(function () {

    // Fonction pour supprimer le bloc alert-success
    function envoiSuccess() {
        $('.alert-success').fadeOut(1000, function () {
            $(this).remove();
        });

    }

    // Pour le bloc .formulaire
    $('#envoi').click(function (e) {

        // -- Bloquer la redirection du formulaire
        e.preventDefault();

        // -- Réinitialisation des erreurs
        $('.formulaire .is-invalid').removeClass('is-invalid');
        $('.formulaire .invalid-feedback').remove();

        // -- Initialisation des variables
        const nom = $('.formulaire input[name="nomForm"]');
        const email = $('.formulaire input[name="emailForm"]');
        const message = $('.formulaire textarea[name="messageForm"]');
        let errors = 0;

        // Suppresion des erreurs au click des inputs
        nom.click(function () {
            nom.keyup(function () {
                nom.removeClass('is-invalid');
            })
            $('.inv-nom').remove();
        })

        email.click(function () {
            email.keyup(function () {
                email.removeClass('is-invalid');
            })
            $('.inv-email').remove();
        })

        message.click(function () {
            message.keyup(function () {
                message.removeClass('is-invalid');
            })
            $('.inv-message').remove();
        })

        // Vérification du nom
        if (nom.val().length == 0) {
            nom.addClass('is-invalid');
            $(`
                <div class="invalid-feedback inv-nom">
                    Vous devez saisir un nom !
                </div>
            `).appendTo(nom.parent());
            errors = 1;
        }

        // Vérification du email
        if (email.val().length == 0) {
            email.addClass('is-invalid');
            $(`
                <div class="invalid-feedback inv-email">
                    Vous devez saisir un email !
                </div>
            `).appendTo(email.parent());
            errors = 1;
        }

        if (message.val().length < 10 || message.val().length > 500) {
            message.addClass('is-invalid');
            $(`
                <div class="invalid-feedback inv-message">
                    Votre message : min: 10, max: 500 !
                </div>
            `).appendTo(message.parent());
            errors = 1;
        }

        //traitement des données et retour du serveur
        if (errors == 0) {
            $.post(
                'sendFormulaire.php',
                {
                    valeurNom: nom.val(),
                    valeurEmail: email.val(),
                    valeurMessage: message.val()
                },
                function (data) {
                    if (data.success == 'failed') {
                        email.addClass('is-invalid');
                        $(`
                            <div class="invalid-feedback inv-email">
                                L'email n'est pas valide !
                            </div>
                        `).appendTo(email.parent());
                    } else {
                        $(`
                            <div class="alert alert-success">
                                Votre message a bien été envoyé !
                            </div>
                        `).hide().appendTo($('.form-group').last()).fadeIn(1000);

                        setTimeout(envoiSuccess, 5000);

                        nom.val('');
                        email.val('');
                        message.val('');
                    }
                },
                'json'
            );
        }
    });

    // Pour le bloc .formRappel côté desktop
    $('#envoyer').click(function (e) {

        // -- Bloquer la redirection du formulaire
        e.preventDefault();

        // -- Réinitialisation des erreurs
        $('.formRappel .is-invalid').removeClass('is-invalid');
        $('.formRappel .invalid-feedback').remove();

        // -- Initialisation des variables
        const nom = $('.formRappel input[name="nom"]');
        const numero = $('.formRappel input[name="numero"]');
        let errors = 0;

        // Suppresion des erreurs au click des inputs
        nom.click(function () {
            nom.keyup(function () {
                nom.removeClass('is-invalid');
            })
            $('.inv-nom').remove();
        })

        numero.click(function () {
            numero.keyup(function () {
                numero.removeClass('is-invalid');
            })
            $('.inv-numero').remove();
        })

        // Vérification du nom
        if (nom.val().length == 0) {
            nom.addClass('is-invalid');
            $(`
            <div class="invalid-feedback inv-nom">
                Vous devez saisir un nom !
            </div>
        `).appendTo(nom.parent());
            errors = 1;
        }

        // Vérification du numéro
        if (numero.val().length == 0) {
            numero.addClass('is-invalid');
            $(`
            <div class="invalid-feedback inv-numero">
                Vous devez saisir un numero !
            </div>
        `).appendTo(numero.parent());
            errors = 1;
        }

        //traitement des données et retour du serveur
        if (errors == 0) {
            $.post(
                'sendModal.php',
                {
                    modalNom: nom.val(),
                    modalNumero: numero.val()
                },
                function (data) {
                    if (data.success == 'failed') {
                        numero.addClass('is-invalid');
                        $(`
                        <div class="invalid-feedback inv-email">
                            Le numero doit comporter 10 chiffres !
                        </div>
                    `).appendTo(numero.parent());
                    } else {
                        $(`
                        <div class="alert alert-success">
                            Nous vous rappellerons dès que possible !
                        </div>
                    `).hide().appendTo($('.coordonnees').last()).fadeIn(1000);

                        setTimeout(envoiSuccess, 5000);

                        nom.val('');
                        numero.val('');
                        $('#my_modal').modal('hide');
                    }
                },
                'json'
            );
        }
    });

    // Pour le bloc .formRappel côté phone
    const modalInput = $('.formRappel input');
    const nom = $('.formRappel input[name="nom"]');
    const numero = $('.formRappel input[name="numero"]');
    let envoi = "";

    modalInput.keyup(function () {

        //-- Réinitialisation des erreurs
        $('.formRappel .is-invalid').removeClass('is-invalid');
        $('.formRappel .invalid-feedback').remove();

        // Suppresion des erreurs au click des inputs
        nom.click(function () {
            nom.keyup(function () {
                nom.removeClass('is-invalid');
            })
            $('.inv-nom').remove();
        })

        numero.click(function () {
            numero.keyup(function () {
                numero.removeClass('is-invalid');
            })
            $('.inv-numero').remove();
        })

        //traitement des données et retour du serveur
        $.post(
            'sendModalSms.php',
            {
                modalNom: nom.val(),
                modalNumero: numero.val()
            },
            function (data) {
                if (data.success == 'failed') {
                    numero.addClass('is-invalid');
                    $(`
                            <div class="invalid-feedback inv-numero">
                                `+ data.errors + `
                            </div>
                        `).appendTo(numero.parent());

                } else {
                    $("#envoyer_sms").removeClass("disabled");
                    $("#envoyer_sms").removeClass("btn-light");
                    $("#envoyer_sms").addClass("btn-warning");
                    $('#envoyer_sms').attr('href', 'sms:+33660275304?body=Merci%20de%20rappeler%0d%0aNom%20:%20' + nom.val() + '%0d%0aNuméro%20:%20' + numero.val());
                    return envoi = "success";
                }
            },
            'json'
        );
    });

    $('#envoyer_sms').click(function () {
        if (envoi == "success") {
            nom.val('');
            numero.val('');
            $("#envoyer_sms").addClass("disabled");
            $("#envoyer_sms").addClass("btn-light");
            $("#envoyer_sms").removeClass("btn-warning");
            $('#my_modal').modal('hide');
        }

    });

});