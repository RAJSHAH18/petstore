var product;
var price;

function addToCart(productDetails){
    if (!localStorage.getItem("product")){
        product = productDetails.getAttribute("data-product");
        price = productDetails.getAttribute("data-price");
    }else{
        product = localStorage.getItem("product");
        price = localStorage.getItem("price");
        product += "," + productDetails.getAttribute("data-product");
        price += "," + productDetails.getAttribute("data-price");
    }

    localStorage.setItem("product", product);
    localStorage.setItem("price", price);

    viewCart();
}

function emptyCart(){
    localStorage.clear();
    product = "";
    price = "";
    viewCart();
 }

 function viewCart() {
    if (localStorage.getItem("product")) {
      var productList = localStorage.getItem("product").split(",");
      var priceList = localStorage.getItem("price").split(",");
      document.getElementById("CartCounter").innerHTML = productList.length;
  
      var shoppingCartTable = "<table><tr><th>product</th><th>price</th></tr>";
      var total = 0;
      for (var i = 0; i < productList.length; ++i) {
        shoppingCartTable += "<tr><td>" + productList[i] + "</td> <td>" + priceList[i] + "</td> <td></td><input type='button' value='Remove' data-product='" + productList[i] + "' data-price='" + priceList[i] + "' onclick='deleteproduct(this)'></td></tr>";
  
        total += parseFloat(priceList[i]);
      }
      shoppingCartTable += "<tr><th>Total</th><th>" + total + "</th></table>";
  
      document.getElementById("orderDetails").innerHTML = shoppingCartTable;
    } else {
      document.getElementById("CartCounter").innerHTML = "";
      document.getElementById("orderDetails").innerHTML = "";
    }
  }
  
 function deleteproduct(productDetails) {
    var productToRemove =productDetails.getAttribute("data-product");
    var priceToRemove =productDetails.getAttribute("data-price");

    var productList =localStorage.getItem("product").split(",");
    var priceList = localStorage.getItem("price").split(",");

    productList.splice(productList.indexOf(productToRemove),2);
    priceList.splice(priceList.indexOf(priceToRemove),2);
   
    localStorage.setItem("product",productList);
    localStorage.setItem("price",priceList)

    viewCart();

 }
