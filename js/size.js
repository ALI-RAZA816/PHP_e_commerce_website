document.addEventListener('DOMContentLoaded',function(){
    const size_input = document.querySelectorAll('.size-input');
    size_input.forEach(item=>{
        item.addEventListener('change',function(event){
            alert(event.target.value);
        })
    })
});