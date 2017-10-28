## Mobilan Digital Printing
--------
Landing Page HTML Template - using Semantic UI CSS

### Note
- Semua gambar produk akan masuk di folder ```/images/produk```
- Top menu content harus diisi 2x (duplicate) untuk keperluan responsive content masing-masing berada di ```#header-section``` > ```.ui.text.top.fluid.inverted.menu``` dan ```.ui.popup```
- Trigger modal product berada di ```.product.modal```, content modal berada di ```.ui.modal``` selengkapnya :
```
$(".product.button").click(function() {
  $(".ui.modal").modal("show");
})
```
