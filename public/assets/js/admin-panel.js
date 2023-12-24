const sidebarBesar = document.querySelector("#sidebar_besar");
const sidebarKecil = document.querySelector("#sidebar_kecil");
const geserKecil = document.querySelector("#geser_kecil");
const geserBesar = document.querySelector("#geser_besar");
const logoSidebar = document.querySelector("#logo_sidebar");
const dnone = "d-none";

function tampilkanSidebar () {
    if (sessionStorage.getItem('sidebarActive') === '0') {
        sidebarBesar.classList.remove(dnone);
        geserKecil.classList.add(dnone);
        geserBesar.classList.remove(dnone);
        logoSidebar.classList.remove("fa-bars");
        logoSidebar.classList.add("fa-xmark");
        sidebarKecil.classList.add(dnone);
        sessionStorage.setItem('sidebarActive', '1');
    }

    else {
        sidebarBesar.classList.add(dnone);
        sidebarKecil.classList.remove(dnone);
        geserKecil.classList.remove(dnone);
        geserBesar.classList.add(dnone);
        logoSidebar.classList.add("fa-bars");
        logoSidebar.classList.remove("fa-xmark");
        sessionStorage.setItem('sidebarActive', '0');
    }
}

if (sessionStorage.getItem('sidebarActive') === '1') {
    sidebarBesar.classList.remove(dnone);
    geserKecil.classList.add(dnone);
    geserBesar.classList.remove(dnone);
    logoSidebar.classList.remove("fa-bars");
    logoSidebar.classList.add("fa-xmark");
    sidebarKecil.classList.add(dnone);
    sessionStorage.setItem('sidebarActive', '1');
}

else {
    sidebarBesar.classList.add(dnone);
    sidebarKecil.classList.remove(dnone);
    geserKecil.classList.remove(dnone);
    geserBesar.classList.add(dnone);
    logoSidebar.classList.add("fa-bars");
    logoSidebar.classList.remove("fa-xmark");
    sessionStorage.setItem('sidebarActive', '0');
}
