const chave = "curso-web-tarefas";
const aviso = document.querySelector("#aviso");
let tarefas = [];
try {
    const dados = JSON.parse(localStorage.getItem(chave) || "[]");
    if (Array.isArray(dados)) tarefas = dados.filter(item => typeof item === "string");
}
catch {
    aviso.textContent = "Não foi possível recuperar as tarefas.";
}
function renderizar() {
    document.querySelector("#lista").replaceChildren();
    for (const tarefa of tarefas) {
        const item = document.createElement("li");
        item.textContent = tarefa;
        document.querySelector("#lista").append(item);
    }
}
document.querySelector("#formulario").addEventListener("submit", evento => {
    evento.preventDefault();
    const campo = document.querySelector("#tarefa");
    const texto = campo.value.trim();
    if (!texto) return;
    tarefas.push(texto);
    try {
        localStorage.setItem(chave, JSON.stringify(tarefas));
    }
    catch {
        aviso.textContent = "A tarefa existe nesta sessão, mas não pôde ser salva.";
    }
    campo.value = "";
    renderizar();
});
renderizar();
