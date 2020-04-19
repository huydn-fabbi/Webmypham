<div class="cart-table">
    <table>
        <thead>
            <tr>
                <th>Ảnh</th>
                <th class="p-name">Tên Sản Phẩm</th>
                <th>Giá</th>
                <th>Số Lượng</th>
                <th>Tổng Tiền</th>
                <th>Cập Nhật</th>
                <th>Xóa</th>
            </tr>
        </thead>
        <tbody>
            @if(Session::has("cart") != null)
            @foreach (Session::get("cart")->products as $item)
            <tr>
                <td class="cart-pic first-row"><img style="width:80px; height:80px" src="{{ $item['productInfo']->image_url }}" alt=""></td>
                <td class="cart-title first-row">
                    <h5>{{ $item['productInfo']->product_name }}</h5>
                </td>
                <td class="p-price first-row">{{ $item['productInfo']->price }} VND</td>
                <td class="qua-col first-row">
                    <div class="quantity">
                        <div class="pro-qty">
                        <input id="quantity-item-{{ $item['productInfo']->product_id }}" type="text" value="{{ $item['quantity'] }}">
                        </div>
                    </div>
                </td>
                <td class="total-price first-row">{{ $item['price'] }} VND</td>
                <td class="close-td"><i onclick="saveItem({{ $item['productInfo']->product_id }});" class="ti-save"></i></td>
                <td class="close-td first-row"><i class="ti-close" onclick="deleteItem({{ $item['productInfo']->product_id }});"></i></td>
            </tr>
            @endforeach
            @endif
        </tbody>
    </table>
</div>
<form action="{{ route('order') }}" method="POST">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <div class="row">
        <div class="col-lg-12 offset-lg-8">
            <label for="note">Ghi chú</label>
            <textarea name="note" style="height: 100px; width: inherit; margin-bottom: 20px;"></textarea>
        </div>
    </div>
    <div class="row">
        <div style="margin-bottom: 25px; margin-left: 780px;" class="col-lg-4 offset-lg-8">
            <div class="proceed-checkout">
                @if(Session::has("cart") != null)
                <ul>
                    <li class="subtotal">Số Lượng <span>{{ Session::get('cart')->totalQuanity }}</span></li>
                    <li class="cart-total">Tổng Tiền <span>{{ Session::get('cart')->totalPrice }} VND</span></li>
                </ul>
                    @if (Auth::check())
                    <button type="submit" class="proceed-btn">THANH TOÁN</button>
                    @endif
                @endif
            </div>
        </div>
    </div>
</form>