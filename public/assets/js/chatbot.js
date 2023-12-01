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
  var phoneNumber = '6285960880625';  
  var whatsappLink = 'https://api.whatsapp.com/send?phone=' + phoneNumber;
  window.open(whatsappLink, '_blank');
}

function openTelegram() {
  var telegramLink = 'https://t.me/it_del_bot';
  window.open(telegramLink, '_blank');
}

function openFormQuestion() {
  // Arahkan ke rute '/form'
  window.location.href = '/form';
}