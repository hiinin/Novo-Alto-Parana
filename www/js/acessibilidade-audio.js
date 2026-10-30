// acessibilidade-audio.js
$(document).ready(function () {
    // Verifica se o navegador suporta a API de síntese de voz
    if (!window.speechSynthesis) {
        console.warn("Navegador não suporta áudio.");
        $("#audioBtn").hide();
        return;
    }

    let audioAtivo = false;
    let utterance = null;
    let elementoAtual = null;

    // Verificar se já existe uma preferência salva
    if ($.cookie("audio-active") === "true") {
        ativarAudio();
    }

    // Função para parar qualquer leitura em andamento
    function pararLeitura() {
        if (window.speechSynthesis.speaking) {
            window.speechSynthesis.cancel();
        }
        if (elementoAtual) {
            $(elementoAtual).css({
                outline: "",
                "background-color": "",
            });
            elementoAtual = null;
        }
    }

    // Função para ler o texto de um elemento
    function lerTexto(elemento) {
        if (!audioAtivo) return;
        if (elementoAtual === elemento) return;

        pararLeitura();

        let textoParaLer = "";

        // Extrai texto conforme o tipo de elemento
        if ($(elemento).is("input") || $(elemento).is("textarea")) {
            textoParaLer = $(elemento).val();
        } else if ($(elemento).is("img")) {
            textoParaLer = $(elemento).attr("alt");
        } else {
            textoParaLer = $(elemento)
                .clone()
                .children()
                .remove()
                .end()
                .text()
                .trim();
            if (!textoParaLer) {
                textoParaLer = $(elemento).text().trim();
            }
        }

        textoParaLer = textoParaLer.replace(/\s+/g, " ").trim();

        if (textoParaLer && textoParaLer.length > 2) {
            utterance = new SpeechSynthesisUtterance(textoParaLer);
            utterance.lang = "pt-BR";
            utterance.rate = 1.0;
            utterance.pitch = 1.0;

            // Destaque visual
            $(elemento).css({
                outline: "2px solid #FFD700",
                "background-color": "rgba(255, 215, 0, 0.15)",
                transition: "all 0.2s ease",
            });
            elementoAtual = elemento;

            utterance.onend = function () {
                if (elementoAtual) {
                    $(elementoAtual).css({
                        outline: "",
                        "background-color": "",
                    });
                    elementoAtual = null;
                }
            };

            utterance.onerror = function () {
                if (elementoAtual) {
                    $(elementoAtual).css({
                        outline: "",
                        "background-color": "",
                    });
                    elementoAtual = null;
                }
            };

            window.speechSynthesis.speak(utterance);
        }
    }

    // Função para ativar o áudio
    function ativarAudio() {
        audioAtivo = true;

        // Adiciona evento de mouseenter aos elementos clicáveis e de texto
        $("body").on(
            "mouseenter.audio",
            "a, p, h1, h2, h3, h4, h5, h6, span, li, td, th, label, button, input, textarea, img, div:not(script):not(style):not(.toolbar-acessibilidade)",
            function (e) {
                e.stopPropagation();
                lerTexto(this);
            },
        );

        // Muda o ícone do botão (você pode criar um ícone diferente ou usar CSS)
        $("#audioBtn img").attr("src", function () {
            // Tenta usar um ícone de áudio ativo se existir, senão mantém o mesmo
            let srcAtual = $(this).attr("src");
            if (srcAtual && srcAtual.indexOf("audio-topo.svg") !== -1) {
                return srcAtual.replace(
                    "audio-topo.svg",
                    "audio-ativo-topo.svg",
                );
            }
            return srcAtual;
        });

        // Adiciona classe para estilização
        $("#audioBtn").addClass("audio-ativo");

        // Salva preferência no cookie (igual ao contraste)
        $.cookie("audio-active", "true", { expires: 365, path: "/" });

        // Feedback falado opcional
        setTimeout(function () {
            if (audioAtivo) {
                let msg = new SpeechSynthesisUtterance(
                    "Modo de áudio ativado. Passe o mouse sobre os textos para ouvir.",
                );
                msg.lang = "pt-BR";
                msg.rate = 1.0;
                window.speechSynthesis.speak(msg);
            }
        }, 100);
    }

    // Função para desativar o áudio
    function desativarAudio() {
        audioAtivo = false;
        $("body").off("mouseenter.audio");
        pararLeitura();

        // Restaura o ícone original
        $("#audioBtn img").attr("src", function () {
            let srcAtual = $(this).attr("src");
            if (srcAtual && srcAtual.indexOf("audio-ativo-topo.svg") !== -1) {
                return srcAtual.replace(
                    "audio-ativo-topo.svg",
                    "audio-topo.svg",
                );
            }
            return srcAtual;
        });

        $("#audioBtn").removeClass("audio-ativo");
        $.cookie("audio-active", "false", { expires: 365, path: "/" });

        let msg = new SpeechSynthesisUtterance("Modo de áudio desativado.");
        msg.lang = "pt-BR";
        window.speechSynthesis.speak(msg);
    }

    // Função para alternar o áudio
    function alternarAudio() {
        if (audioAtivo) {
            desativarAudio();
        } else {
            ativarAudio();
        }
    }

    // Evento de clique no botão de áudio
    $("#audioBtn").on("click", function (e) {
        e.preventDefault();
        alternarAudio();
    });
});
