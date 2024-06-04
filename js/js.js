var album=[];
for(var i=0;i<3;i++){
    album[i]=new Image();
    album[i].src="./img/anh"+i+".jpg";
}
 var interval=setInterval(slideshow,10000);
index=0;
function slideshow(){
    index++;
    if(index>3){
        index=0;
    }
    document.getElementById("banner").src=album[index].src;
   
    
}
function next(){
    index++;
    if(index>3){
        index=0;
    }
    document.getElementById("banner").src=album[index].src;
   
}
function pre(){
    index--;
    if(index<0){
        index=3;
    }
    document.getElementById("banner").src=album[index].src;
   
}
// ------------list----------
let thisPage = 1;
let limit = 9;
let list = document.querySelectorAll('.list .item');

function loadItem() {
    let beginGet = limit * (thisPage - 1);
    let endGet = limit * thisPage - 1;

    list.forEach((item, key) => {
        if (key >= beginGet && key <= endGet) {
            item.style.display = 'block';
        } else {
            item.style.display = 'none';
        }
    });

    listPage();
}

loadItem();

function listPage() {
    let count = Math.ceil(list.length / limit);
    let paginationContainer = document.querySelector('.listPage');
    paginationContainer.innerHTML = '';

    if (thisPage > 1) {
        let prev = document.createElement('li');
        prev.innerText = 'PREV';
        prev.setAttribute('onclick', "changePage(" + (thisPage - 1) + ")");
        paginationContainer.appendChild(prev);
    }

    for (let i = 1; i <= count; i++) {
        let newPage = document.createElement('li');
        newPage.innerText = i;
        if (i === thisPage) {
            newPage.classList.add('active');
        }
        newPage.setAttribute('onclick', "changePage(" + i + ")");
        paginationContainer.appendChild(newPage);
    }

    if (thisPage < count) {
        let next = document.createElement('li');
        next.innerText = 'NEXT';
        next.setAttribute('onclick', "changePage(" + (thisPage + 1) + ")");
        paginationContainer.appendChild(next);
    }
}

function changePage(i) {
    thisPage = i;
    loadItem();
}
//-----------new------------
let thisPagenew = 1;
let limitnew = 8;
let listnew = document.querySelectorAll('.content .content-look');

function loadItemnew() {
    let beginGet = limitnew * (thisPagenew - 1);
    let endGet = limitnew * thisPagenew - 1;

    listnew.forEach((item, key) => {
        if (key >= beginGet && key <= endGet) {
            item.style.display = 'block';
        } else {
            item.style.display = 'none';
        }
    });

    listPagenew();
}

loadItemnew();

function listPagenew() {
    let count = Math.ceil(listnew.length / limitnew);
    let paginationContainer = document.querySelector('.listPagenew');
    paginationContainer.innerHTML = '';

    if (thisPagenew > 1) {
        let prev = document.createElement('li');
        prev.innerText = 'PREV';
        prev.setAttribute('onclick', "changePagenew(" + (thisPagenew - 1) + ")");
        paginationContainer.appendChild(prev);
    }

    for (let i = 1; i <= count; i++) {
        let newPage = document.createElement('li');
        newPage.innerText = i;
        if (i === thisPagenew) {
            newPage.classList.add('active');
        }
        newPage.setAttribute('onclick', "changePagenew(" + i + ")");
        paginationContainer.appendChild(newPage);
    }

    if (thisPagenew < count) {
        let next = document.createElement('li');
        next.innerText = 'NEXT';
        next.setAttribute('onclick', "changePagenew(" + (thisPagenew + 1) + ")");
        paginationContainer.appendChild(next);
    }
}

function changePagenew(i) {
    thisPagenew = i;
    loadItemnew();
}





