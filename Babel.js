// Sample products data (you can modify this as needed)
const products = [
    { id: 1, name: "Product 1", price: 100, stock: 10 },
    { id: 2, name: "Product 2", price: 200, stock: 10 },
    { id: 3, name: "Product 3", price: 300, stock: 10 },
    { id: 4, name: "Product 4", price: 400, stock: 10 }
  ];
  
  // Cart array to store selected products
  let cart = [];
  
  // Function to render products in the main cart
  function renderProducts() {
    const productList = document.getElementById('product-list');
    productList.innerHTML = '';
  
    products.forEach(product => {
      const productDiv = document.createElement('div');
      productDiv.classList.add('product');
      productDiv.innerHTML = `
        <h3>${product.name}</h3>
        <p>Price: ₹${product.price}</p>
        <p>Stock: ${product.stock}</p>
        <button onclick="addToCart(${product.id})">Add to Cart</button>
      `;
      productList.appendChild(productDiv);
    });
  }
  
  // Function to add a product to the cart
  function addToCart(productId) {
    const product = products.find(p => p.id === productId);
    
    // Check if the product is already in the cart
    const cartProduct = cart.find(item => item.product.id === productId);
    
    if (cartProduct) {
      // If already in cart, increase the quantity
      if (cartProduct.quantity < 10) {
        cartProduct.quantity++;
      } else {
        showStockLimitMessage();
        return;
      }
    } else {
      // If not in cart, add a new product
      cart.push({ product, quantity: 1 });
    }
    
    renderCart();
  }
  
  // Function to render the cart in the side navigation
  function renderCart() {
    const cartContainer = document.getElementById('cart-items');
    const totalQuantity = document.getElementById('cart-quantity');
    const cartTotal = document.getElementById('cart-total');
    
    cartContainer.innerHTML = '';
    let total = 0;
    let quantity = 0;
  
    cart.forEach(item => {
      const itemDiv = document.createElement('div');
      itemDiv.classList.add('cart-item');
      itemDiv.innerHTML = `
        <span>${item.product.name}</span>
        <span>₹${item.product.price} x ${item.quantity}</span>
        <button onclick="removeFromCart(${item.product.id})">Remove</button>
      `;
      cartContainer.appendChild(itemDiv);
      total += item.product.price * item.quantity;
      quantity += item.quantity;
    });
    
    totalQuantity.textContent = quantity;
    cartTotal.textContent = total;
  }
  
  // Function to remove an item from the cart
  function removeFromCart(productId) {
    cart = cart.filter(item => item.product.id !== productId);
    renderCart();
  }
  
  // Function to toggle the cart side navigation visibility
  function sideNav(action) {
    const sideNavElement = document.getElementById('side-nav');
    const coverElement = document.querySelector('.cover');
    const purchaseCover = document.getElementById('purchase-cover');
    
    if (action === 1) {
      sideNavElement.style.right = '0';
      coverElement.style.display = 'block';
    } else {
      sideNavElement.style.right = '-100%';
      coverElement.style.display = 'none';
      purchaseCover.style.display = 'none';
    }
  }
  
  // Function to show stock limit message
  function showStockLimitMessage() {
    const stockLimitMessage = document.querySelector('.stock-limit');
    stockLimitMessage.style.display = 'block';
  }
  
  // Function to handle the stock limit message "Okay" button
  function limitPurchase(button) {
    button.parentElement.style.display = 'none';
  }
  
  // Function to handle purchase
  function buy(action) {
    if (action === 1) {
      const purchaseModal = document.getElementById('purchase-modal');
      purchaseModal.innerHTML = `
        <h3>Thank you for your purchase!</h3>
        <p>Your order will be processed soon.</p>
        <button onclick="sideNav(0)">Close</button>
      `;
      document.getElementById('purchase-cover').style.display = 'block';
    }
  }
  
  // Function to clear the cart
  function clearCart() {
    cart = [];
    renderCart();
  }
  
  // Initial render of products
  renderProducts();
  