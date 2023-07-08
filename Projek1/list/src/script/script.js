let totalPrice = 0;

function selectItem(price) {
  const selectedItem = event.target;

  if (selectedItem.classList.contains("selected")) {
    selectedItem.classList.remove("selected");
    totalPrice -= price;
  } else {
    selectedItem.classList.add("selected");
    totalPrice += price;
  }

  document.getElementById("total-price").textContent = "Rp" + totalPrice;
}
