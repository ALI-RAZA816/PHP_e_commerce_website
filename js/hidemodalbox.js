$(document).ready(function(){
    $('.otp-form').on('click',function(event){
        if (event.target === this) {
            $(this).addClass('hide'); // or .css('display', 'none')
        }
    })
})