// Mostrar foto no cadastro
function previewImage(event) {
  const input = event.target;
  const preview = document.getElementById("preview");
  const file = input.files[0];

  if (file) {
    const reader = new FileReader();

    reader.onload = function () {
      preview.src = reader.result;
      preview.style.display = "block";
    };

    reader.readAsDataURL(file);
  } else {
    preview.src = "#";
    preview.style.display = "none";
  }
}
