document.addEventListener("DOMContentLoaded", function () {
  const zoomBtns = document.querySelectorAll("#zoomButn");
  const deleteBtns = document.querySelectorAll("#deleteButn");
  const editBtns = document.querySelectorAll("#editButn");

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

  deleteBtns.forEach((btn) =>{
    btn.addEventListener("click", function (){
      const idtoDelete = btn.getAttribute("data-id");
      if(confirm("Delete this song?")){
        fetch("delete_song.php", {
          method: "POST",
          headers: {
            'Content-Type': 'application/x-www-form-urlencoded',
          },
          body: 'id='+idtoDelete
        })
        .then(response => response.json())
        .then(data => {
          if (data.success) {
            const row = this.closest('tr');
            row.remove();
          } else {
            alert('Error deleting song');
          }
        })
        .catch(error => {
          console.error('Error:', error);
          alert('Error deleting song');
        });
        
      }
    })
  })

  editBtns.forEach((btn) => {
    btn.addEventListener("click", function() {
        const id = this.getAttribute("data-id");
        window.location.href = `form_update.php?id=${id}`;
    });
  });

});
