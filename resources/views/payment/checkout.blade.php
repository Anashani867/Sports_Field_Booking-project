<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Details</title>
    <script src="https://js.stripe.com/v3/"></script>
</head>
<body>
<h2>Enter Payment Details</h2>
<form action="{{ route('payment.process') }}" method="POST" id="payment-form">
    @csrf
    <div id="card-element">
        <!-- A Stripe Element will be inserted here. -->
    </div>
    <!-- Used to display form errors. -->
    <div id="card-errors" role="alert"></div>
    <button type="submit">Pay</button>
</form>

<script>
    var stripe = Stripe("{{ env('STRIPE_KEY') }}");
    var elements = stripe.elements();
    var card = elements.create("card");
    card.mount("#card-element");

    var form = document.getElementById("payment-form");
    form.addEventListener("submit", function(event) {
        event.preventDefault();

        stripe.createPaymentMethod({
            type: 'card',
            card: card,
        }).then(function(result) {
            if (result.error) {
                // Display error.message in your form
                document.getElementById('card-errors').textContent = result.error.message;
            } else {
                // Otherwise, send the paymentMethod ID to your server
                stripePaymentMethodHandler(result.paymentMethod.id);
            }
        });
    });

    function stripePaymentMethodHandler(paymentMethodId) {
        var form = document.getElementById("payment-form");
        var hiddenInput = document.createElement("input");
        hiddenInput.setAttribute("type", "hidden");
        hiddenInput.setAttribute("name", "payment_method_id");
        hiddenInput.setAttribute("value", paymentMethodId);
        form.appendChild(hiddenInput);
        form.submit();
    }
</script>
</body>
</html>
