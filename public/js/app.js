
// CHATBOX WITH AI RESPONSE
document.addEventListener("DOMContentLoaded", function () {

    const chatToggle = document.getElementById("chat-toggle");
    const closeChat = document.getElementById("close-chat");
    const chatWindow = document.getElementById("chat-window");
    const sendBtn = document.getElementById("send-message");
    const input = document.getElementById("chat-input");
    const chatBody = document.getElementById("chat-body");

    if (!chatToggle) return;

    chatToggle.onclick = () => chatWindow.style.display = "flex";
    closeChat.onclick = () => chatWindow.style.display = "none";

    sendBtn.onclick = sendMessage;
    input.addEventListener("keypress", e => { if (e.key === "Enter") sendMessage(); });

    function sendMessage() {
        let text = input.value.trim();
        if (text === "") return;

        addMessage(text, "user");
        input.value = "";

        fetchAIResponse(text);
    }

    function addMessage(text, sender) {
        let msg = document.createElement("div");
        msg.className = `message ${sender}-message`;
        msg.textContent = text;
        chatBody.appendChild(msg);
        chatBody.scrollTop = chatBody.scrollHeight;
    }

    function fetchAIResponse(userText) {
        addMessage("Procesando tu pregunta...", "bot");

        fetch("/chat-ia", {
            method: "POST",
            headers: {
                "Content-Type": "application/json",
                "X-CSRF-TOKEN": document.querySelector('meta[name="csrf-token"]').content
            },
            body: JSON.stringify({ message: userText })
        })
        .then(res => res.json())
        .then(data => {
            chatBody.lastChild.remove(); // remove "Procesando..."
            addMessage(data.reply, "bot");
        })
        .catch(() => {
            addMessage("Hubo un error al conectarse con la IA.", "bot");
        });
    }
});
