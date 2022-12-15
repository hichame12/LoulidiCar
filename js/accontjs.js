var MyInfo = document.getElementById('MyInfo');
var AddD = document.getElementById('AddD');
var Second_Titre = document.getElementById('Second_Titre');
var Content_Info = document.getElementById('Content_Info');
var Content_Add = document.getElementById('Content_Add');

MyInfo.addEventListener("click", F_MyInfo);
MyInfo.addEventListener("change", F_MyInfo);

AddD.addEventListener("click", F_MyInfo);
AddD.addEventListener("change", F_MyInfo);

window.addEventListener("load", F_MyInfo);

function F_MyInfo() {
    if (MyInfo.checked) {
        Second_Titre.innerHTML = "My Info Declarants";
        Content_Info.style.display = "block";
        Content_Add.style.display = "none";
        console.log('my info')
    }else if (AddD.checked) {
        Second_Titre.innerHTML = "Add New Declarant";
        Content_Info.style.display = "none";
        Content_Add.style.display = "block";
        console.log('add declarent')
    }
};

