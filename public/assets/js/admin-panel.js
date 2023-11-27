// const tombolSidebar = document.querySelector("#tombol_sidebar");
const sidebarBesar = document.querySelector("#sidebar_besar");
const sidebarKecil = document.querySelector("#sidebar_kecil");
const logoSidebar = document.querySelector("#logo_sidebar");
const dnone = "d-none";

function tampilkanSidebar () {
    if (sidebarBesar.classList.contains("d-none")) {
        sidebarBesar.classList.remove(dnone);
        logoSidebar.classList.remove("fa-bars");
        logoSidebar.classList.add("fa-xmark");
        sidebarKecil.classList.add(dnone);
    }

    else {
        sidebarBesar.classList.add(dnone);
        sidebarKecil.classList.remove(dnone);
        logoSidebar.classList.add("fa-bars");
        logoSidebar.classList.remove("fa-xmark");
    }
}
