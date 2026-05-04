document.addEventListener('DOMContentLoaded',function(){

    const admin_links = document.querySelectorAll('.dashboard-links');
    admin_links.forEach(item=>{
        item.addEventListener('click',function(){
            admin_links.forEach(items=> {
                items.classList.remove('active-link');
            })
            item.classList.add('active-link');
        });
    });

    // admin_links[0].click();
})