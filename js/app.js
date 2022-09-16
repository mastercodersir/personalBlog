const list = document.querySelectorAll('.list-m');
function activelink(){
    list.forEach((item) =>
    item.classList.remove('active-m'));
    this.classList.add('active-m');
}
list.forEach((item) => 
item.addEventListener('click',activelink)
);