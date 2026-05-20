$(document).ready(function(){
    $('#method1').on('change',function(event){
        if($(event.target === this)){
            var value = $(this).val();
            if(value  === 'stripe'){
                $('.cash-on-delivery').css("display","none");
                $('.stripe').css("display","block");
            }
        }
    })
    $('#method2').on('change',function(event){
        if($(event.target === this)){
            var value = $(this).val();
            if(value  === 'cashondelivery'){
                $('.cash-on-delivery').css("display","block");
                $('.stripe').css("display","none");
            }
        }
    });
})