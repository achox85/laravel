$(document).ready(function(){
    var mdl=$('#mdlpilih').modal({show:false});
    $('#trigger').on('click', function(){
        mdl.modal('show');
    });

    $('#btnpilih').on('click', function(){
        let pil=$('#cbunsur');
        let terpilih=pil.find('option:selected');
        tambahunsur(terpilih);
        sugesti();
        mdl.modal('hide');

    });


    $(document).on('click', '.linkdel', function(){
        $(this).parents('.kotakunsur').remove();
        sugesti();
    });

    $(document).on('click', '.pt1', function(){
        let elm = $(this);
        loadsenyawa(elm);
    });
});

function tambahunsur(data){
    let no = data.val();
    let code = data.attr('data-code');
    let nama = data.attr('data-nama');
    let kelas = data.attr('kelas');

    let tpl = $('#tpl').text();
    let template = tpl.replace('%%nama%%', nama);
    template = template.replace('%%simbol%%', code);
    template = template.replace('%%nomor%%', no);
    template = template.replace('%%namakelas%%', kelas);
    template = template.replace('%%id%%', no);
    template = $(template);

    let currentunsur = $('.pilihan').find('.kotakunsur');
    if(currentunsur.length>0){
        let itm = $(currentunsur).last();
        itm.after(template);
    }else{
        $('.pilihan').prepend(template);
    }

};

function sugesti(){
    let ids = $('.pilihan .kotakunsur');
    let sid = [];
    if(ids.length>0){
        for(var i=0;i<ids.length;i++){
            let obj = $(ids[i]).attr("dataid");
                sid.push(obj);
        }
    }
    
    var token = $("[name='csrf-token']").attr('content');

    $.ajax({
        url: "/sugesti", 
        type: "POST", 
        data: {'id':sid,"_token":token},
        success: function(response) {
          parsing(response.data);
        },
        error: function() {
            alert("An error occurred while fetching data.");
        }
    });
}

function parsing(rsp){
    $('.b1').html('');
   if(rsp.length>0){
  
    var str = '';
    for(var i=0;i<rsp.length;i++){
        let data = rsp[i];
        str += '<div class="pt1" dataid="'+data.id+'"><div class="snyw">'+data.kode+'</div><div class="elmt">'+data.elemen+'</div></div>';
    }
    $('.b1').append(str);
   }
}

function loadsenyawa(elm){
    let id = elm.attr('dataid');
    var token = $("[name='csrf-token']").attr('content');
    $.ajax({
        url: "/load/senyawa", 
        type: "POST", 
        data: {'id':id,"_token":token},
        success: function(response) {
          cetak(response.hasil);
          displayhasil(response.senyawa);
        },
        error: function() {
            alert("An error occurred while fetching data.");
        }
    });
}

function cetak(data){
    console.log(data);
    var box = '';
    $('.pilihan').find('.kotakunsur').remove();
    if(data.length>0){
        for(var x=0;x<data.length;x++){
            let uns = data[x];
            cetakbox(uns);
        }
    }
}

function cetakbox(data){
    let tpl = $('#tpl').text();
    let template = tpl.replace('%%nama%%', data.nama);
    template = template.replace('%%simbol%%', data.code);
    template = template.replace('%%nomor%%', data.no);
    template = template.replace('%%namakelas%%', data.namakelas);
    template = template.replace('%%id%%', data.no);
    template = $(template);
    let currentunsur = $('.pilihan').find('.kotakunsur');
    if(currentunsur.length>0){
        let itm = $(currentunsur).last();
        itm.after(template);
    }else{
        $('.pilihan').prepend(template);
    }
}

function displayhasil(r){
    console.log(r);
    $('.clscode').text(r.kode);
    $('.clsketerangan').text(r.keterangan);
    $('.big-unsur .nama').text(r.elemen);
    $('.big-unsur .kode').text(r.kode);
}