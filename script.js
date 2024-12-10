document.addEventListener("DOMContentLoaded", function () {
  const zoomBtns = document.querySelectorAll("#zoomButn");

  zoomBtns.forEach((btn) => {
    btn.addEventListener("click", () => {
      const img = btn.getAttribute("data-image") || "img/cover.jpg";
      const title = btn.getAttribute("data-title") || "Song Title";
      const artist = btn.getAttribute("data-artist") || "artist";

      const imgToChange = document.querySelector(".leftimg img");
      const titleToChange = document.querySelector(".lefttext h1");
      const artistToChange = document.querySelector(".lefttext p");

      imgToChange.src = img;
      titleToChange.textContent = title;
      artistToChange.textContent = artist;
    });
  });
});
