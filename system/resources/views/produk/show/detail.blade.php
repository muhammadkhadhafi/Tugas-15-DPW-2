<p>
    {{$produk->harga}} |
    Stok : {{$produk->stok}} |
    Berat : {{$produk->berat}} gr |
    Seller : {{$produk->seller->username}} |
    Tanggal Produksi : {{$produk->created_at->diffForHumans()}} |
    Tanggal Update : {{$produk->updated_at->format("d F Y")}}
</p>