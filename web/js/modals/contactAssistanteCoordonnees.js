$(document).ready(function(){
    $('form[name=elevebundle_updatecoordonnees]').on('submit', function(e) {
        e.preventDefault();
        $('.modal-footer').find("button[type=submit]").hide();
        $('<div class="col s12 m6 offset-m6"><div class="progress"><div class="indeterminate"></div></div></div>').appendTo('.modal-footer');
        var $this = $(this);
        $.ajax({
            url: $this.attr('action'), // Le nom du fichier indiqué dans le formulaire
            type: $this.attr('method'), // La méthode indiquée dans le formulaire (get ou post)
            data: $this.serialize(), // Je sérialise les données (j'envoie toutes les valeurs présentes dans le formulaire)
            dataType: 'json', // JSON
            success: function(json) {
                if(json.success==1) {
                    $('.modal').modal('close');
                    $('.modal-footer').find("button[type=submit]").show();
                    $('.modal-footer').find(".progress").parent().remove();
                    var $toastContent = $('<span>Votre message a bien été envoyé !</span>');
                    Materialize.toast($toastContent, 5000,'rounded green');
                } else {
                    $('.modal-footer').find("button[type=submit]").show();
                    $('.modal-footer').find(".progress").parent().remove();
                    var $toastContent = $('<span>Une erreur est survenue lors de l\'envoi du message!</span>');
                    Materialize.toast($toastContent, 5000,'rounded red');
                }
            }
        });
        
    });
    
});