$(document).ready(function () {
  const chatBox = $(".chat-box");
  const messageInput = $("#message-input-chat");
  const sendButton = $("#send-button-chat");

  function formatTimestamp(timestamp) {
    let dateTime = timestamp.split(" ");
    let date = dateTime[0];
    let time = dateTime[1];
    let Ymd = date.split("-");
    Ymd = Ymd.reverse();
    return Ymd.join("-") + " " + time;
  }

  // Function to create and append a new message element to the chat box
  function appendMessage(username, content, IdFrom, timestamp) {
    let authorJson = sessionStorage.getItem('author');
    let author = JSON.parse(authorJson);
    let dt = formatTimestamp(timestamp);
    // alert(author);
    let messageDiv = $("<div>", { class: "message" });
    // deciding is receiver or sender (for view), null if-branch added while in developing phase
    if (author == null && authorJson == null) {
      messageDiv.addClass("your-message");
    }
    else {
      if (author.IdKorisnika == IdFrom) {
        messageDiv.addClass("your-message");
      }
      else {
        messageDiv.addClass("other-message");
      }
    }
    const usernameSpan = $("<span>", { class: "usernameChat" }).text(username + ":");
    const contentSpan = $("<span>", { class: "contentChat" }).text(content);
    const timestampSpan = $("<span>", { class: "timestampChat" }).text(dt);
    messageDiv.append(usernameSpan, contentSpan, timestampSpan);
    chatBox.append(messageDiv);
  }

  let isSending = false;

  // Function to send a message
  function sendMessage() {
    if (isSending || messageInput.val() === "") return;
    isSending = true;
    const message = messageInput.val();
    let url = new URL(window.location.href);
    let params = new URLSearchParams(url.search);
    let IdFrom = params.get("IdFrom");
    let IdTo = params.get("IdTo");

    // creating new url
    // let urlParts = url.href.split('/');
    // urlParts.pop();
    // urlParts.pop();
    // urlParts.push("Chat");
    // urlParts.push("acceptMessage");
    // let newUrl = urlParts.join('/');  
    $.ajax({
      url: "acceptMessage",
      method: "POST",
      data: {
        message: message,
        from: IdFrom,
        to: IdTo,
      },
      success: function (response) {
        let jsonResponse = JSON.parse(response);
        let user = jsonResponse[0];
        let messageAccept = jsonResponse[1];
        let timestamp = jsonResponse[2];
        appendMessage(user.KorisnickoIme, messageAccept, IdFrom, timestamp);
        messageInput.val(""); // Clear the input field
        messageInput.focus(); // Set focus back to the input field
        isSending = false;
      },
      error: function (error) {
        // Handle the error, if any
        isSending = false;
        console.log("Error:", error);
      },
    });
    return false;
  }


  // Event listener for the "Send" button click
  sendButton.on("click", function () {
    sendMessage();
  });

  // Event listener for the Enter key press in the input field
  messageInput.on("keyup", function (event) {
    if (event.keyCode === 13) { // 13 is the key code for Enter
      sendMessage();
    }
  });

  // Event listener for the Esc key press on page
  $("body").on("keyup", function (event) {
    if (event.keyCode == 27) {
      if (messageInput.is(':focus')) {
        messageInput.blur();
      }
    }
  })

  // Event listener for the / key press on page
  $("body").on("keyup", function (event) {
    if (event.keyCode == 191) {
      messageInput.focus();
    }
  })

});