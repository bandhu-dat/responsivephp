<form name="_xclick" action="https://www.sandbox.paypal.com/webscr" method="post">//paypal sandbox post url
    <input type="hidden" name="cmd" value="_xclick">
    <input type="hidden" name="business" value="seller@example.com">//Paypal sandbox seller account email id
    <input type="hidden" name="currency_code" value="USD">//enter your currency code
    <input type="hidden" name="item_name" value="reesu.org">//enter the item name
    <input type="hidden" name="return" value="http://www.example.com/paypal/success.php">//url to return once payment is done.
    <input type="hidden" name="amount" value="1">//amount of transaction needs to be credited to your paypal account
    <input type="image" src="http://www.paypal.com/en_US/i/btn/btn_buynow_LG.gif" border="0" name="submit" alt="Make payments with PayPal - it's fast, free and secure!">
</form>