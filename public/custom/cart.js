$(document).ready(function() {
  $('input[name="quantity"]').on('change', function() {
    // code to update cart total using AJAX
  });
});




$(document).ready(function() {
  $('input[name="quantity"]').on('change', function() {
    var quantity = $(this).val(); // get the new quantity value
    var productId = $(this).data('product-id'); // get the product ID from the data attribute on the input field
    $.ajax({
      url: '/cart/update/' + productId, // the Laravel route to handle the AJAX request
      method: 'POST', // use the POST method to send the data
      data: {
        quantity: quantity, // send the new quantity value
        _token: '{{ csrf_token() }}' // send the CSRF token to verify the request
      },
      success: function(response) {
        // code to update cart total element on the page
      }
    });
  });
});

success: function(response) {
  $('#cart-total').text(response.total);
}

