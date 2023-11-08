<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Chat Application</title>
</head>

<body>
  <header>
    <h1>Chat Application</h1>
  </header>
  <div class="container">
    <div class="chat-window">
      <div class="chat-area">
        <div class="chat-messages">
          <!-- Chat Messages -->
        </div>
      </div>
      <div class="user-input">
        <input type="text" id="username-input" placeholder="Your Username">
        <input type="text" id="message-input" placeholder="Type your message...">
        <button id="send-button">Send</button>
    </div>
    </div>
  </div>

  <script data-two_delay_id="two_654b2b1353816" data-two_delay_src="script.js"></script>
</body>
	  <script>
// Function to handle sending a message
function sendMessage() {
  const usernameInput = document.getElementById('username-input');
  const messageInput = document.getElementById('message-input');
  const username = usernameInput.value.trim();
  const message = messageInput.value.trim();

  if (username === '' || message === '') {
    return;
  }

  const chatMessages = document.querySelector('.chat-messages');
  const messageElement = document.createElement('div');
  messageElement.classList.add('message');
  messageElement.innerHTML = `<strong>${username}:</strong> ${message}`;
  chatMessages.appendChild(messageElement);

  // Clear the input fields
  usernameInput.value = '';
  messageInput.value = '';

  chatMessages.scrollTop = chatMessages.scrollHeight;
}


// Event listener
document.getElementById('send-button').addEventListener('click', sendMessage);
document.getElementById('message-input').addEventListener('keydown', (event) => {
  if (event.key === 'Enter') {
    event.preventDefault();
    sendMessage();
  }
});
</script>
</html>