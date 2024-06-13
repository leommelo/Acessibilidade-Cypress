function addImageUpload() {
    // Cria um novo item de upload de imagem
    var newItem = document.createElement("div");
    newItem.className = "imageUploadItem";

    // Cria um novo input de arquivo
    var input = document.createElement("input");
    input.type = "file";
    input.name = "imagens[]";
    input.accept = "image/*";

    // Cria um botão de remoção
    var removeButton = document.createElement("button");
    removeButton.type = "button";
    removeButton.className = "remover"
    removeButton.textContent = "Remover";
    removeButton.onclick = function() {
        removeImageUpload(this);
    };

    // Adiciona o input e o botão de remoção ao item
    newItem.appendChild(input);
    newItem.appendChild(removeButton);

    // Adiciona o novo item ao container
    document.getElementById("imageUploadContainer").appendChild(newItem);
}

function removeImageUpload(button) {
    // Remove o item de upload de imagem ao qual o botão de remoção pertence
    var itemToRemove = button.parentNode;
    itemToRemove.parentNode.removeChild(itemToRemove);
}

document.addEventListener('DOMContentLoaded', function() {
    // Função para mostrar ou esconder o conteúdo baseado na opção selecionada
    function atualizarConteudo() {
        var opcaoSelecionada = document.querySelector('input[name="opcao"]:checked').value;
        var conteudo = document.getElementById('principal');
        
        if (opcaoSelecionada === "2") {
            conteudo.style.display = 'block'; // Mostra o conteúdo se a opção "Sim" for selecionada
        } else {
            conteudo.style.display = 'none'; // Esconde o conteúdo para as outras opções
        }
    }

    // Adiciona o evento de clique em todas as opções de rádio
    var radios = document.querySelectorAll('input[name="opcao"]');
    radios.forEach(function(radio) {
        radio.addEventListener('change', atualizarConteudo);
    });

    // Chama a função para definir a visibilidade inicial
    atualizarConteudo();
});
