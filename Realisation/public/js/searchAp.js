$IdKey= $('#IdKey').val();

    $('#search').on('keyup',function(){
        $value=$(this).val();
        $.ajax({
        type : 'get',
        url : '../searchAp',
        // url : '{{URL::to('search')}}',
        data:{'key':$value,
                'id':$IdKey},
        success:function(data){
        $('#tbody').html(data);
        }
        });
        })

