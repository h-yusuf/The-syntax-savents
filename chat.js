const socket = io.connect("http://localhost", {
    transports: ["websocket"],
  });

  let form = document.getElementById("form");
  let message = document.getElementById("message");
  let messageArea = document.getElementById("messageArea");

  form.addEventListener("submit", (e) => {
    e.preventDefault();
    socket.emit("message", message.value);

    if (message.value) {
      message.value = "";
    }
  });

  socket.on("showMsg", (msg) => {
    let chatContent = document.createElement("p");
    chatContent.textContent = msg;
    chatContent.innerHTML = `
      
    <a href="#" class="block max-w-md p-6 bg-white border-2 border-gray-200 rounded-lg  hover:bg-gray-100 ">
      <p class="font-normal text-gray-700 dark:text-gray-400">${msg}</p>
      <p class="flex justify-end text-gray-400" style="margin-bottom: -10px;">${getCurrentTime()}</p>
  </a>
      `;
    messageArea.appendChild(chatContent);

  });
  function getCurrentTime() {
    const now = new Date();
    const hours = now.getHours();
    const minutes = now.getMinutes();
    return `${hours}:${minutes}`;
  }

  // send image

  const imageInput = document.getElementById("imageInput");
  const sendImageButton = document.getElementById("sendImage");
  const uploadedImage = document.getElementById("uploadedImage");

  sendImageButton.addEventListener("click", () => {
    imageInput.click();
  });

  imageInput.addEventListener("change", (e) => {
    const selectedImage = e.target.files[0];
    if (selectedImage) {
      // Tampilkan gambar yang diunggah
      displayUploadedImage(selectedImage);
    }
  });
  function displayUploadedImage(image) {

    uploadedImage.src = URL.createObjectURL(image);
    uploadedImage.classList.remove("hidden");


  }
  const emojiButton = document.getElementById('emojiButton');
const messageInput = document.getElementById('message'); 

emojiButton.addEventListener('click', () => {
messageInput.focus();
document.execCommand('insertText', false, '😎😎😎😎'); 
});
