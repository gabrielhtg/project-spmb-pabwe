function toggleChatForm() {
    var chatForm = document.getElementById("chat-form");
    chatForm.style.display =
        chatForm.style.display === "none" || chatForm.style.display === ""
            ? "block"
            : "none";
}

function openWhatsApp() {
    // Implement logic to open WhatsApp
    alert("Opening WhatsApp...");
}

function openTelegram() {
    // Implement logic to open Telegram
    alert("Opening Telegram...");
}

function openWhatsApp() {
    var phoneNumber = "6285960880625";
    var whatsappLink = "https://api.whatsapp.com/send?phone=" + phoneNumber;
    window.open(whatsappLink, "_blank");
}

function openTelegram() {
    var telegramLink = "https://t.me/it_del_bot";
    window.open(telegramLink, "_blank");
}
function toggleChatForm() {
    var chatForm = document.getElementById('chat-form');
    var chatButton = document.getElementById('chat-button');

    // Toggle tampilan form
    if (chatForm.style.display === 'none' || chatForm.style.display === '') {
      chatForm.style.display = 'block';
      chatButton.style.transform = 'scale(1)';
    } else {
      chatForm.style.display = 'none';
      chatButton.style.transform = 'scale(1.1)';
    }
  }

  function openFormQuestion() {
    // Redirect ke halaman form.blade.php di folder chatbot
    window.location.href = '/chatbot/form';
}