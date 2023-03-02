$(function(){
    var transport = $('#transportation-category');
 
    // on change province
    transport.on('change', function(){
        var transport_id = $(this).val();
 
 
        $.get("/managementTransport-edit/"+transport_id, function(data){
            var result = JSON.parse(data);
            $.each(result, function(index, item){
                transport.append(
                    $('<option></option>').val(item.id).html(item.transport_name)
                );
            });
        });
    });
 
    // on change amphure
    amphureObject.on('change', function(){
        var amphureId = $(this).val();
 
        districtObject.html('<option value="">เลือกตำบล</option>');
        
        $.get('get_district.php?amphure_id=' + amphureId, function(data){
            var result = JSON.parse(data);
            $.each(result, function(index, item){
                districtObject.append(
                    $('<option></option>').val(item.id).html(item.name_th)
                );
            });
        });
    });
});