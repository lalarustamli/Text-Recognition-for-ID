var cameras = new Array();

navigator.mediaDevices.enumerateDevices()
    .then(function(devices) {
        devices.forEach(function(device) {
            var i = 0;
            if(device.kind === "videoinput"){
                cameras[i] = device.deviceId;
                i++;
            }
        });
    });
$('.open').click(function () {
    Webcam.set({
        width: 555,
        height: 320,
        image_format: 'jpeg',
        jpeg_quality: 200,
        sourceId: cameras[1]
    });

    console.log(cameras[0]);
    Webcam.attach('.video');
    $('.camera').find('img').css('display','none');
    $('.top,.bottom').css('display','block');
    $(this).replaceWith('<button type="button" class="btn take_snapshot yellow_btn">Şəkil çək</button>');
    $('.info').show();
    snapShot();
    info();
});

function info(){
    $('.take_snapshot').click(function () {
        var $info = $('.info');
        if ($info.text() === "Ön hissəni çəkin"){
            $info.text("Arxa hissəni çəkin");
        }
        else {
            $info.text("Ön hissəni çəkin");
            $info.hide();
        }
        $('.ok').removeAttr('disabled');
    });
}

info();

function snapShot(){
    $('.take_snapshot').click(function () {
        Webcam.snap( function(data_uri) {
            if($('#results').find('img').length !== 1){
Webcam.upload( data_uri, 'upload.php', function(code, filename) {
                                             $('#results').append('<div class="col-md-6 col-sm-6"><img src="'+data_uri+'" class="img-responsive"><input type="hidden" value="'+filename+'" name="front"></div>');
                                });
                
            }
            if($('#results').find('img').length === 1){
                $('.video').remove();
                $('.top,.bottom').hide();
                //$('#results .col-md-6:last-child').find('input[type=hidden]').attr('name','back');
                
Webcam.upload( data_uri, 'upload.php', function(code, filename) {
                                             $('#results').append('<div class="col-md-6 col-sm-6"><img src="'+data_uri+'" class="img-responsive"><input type="hidden" value="'+filename+'" name="back"></div>');

Webcam.reset();
});
            }
        });
    });
}

snapShot();

$(".edit").click(function() {
id=$(this).attr('data-id');
    var columnHeadings = $("thead th").map(function() {
        return $(this).text();
    }).get();
    columnHeadings.pop();
    var columnValues = $(this).parent().siblings().map(function() {
        return $(this).text();
    }).get();
    var modalBody = $('<div id="modalContent"></div>');
    var modalForm = $('<form role="form" id="edform" dname="modalForm" action="editinfo.php?id='+id+'" method="post"></form>');
    $.each(columnHeadings, function(i, columnHeader) {
        var formGroup = $('<div class="form-group"></div>');
        formGroup.append('<div class="row"><label for="'+columnHeader+'" class="col-md-3 col-sm-3">'+columnHeader+':</label><div class="col-md-9 col-sm-9"><input class="form-control" name="'+columnHeader+'" id="'+columnHeader+i+'" value="'+columnValues[i]+'"></div></div>');
        modalForm.append(formGroup);
    });
    modalBody.append(modalForm);
    $('#editModal .modal-body').html(modalBody);
$('#subform').click(function(){
	$('#edform').submit();
});
});
