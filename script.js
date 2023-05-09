window.addEventListener("load", (event) => {
  
    const params = new URLSearchParams(document.location.search);
    const sort = params.get("sort");
  
    const priceUp = document.getElementById('priceUp');
    const priceDown = document.getElementById('priceDown');
    const rating = document.getElementById('rating');
    
    switch (sort) {
      case 'price-up':
        priceUp.classList.add('active')
        rating.classList.remove('active')
        break;
      case 'price-down':
        priceDown.classList.add('active')
        rating.classList.remove('active')
        break;
      case 'rating':
        rating.classList.add('active')
        
        break;
        
      default:
        break;
    }
  });
  