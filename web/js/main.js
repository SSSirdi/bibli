$("document").ready(function(){
    $(".name").keyup(function() {
        if ( $(this).val().length === 5 ){
            console.log('ok ok ok');
            $.ajax({
               type: 'get',
                //url: Routing.generate('test', { aut: $(this).val() }),
                url: 'http://localhost/bibli/web/app_dev.php/test/'+$(this).val(),
                    beforeSend: function(){
                    console.log('ca charge !');
                },
                success : function(data) {
                    $(".car").val(data.pays);
                    console.log('pays ok');
                    alert(data.pays);
                }

            });
        }else
        $(".car").val('');
    });
})

$().ready(function(){
    $("#appbundle_livre_isbn13").keyup(function(){
        if ($(this).val().length === 13){
            $.ajax({
                type: 'get',
                //url: Routing.generate('isbnsearch', { isbn: $(this).val() }),
                url: 'http://localhost/bibli/web/app_dev.php/Isbn-Search/'+$(this).val(),
                beforeSend: function(){
                    console.log('cest en cours');
                },
                success : function(data) {
                    $("#appbundle_livre_isbn10").val(data.infos.isbn10);
                    $("#appbundle_livre_titre").val(data.infos.titre);
                    $("#appbundle_livre_description").val(data.infos.description);
                    $("#appbundle_livre_nbpage").val(data.infos.pages);
                    $("#appbundle_livre_langue").val(data.infos.langue);
                    $("#appbundle_livre_lienImage").val(data.infos.image);
                    $("#appbundle_livre_auteur").val(data.infos.auteur);
                    //$("#appbundle_livre_editeur").val(data.infos.editeur);

                    console.log('cest fait ');
                    console.log(data.infos.auteur);

                }
            });
        }
    });
})