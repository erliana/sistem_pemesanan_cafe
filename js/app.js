const takeaway_btn = document.querySelector("#takeaway-btn");
const order_btn = document.querySelector("#order-btn");
const container = document.querySelector(".container");

takeaway_btn.addEventListener("click", () => {
  container.classList.add("takeaway-mode");
});


order_btn.addEventListener("click", () => {
  container.classList.remove("takeaway-mode");
});


