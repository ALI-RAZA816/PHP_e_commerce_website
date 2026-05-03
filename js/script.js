document.addEventListener('DOMContentLoaded',function(){

    let cross = document.getElementsByClassName('nav-tab-cross')[0];
    let nav_bars = document.getElementsByClassName('nav-bars')[0];
    let header_nav_tab = document.getElementById('header-nav-tabs');
  
    nav_bars.addEventListener('click',function(){
        header_nav_tab.classList.add('active-menu');
        document.body.style.overflowY = 'hidden';
    });
    cross.addEventListener('click',function(){
        header_nav_tab.classList.remove('active-menu');
        document.body.style.overflowY = 'auto';
    });


    let filter_angle = document.getElementsByClassName('filter-angle')[0];
    let filter_container = document.getElementById('filter-container');
    filter_angle.addEventListener('click',function(){
       filter_angle.classList.toggle('rotate');
       filter_container.classList.toggle('expand');
    });
});