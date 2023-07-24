// header slider
let count = 1;
function showHeaderItem(id){
    document.querySelectorAll('.header-main-item').forEach((item) => {
        if(count == item.dataset.id){
            item.style.display = "block";
        } else {
            item.style.display = "none";
        }
    });
}
showHeaderItem(count);
document.querySelector('.header-left-btn').addEventListener('click', () => {
    count--;
    if(count < 1) count = 3;
    showHeaderItem(count);
});
document.querySelector('.header-right-btn').addEventListener('click', () => {
    count++;
    if(count > 3) count = 1;
    showHeaderItem(count);
});
