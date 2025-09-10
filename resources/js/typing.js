document.addEventListener('DOMContentLoaded', () => {
  const el = document.getElementById("typing");
  if (!el) return;

  const text = el.dataset.text;
  let index = 0;
  let forward = true; // true = mengetik, false = menghapus

  function type() {
    if (forward) {
      el.innerHTML += text.charAt(index);
      index++;
      if (index === text.length) {
        forward = false;
        setTimeout(type, 3000); // pause 1,5 detik setelah selesai mengetik
        return;
      }
    } else {
      el.innerHTML = text.substring(0, index - 1);
      index--;
      if (index === 0) {
        forward = true;
        setTimeout(type, 500); // pause 0,5 detik sebelum mulai mengetik lagi
        return;
      }
    }
    setTimeout(type, 100); // speed mengetik/hapus per karakter
  }

  type();
});
