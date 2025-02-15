$(document).ready(function(){
    var mdl = $('#popunsur').modal({show:false});
    $(document).on('click','.popup',function(e){
        var nm = $(this).find('.nama').text();
        var jns =  $(this).find('#inpJNS').val();
        var dsc =  $(this).find('.dsc').text();
        var atmc =  $(this).find('.atomic').text();
        var mtp =  $(this).find('.mtp').text();
        var btp =  $(this).find('.btp').text();
        console.log(mtp);
        $('#namaunsur').text(nm);
        $('#lbjnsunsur').text(jns);
        $('#lbdsc').text(dsc);
        $('#atmc').text("Atomic Mass : "+atmc);
        $('#mtp').text(mtp);
        $('#btp').text(btp);
        mdl.modal('show');
    });
});