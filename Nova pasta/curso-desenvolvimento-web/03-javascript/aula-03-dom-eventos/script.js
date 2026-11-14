let contador = 0;
const valor = document.querySelector("#valor");
document.querySelector("#somar").addEventListener("click", () => {
    contador += 1;
    valor.textContent = contador;
});
