@if(Session::has("cart") != null)
<div class="select-items">
    <table>
        <tbody>
            @foreach (Session::get("cart")->products as $item)
            <tr>
                <td class="si-pic"><img style="width:70px; height:70px" src="{{ $item['productInfo']->image_url }}" alt=""></td>
                <td class="si-text">
                    <div class="product-selected">
                        <p>{{ $item['productInfo']->price }} x {{ $item['quantity'] }}</p>
                        <h6>{{ $item['productInfo']->product_name }}</h6>
                    </div>
                </td>
                <td class="si-close">
                    <i class="ti-close" data-id="{{ $item['productInfo']->product_id }}"></i>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
<div class="select-total">
    <span>total:</span>
    <h5>{{ Session::get("cart")->totalPrice }} VND</h5>
    <input type="number" id="quantity" hidden value="{{Session::get('cart')->totalQuanity}}">
</div>
@endif
