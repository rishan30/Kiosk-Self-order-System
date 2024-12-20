<!-- Checkout Modal -->
<div class="modal fade" id="checkoutModal" tabindex="-1" role="dialog" aria-labelledby="checkoutModal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="checkoutModal">Enter Your Credit/Debit Card Details :</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <form action="partials/_manageCart.php" method="post">
                <div class="form-group">
                    <b><label for="Card Number">Card Number:</label></b>
                    <input class="form-control" id="C_number" name="address" placeholder="1234 xxxx xxxx 1234 " type="text" required minlength="12" maxlength="12">
                </div>
                <div class="form-group">
                    <b><label for="Card Holder Name">Card Holder Name:</label></b>
                    <input class="form-control" id="C_name" name="address" placeholder="eg- John Smith " type="text" required minlength="1" maxlength="500">
                </div>
                <div class="form-group">
                    <b><label for="Expire Date">Expire Date:</label></b>
                    <b><label for="month">Month:</label></b>
                    <select limit="4">
                        <option>01</option>
                        <option>02</option>
                        <option>03</option>
                        <option>04</option>
                        <option>05</option>
                        <option>06</option>
                        <option>07</option>
                        <option>08</option>
                        <option>09</option>
                        <option>10</option>
                        <option>11</option>
                        <option>12</option>
                    <select>
                    <b><label for="Year" limit="4">Year:</label></b>
                    <select>
                        <option>2023</option>
                        <option>2024</option>
                        <option>2025</option>
                        <option>2026</option>
                        <option>2027</option>
                        <option>2028</option>
                        <option>2029</option>
                        <option>2030</option>
                        <option>2031</option>
                        
                    <select>
                </div>
                <div class="form-group">
                    <b><label for="CVC">CVC:</label></b>
                    <input class="form-control" id="CVC" name="address" type="text" required minlength="3" maxlength="3">
                </div>



                
                </div>
                
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <input type="hidden" name="amount" value="<?php echo $totalPrice ?>">
                    <button type="submit" name="checkout" class="btn btn-success">Order</button>
                </div>
            </form>
        </div>
        </div>
    </div>
</div>