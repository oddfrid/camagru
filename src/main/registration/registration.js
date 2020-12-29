function openTab(e, cityName) {
    let tabcontent = document.getElementsByClassName("tabcontent");
    for (let i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    let tab = document.getElementsByClassName("tab");
    for (let i = 0; i < tab.length; i++) {
        tab[i].className = tab[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    e.currentTarget.className += " active";
}
document.querySelector("#defaultOpen").click();