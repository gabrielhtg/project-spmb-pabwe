const garisPersyaratan = document.querySelector("#garis-persyaratan-khusus");
const garisBiaya = document.querySelector("#garis-biaya-studi");
const btnPersyaratanKhusus= document.querySelector("#btn-persyaratan-khusus");
const btnBiayaStudi = document.querySelector("#btn-biaya-studi");

function tampilkanGarisPersyaratan () {
    if (garisPersyaratan.classList.contains("bg-body-tertiary")) {
        garisPersyaratan.classList.remove("bg-body-tertiary");
        garisBiaya.classList.add("bg-body-tertiary");
    }
}

function tampilkanGarisBiaya () {
    if (garisBiaya.classList.contains("bg-body-tertiary")) {
        garisBiaya.classList.remove("bg-body-tertiary");
        garisPersyaratan.classList.add("bg-body-tertiary")
    }
}
