document.addEventListener('DOMContentLoaded',function(){

    let filter_angle = document.getElementsByClassName('filter-angle')[0];
    let filter_container = document.getElementById('filter-container');
    filter_angle.addEventListener('click',function(){
       filter_angle.classList.toggle('rotate');
       filter_container.classList.toggle('expand');
    });
    
});