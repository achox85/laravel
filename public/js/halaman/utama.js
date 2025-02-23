$(document).ready(function(){
    var mdl = $('#popunsur').modal({show:false});
    $(document).on('click','.popup',function(e){
        var nm = $(this).find('.nama').text();
        var jns =  $(this).find('#inpJNS').val();
        var dsc =  $(this).find('.dsc').text();
        var atmc =  $(this).find('.atomic').text();
        var mtp =  $(this).find('.mtp').text();
        var btp =  $(this).find('.btp').text();
        var nmr =  $(this).find('.nomor').text();
        var sb =  $(this).find('.simbol').text();
        var nks =  $(this).parents('.kotakunsur').css('backgroundColor');

        $('#namaunsur').text(nm);
        $('#lbjnsunsur').text(jns);
        $('#lbdsc').text(dsc);
        $('#atmc').text("Atomic Mass : "+atmc);
        $('#mtp').text(mtp);
        $('#btp').text(btp);
        $('.nmr').text(nmr);
        $('.kode').text(sb);
        $('.big-unsur .nama').text(nm);
        $('.big-unsur').css('backgroundColor',nks);
        mdl.modal('show');
    });
});