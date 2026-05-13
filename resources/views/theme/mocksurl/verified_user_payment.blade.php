@extends('theme.mocksurl.website2')

@section('content2')

<div class="dash-content dash-message-content">
    <div class="notification-section">
        <!-- <div class="notification-heading">
            <h5>Verified User Payment</h5>
        </div> -->
        


        <!--  -->
      <section class="payment-section">
        <div class="container">
            <div class="row">
            <div class="col-12">
                @if(\Session::has('success'))
                <div class="alert alert-success mt-4">
                <a href="#" class="close" data-dismiss="alert" aria-label="close"
                    >&times;</a
                >
                <span>{!! xss_clean(session('success')) !!}</span>
                </div>
                @endif @if(\Session::has('error'))
                <div class="alert alert-danger mt-4">
                <a href="#" class="close" data-dismiss="alert" aria-label="close"
                    >&times;</a
                >
                <span>{!! xss_clean(session('error')) !!}</span>
                </div>
                @endif
            </div>
           
            <div class="col-12">
                <h1>Payment of :$9.99</h1>
                <p class="mb-0">Name : {{ $user->name }}</p>
                <p class="mb-0">Email : {{ $user->email }}</p>
                
                <br>
                
                <script src="https://js.stripe.com/v3/"></script>

                <form
                action="{{ url('gateway/stripe_payment_authorize/'.$user->id) }}"
                method="post"
                id="payment-form"
                >
                @csrf
                <input type="hidden" name="payment_type_verified" value="verified_user"> 
                <div class="form-row">
                    <div id="card-element">
                    A Stripe Element will be inserted here. 
                    </div>

                    <!--Used to display form errors. -->
                    <div id="card-errors" role="alert"></div>
                </div>

                <div class="form-row" style="margin-top: 3%;">
                    <button class="btn" style="width: 100%">
                    {{ _lang('Pay Now') }}
                    </button>
                </div>
                </form>
                
                
                
                <!--Test without Stripe-->
            
                
                
                
                
                
                
                
                
                
                

                <script>
                // Create a Stripe client.
                var stripe = Stripe("{{ get_option('stripe_publishable_key') }}");

                // Create an instance of Elements.
                var elements = stripe.elements();

                // Custom styling can be passed to options when creating an Element.
                // (Note that this demo uses a wider set of styles than the guide below.)
                var style = {
                    base: {
                    color: "#32325d",
                    fontFamily: '"Helvetica Neue", Helvetica, sans-serif',
                    fontSmoothing: "antialiased",
                    fontSize: "16px",
                    "::placeholder": {
                        color: "#aab7c4",
                    },
                    },
                    invalid: {
                    color: "#fa755a",
                    iconColor: "#fa755a",
                    },
                };

                // Create an instance of the card Element.
                var card = elements.create("card", { style: style });

                // Add an instance of the card Element into the `card-element` <div>.
                card.mount("#card-element");

                // Handle real-time validation errors from the card Element.
                card.on("change", function (event) {
                    var displayError = document.getElementById("card-errors");
                    if (event.error) {
                    displayError.textContent = event.error.message;
                    } else {
                    displayError.textContent = "";
                    }
                });

                // Handle form submission.
                var form = document.getElementById("payment-form");
                form.addEventListener("submit", function (event) {
                    event.preventDefault();

                    stripe.createToken(card).then(function (result) {
                    if (result.error) {
                        // Inform the user if there was an error.
                        var errorElement = document.getElementById("card-errors");
                        errorElement.textContent = result.error.message;
                    } else {
                        // Send the token to your server.
                        stripeTokenHandler(result.token);
                    }
                    });
                });

                // Submit the form with the token ID.
                function stripeTokenHandler(token) {
                    // Insert the token ID into the form so it gets submitted to the server
                    var form = document.getElementById("payment-form");
                    var hiddenInput = document.createElement("input");
                    hiddenInput.setAttribute("type", "hidden");
                    hiddenInput.setAttribute("name", "stripeToken");
                    hiddenInput.setAttribute("value", token.id);
                    form.appendChild(hiddenInput);

                    // Submit the form
                    form.submit();
                }
                </script>
            </div>
            
            
            </div>
        </div>
    </section>
        <!--  -->

    
    </div>
</div>




@endsection 

@section('js-script')
<script src="{{ asset('public/theme/default/js/checkout.js') }}"></script>
@endsection