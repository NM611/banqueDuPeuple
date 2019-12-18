$(document).ready(function () {
    $('.btn').click(function (event) {
        var btnclic = $(event.target).closest('button');
        var idAsup = $(btnclic).attr('idAsup');
        alert(idAsup);
        if (idAsup){
            var confirmation = confirm("Voulez vous reellement supprimer?");
            if (confirmation){
                $.ajax({
                    url:'ajax',
                    type:"GET",
                    data:{id:idAsup},
                    success:function (data) {
                        $(btnclic).closest('tr').css("backgroundcolor","blue");
                        if (data==1){
                            $(btnclic).closest('tr').fadeOut(500);
                        }

                        
                    }
                })

            }
        }



    })

})