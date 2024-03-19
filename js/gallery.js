document.addEventListener("DOMContentLoaded", function() {
    const gallery = document.getElementById("gallery");
    const imagePath = "../../assets/data/gallery/"; // Path to your image folder on the server
    // Fetch image files from the server
    fetch(imagePath)
        .then(response => response.text())
        .then(data => {
            // Extract image file names from the directory listing
            const imageNames = data.match(/<a href="([^"]+\.(?:png|jpg|jpeg|gif|webp))">/gi);
            if (imageNames) {
                imageNames.forEach(function(imageName) {
                    imageName = imageName.replace(/<a href="([^"]+\.(?:png|jpg|jpeg|gif|webp))">/, "$1");
                    // Create image element and set source
                    const img = document.createElement("img");
                    img.src = imagePath + imageName;
                    img.classList.add("thumbnail");
                    gallery.appendChild(img);
                });
            }
        })
        .catch(error => console.error("Error fetching images:", error));
});