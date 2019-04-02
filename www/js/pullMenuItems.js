function loadDoc() {
  fetch('../index.php')
  .then(function(response) {
    return response.json()
  })
  .then(function(responseJson) {
    for(val in responseJson) {
      switch(val["itemCategory"]) {
        case "Tea":
          document.getElementById("tea").innerHTML += val["itemName"] + " - £" + val["price"];
          break;
        case "Coffee":
          document.getElementById("tea").innerHTML += val["itemName"] + " - " + val["price"];
          break;
        case "Cold":
          document.getElementById("tea").innerHTML += val["itemName"] + " - " + val["price"];
          break;
        case "Chocolate":
          document.getElementById("tea").innerHTML += val["itemName"] + " - " + val["price"];
          break;
        case "Health Boosts":
          document.getElementById("tea").innerHTML += val["itemName"] + " - " + val["price"];
          break;
        case "Smoothies":
          document.getElementById("tea").innerHTML += val["itemName"] + " - " + val["price"];
          break;
        default:
          console.log("Error");
      }
    }
  })
}
