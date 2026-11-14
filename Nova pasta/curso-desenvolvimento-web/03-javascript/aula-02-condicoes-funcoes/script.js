function situacao(nota) {
    if (nota >= 7) {
        return "Aprovado";
    }
    return "Continuar estudando";
}
const notas = [8, 5, 9];
for (const nota of notas) {
    const item = document.createElement("li");
    item.textContent = `${nota}: ${situacao(nota)}`;
    document.querySelector("#notas").append(item);
}
