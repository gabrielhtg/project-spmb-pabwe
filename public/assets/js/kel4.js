const garisPersyaratan = document.querySelector("#garis-persyaratan-khusus");
const garisBiaya = document.querySelector("#garis-biaya-studi");
const btnPersyaratanKhusus= document.querySelector("#btn-persyaratan-khusus");
const btnBiayaStudi = document.querySelector("#btn-biaya-studi");
const bagianPersyaratan = document.querySelector("#bagianPersyaratan");
const bagianBiaya = document.querySelector("#bagianBiaya");


function tampilkanGarisPersyaratan () {
    if (garisPersyaratan.classList.contains("bg-body-tertiary")) {
        garisPersyaratan.classList.remove("bg-body-tertiary");
        garisBiaya.classList.add("bg-body-tertiary");
        bagianBiaya.classList.add("d-none");
        bagianPersyaratan.classList.remove("d-none");
    }
}

function tampilkanGarisBiaya () {
    if (garisBiaya.classList.contains("bg-body-tertiary")) {
        garisBiaya.classList.remove("bg-body-tertiary");
        garisPersyaratan.classList.add("bg-body-tertiary");
        bagianBiaya.classList.remove("d-none");
        bagianPersyaratan.classList.add("d-none");
    }
}
