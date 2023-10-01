import home from "../pages/home/index.js";
import about from "../pages/about/index.js";
import contact from "../pages/contact/index.js";

const main = document.querySelector("#root");

const init = () => {
    window.addEventListener("hashchange", () => {
        main.innerHTML = "";
        switch (window.location.hash) {
            case "#home":
                main.appendChild(home());
                break;
            case "#about":
                main.appendChild(about());
                break;
            case "#contact":
                main.appendChild(contact());
                break;
            default:
                main.appendChild(home());
        }
    })

}

window.addEventListener("load", () => {
    main.appendChild(home());
    init();
})

'use strict'
let photo = document.getElementById('imgPhoto');
let file = document.getElementById('flImage');

photo.addEventListener('click',() => {
    file.click();
})
file.addEventListener('change', (e) => {
    let reader = new FileReader();
    if(file.files.length <= 0){
        return;
    }

    reader.onload = () =>{
        photo.src = reader.result;
    }
    reader.readAsDataURL(file.files[0]);
})