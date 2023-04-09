// display image onclick
const changeImage = src => {
    document.getElementById('main').src = src
}

// section show/hide onclick
const targetDiv1 = document.getElementById("div1");
const single1 = document.getElementById("desc");
single1.onclick = function () {
    if (targetDiv1.style.display !== "none") {
        targetDiv1.style.display = "none";
        targetDiv2.style.display = "block";
    } else {
        targetDiv1.style.display = "block";
        targetDiv2.style.display = "none";
    }
};
const targetDiv2 = document.getElementById("div2");
const single2 = document.getElementById("incl");
single2.onclick = function () {
    if (targetDiv2.style.display !== "none") {
        targetDiv2.style.display = "none";
        targetDiv1.style.display = "block";
    } else {
        targetDiv2.style.display = "block";
        targetDiv1.style.display = "none";
    }
};
