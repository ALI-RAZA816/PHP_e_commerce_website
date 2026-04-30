document.addEventListener('DOMContentLoaded',function(){


    let cross = document.getElementsByClassName('nav-tab-cross')[0];
    let nav_bars = document.getElementsByClassName('nav-bars')[0];
    let header_nav_tab = document.getElementById('header-nav-tabs');
  
    nav_bars.addEventListener('click',function(){
        header_nav_tab.classList.add('active-menu');
    });
    cross.addEventListener('click',function(){
        header_nav_tab.classList.remove('active-menu');
    });
})