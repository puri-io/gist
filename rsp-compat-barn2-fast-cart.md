# Reserved Stock Pro ♥ Fast Cart

[Fast Cart by Barn2](https://barn2.com/wordpress-plugins/woocommerce-fast-cart/ref/472/) is fully compatible with [Reserved Stock Pro by Puri.io](https://puri.io/plugin/reserved-stock-pro-for-woocommerce/)


If you are using the Checkout feature in Fast Cart, then you should add the following CSS to your site. 
The CSS snippet will prevent a second reservation countdown from displaying with in the Fast Checkout.

``` css
.wfc-checkout .rsp-countdown-wrapper {
    display: none;
}
```

The below CSS snippet will ensure the countdown is clearly visable while the Fast Cart is shown to the customer.
``` css
.rsp-countdown-wrapper {
    z-index: 9999999;
}
```
