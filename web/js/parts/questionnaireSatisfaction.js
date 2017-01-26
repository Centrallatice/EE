$(document).ready(function(){
    var i=1;
    $('.carousel.carousel-slider').carousel({
        full_width: true,
        no_wrap: false,
        indicators: false
    });
    $('#btn-slider').on("click",function(){
        var error = false;
        if(i<4){
            if(i==1){
                if($('#elevebundle_questionnairesatisfaction_periodeDebut').val().length==0 || $('#elevebundle_questionnairesatisfaction_periodeFin').val().length==0){
                    $('#elevebundle_questionnairesatisfaction_periodeDebut').parent().parent().addClass("error-not-filled");
                    error = true;
                }
                else{
                    $('#elevebundle_questionnairesatisfaction_periodeDebut').parent().parent().removeClass("error-not-filled");
                }
                if($('#elevebundle_questionnairesatisfaction_dureeFormation').val().length==0){
                    $('#elevebundle_questionnairesatisfaction_dureeFormation').parent().parent().addClass("error-not-filled");
                    error = true;
                }
                else{
                    $('#elevebundle_questionnairesatisfaction_dureeFormation').parent().parent().removeClass("error-not-filled");
                }
            }
            $('.carousel-item:nth-child('+i+') .radio-container').each(function(){
               var checked="-1";
               var textAreaToFilled=false;
               $(this).find('input[type=radio]:checked').each(function(){
                   checked=$(this).val();
                   if($(this).val()<3){
                       textAreaToFilled=true;
                   }
               });
               if(checked=="-1"){
                   $(this).addClass("error-not-filled");
                   $(this).find(".errorInfo").remove();
                   $('<span class="errorInfo"> *<small>Ce champ est obligatoire</small></span>').appendTo($(this).find("label:first-child"));
                   error = true;
               }
               else{
                   $(this).removeClass("error-not-filled");
                   $(this).find("errorInfo").remove();
               }
               if(!error){
                    if(textAreaToFilled){
                        if($('.carousel-item:nth-child('+i+') .containerTextarea textarea').val().length==0){
                            error = true;
                            $('.carousel-item:nth-child('+i+') .containerTextarea textarea').focus();
                            $('.carousel-item:nth-child('+i+') .containerTextarea').addClass("error-not-filled");
                            $('.carousel-item:nth-child('+i+') .containerTextarea').find(".errorInfo").remove();
                            $('<span class="errorInfo"> *<small>Merci d\'indiquer ci-dessous la raison de votre mécontentement</small></span>').appendTo($('.carousel-item:nth-child('+i+') .containerTextarea label'));
                        }else{
                            $(this).removeClass("error-not-filled");
                            $('.carousel-item:nth-child('+i+') .containerTextarea').find(".errorInfo").remove();
                        }
                    }
                    else{
                        $(this).removeClass("error-not-filled");
                        $(this).find("errorInfo").remove();
                    }
               }
               else{
                   $('.carousel').carousel('set', i-1);
               }
            });
        }
        console.log(i);
        if(!error){
           i++;
           
           if(i>=5){
                i--;
                var lastError=false;
                if(typeof $('div#elevebundle_questionnairesatisfaction_aProposNouveauAppel input[type=radio]:checked').val()=="undefined"){
                    lastError=true;
                    $('div#elevebundle_questionnairesatisfaction_aProposNouveauAppel').parent().addClass("error-not-filled");
                }
                else{
                    $('div#elevebundle_questionnairesatisfaction_aProposNouveauAppel').parent().removeClass("error-not-filled");
                    if($('div#elevebundle_questionnairesatisfaction_aProposNouveauAppel input[type=radio]:checked').val()==0 && $('#elevebundle_questionnairesatisfaction_aProposNouveauAppelComm').val()==""){
                        $('#elevebundle_questionnairesatisfaction_aProposNouveauAppelComm').parent().addClass("error-not-filled");
                        $('<span class="errorInfo"> *<small>Merci d\'indiquer ci-dessous la raison de votre mécontentement</small></span>').appendTo($('#elevebundle_questionnairesatisfaction_aProposNouveauAppelComm').parent().find("label"));
                        lastError=true;
                    }else{
                        $('#elevebundle_questionnairesatisfaction_aProposNouveauAppelComm').parent().removeClass("error-not-filled");
                        $('#elevebundle_questionnairesatisfaction_aProposNouveauAppelComm').parent().find(".errorInfo").remove();
                    }
                }
                if(typeof $('div#elevebundle_questionnairesatisfaction_aProposRecommandation input[type=radio]:checked').val()=="undefined"){
                    lastError=true;
                    $('div#elevebundle_questionnairesatisfaction_aProposRecommandation').parent().addClass("error-not-filled");
                }
                else{
                    $('div#elevebundle_questionnairesatisfaction_aProposRecommandation').parent().removeClass("error-not-filled");
                    if($('div#elevebundle_questionnairesatisfaction_aProposRecommandation input[type=radio]:checked').val()==0 && $('#elevebundle_questionnairesatisfaction_aProposRecommandationComm').val()==""){
                        lastError=true;
                        $('#elevebundle_questionnairesatisfaction_aProposRecommandationComm').parent().addClass("error-not-filled");
                        $('<span class="errorInfo"> *<small>Merci d\'indiquer ci-dessous la raison de votre mécontentement</small></span>').appendTo($('#elevebundle_questionnairesatisfaction_aProposRecommandationComm').parent().find("label"));
                    }else{
                        $('#elevebundle_questionnairesatisfaction_aProposRecommandationComm').parent().removeClass("error-not-filled");
                        $('#elevebundle_questionnairesatisfaction_aProposRecommandationComm').parent().find(".errorInfo").remove();
                    }
                }

                if(!lastError){
                     $('#btn-slider').off("click");
                     $('#btn-slider').attr("type","submit");
                     $('#btn-slider').on("click",function(){
                         $('form[name=elevebundle_questionnairesatisfaction]').submit();
                     });
                }
            }else{
                $('.carousel.carousel-slider').carousel('next');
            }
        }
    });
});