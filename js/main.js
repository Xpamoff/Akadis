let i = 1;

function open_menu(){
    if(i == 1){
        let menu = document.querySelector(".menu-box");
        menu.style.display = 'block';
        menu.style.pointerEvents = 'auto';
        let cont = document.querySelector(".cont");
        cont.style.filter = "brightness(40%)";
        let footer = document.querySelector("footer");
        footer.style.filter = "brightness(40%)"
        i=0;
    }
    else{
        let menu = document.querySelector(".menu-box");
        menu.style.display = 'none';
        menu.style.pointerEvents = 'none';
        let cont = document.querySelector(".cont");
        cont.style.filter = "brightness(100%)";
        let footer = document.querySelector("footer");
        footer.style.filter = "brightness(100%)"
        i=1;
    }
}