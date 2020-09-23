const takeaway_tombol = document.querySelector("#takeaway-tombol");
const order_tombol = document.querySelector("#order-tombol");
const wadah = document.querySelector(".wadah");

takeaway_tombol.addEventListener("click", () => {
  wadah.classList.add("takeaway-mode");
});


order_tombol.addEventListener("click", () => {
  wadah.classList.remove("takeaway-mode");
});


