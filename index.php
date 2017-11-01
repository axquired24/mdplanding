<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Mobilan Digital Printing</title>
  <link rel="stylesheet" href="css/bootstrap-responsive.min.css">
  <link rel="stylesheet" href="css/semantic.min.css">

  <link rel="stylesheet/less" type="text/css" href="css/mdp.less" />
  <script type="text/javascript" src="js/less.min.js"></script>
  <style>
    .ui.menu {
      margin-top: 3em !important;
    }
  </style>
</head>

<?php
  ini_set('display_errors', 1);
  error_reporting(E_ALL|E_STRICT);
  include('config-mdp.php');
?>
<body>
  <div id="header-section" class="header wrapper">
    <div class="ui grid">
      <div class="ui text top fluid inverted menu">
        <div class="header item">
          <a href="#"><img src="images/logo.jpg" class="ui circular image" alt=""></a>
        </div>
        <a href="#product-section" class="right item hidden-xs">Produk</a>
        <a href="#howto-section" class="item hidden-xs">Cara Kerja</a>
        <a href="#news-section" class="item hidden-xs">Berita</a>
        <a href="#contact-section" class="item hidden-xs">Kontak</a>
        <a href="#" class="right sidebar item visible-xs"><i class="sidebar icon"></i></a>
      </div>
    </div>

    <!-- Menu Popup on mobile device -->
    <div class="ui popup">
      <div class="ui grid">
        <div class="column">
          <h4 class="ui header">Navigation</h4>
          <div class="ui link list">
            <a href="#product-section" class="item">Produk</a>
            <a href="#howto-section" class="item">Cara Kerja</a>
            <a href="#news-section" class="item">Berita</a>
            <a href="#contact-section" class="item">Kontak</a>
          </div>
        </div>
      </div>
    </div>
    <!-- End Menu Popup -->

    <div class="ui center aligned text caption container">
      <h1 class="ui white text">Wajah baru <em>DIGITAL PRINTING</em>
        <small>no ANTRI, no LAMA, no RIBET</small>
      </h1>
      <br><a href="#product-section" class="ui inverted large rounded border button">SELENGKAPNYA</a>
    </div>
  </div> <!-- header-wrapper -->

  <!-- DIVIDER text -->
  <div id="news-section" class="green bg">
    <div class="ui divsection container">
        <div class="ui centered white text">
          <?php echo $text['sub-text-atas']; ?>
      </div>
    </div>
  </div>
  <!-- END DIVIDER text -->

  <!-- Product Section -->
  <div id="product-section" class="ui product divsection">
    <div class="ui container">
      <h2 class="ui centered header">
        Produk <br> <small>Produk unggulan dan populer saat ini</small>
      </h2>
      <div class="ui two column stackable grid">
        <?php foreach($products as $product){ ?>
        <!-- Start Column -->
        <div class="column">
          <div class="ui raised segment">
            <div class="ui stackable grid">
              <div class="five wide column">
                <img src="images/produk/<?php echo $product['image_path'];?>" alt="<?php echo $product['name'];?>" class="ui fluid image">
              </div>
              <div class="eleven wide column">
                <h3 class="ui caption header"><?php echo $product['name'];?></h3>
                <?php echo $product['description'];?>
                <hr>
                <a href="javascript:" class="ui right floated inverted green button"><?php echo $product['price'];?></a>
              </div>
            </div>
          </div>
        </div>
        <!-- End Column -->
      <?php } //endforeach; ?>
      </div>
    </div>
    <!-- END container -->

    <!-- Sementara di disable -->
    <!-- <div class="ui grid" style="margin-bottom: -6em">
      <div class="ui center aligned column">
        <br>
        <a href="javascript:" class="ui green centered huge related button">Produk Lainnya</a>
      </div>
    </div> -->
    <!-- End centered grid column -->
  </div>
  <!-- END Product Section -->


  <!-- DIVIDER text -->
  <div class="yellow bg">
    <div class="ui divsection container">
        <div class="ui centered white text">
          <?php echo $text['sub-text-bawah']; ?>
      </div>
    </div>
  </div>
  <!-- END DIVIDER text -->

  <!-- How to Section -->
  <div id="howto-section" class="ui howto divsection">
    <div class="ui cotainer">
      <div class="ui stackable center aligned grid">
        <div class="ten wide column">
          <h2 class="ui header">Cara Kerja <br><small>Lihat bagaimana kami memudahkan kebutuhan digital printing anda.</small></h2>
          <img src="images/how-to-order.jpeg" alt="Cara Kerja" class="ui fluid image" width="300px">
        </div>
      </div>
    </div>
  </div>
  <!-- END How to Section -->

  <!-- Contact Form -->
  <div id="contact-section" class="ui green bg divsection">
    <div class="ui container">
      <div class="ui stackable center aligned grid">
        <div class="column">
          <h2 class="ui centered header white text">
            Ingin memesan? <br>
            <small>Hubungi kami sekarang juga dan dapatkan promo menarik</small>
          </h2>
          <a href="https://api.whatsapp.com/send?phone=6282133940007" class="ui inverted huge labeled icon rounded border contact button">
            <i class="square call icon"></i>
            082133940007
          </a>
        </div>
      </div>
    </div>
  </div>
  <!-- END Contact Form -->

  <!-- Footer -->
  <div class="ui inverted vertical footer segment">
    <br>
    <div class="ui container">
      <div class="ui stackable inverted equal height stackable grid">
          <div class="ui one wide column">
            <img src="images/logo.jpg" class="ui circular small image" width="auto" alt="">
        </div>
        <div class="five wide column">
          <h5 class="ui inverted header">&copy; 2017 - Mobilan Digital Printing</h5>
          <div class="ui inverted link list">
            <a href="#" class="item green text"><i class="envelope icon"></i>&nbsp; mdp@mobilan.id</a>
            <a href="#" class="item"><i class="call icon"></i>&nbsp; 0821 3394 0007</a>
            <a href="#" class="item"><i class="marker icon"></i>&nbsp; Jl. Dr Soepomo no. 66 Surakarta, Jawa Tengah, Indonesia</a>
          </div>
        </div>
        <div class="ten wide right aligned column">
          <div class="ui inverted horizontal link list">
            <a href="#" class="item">FAQ</a>
            <a href="#" class="item">Tentang Kami</a>
            <a href="#" class="item">Kebijakan Privasi</a>
            <a href="#" class="item">Syarat & Ketentuan</a>
            <a href="#header-section" class="item"><small class="visible-xs">Ke atas</small>&nbsp; <i class="chevron up icon noresize"></i></a>
          </div>
          <br>
          <div class="ui inverted horizontal icon link list">
            <a href="<?php echo $socialmedia['facebook']; ?>" class="item noblock"><i class="facebook square icon"></i></a>
            <a href="<?php echo $socialmedia['instagram']; ?>" class="item noblock"><i class="instagram icon"></i></a>
            <a href="<?php echo $socialmedia['twitter']; ?>" class="item noblock"><i class="twitter icon"></i></a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- END Footer -->

  <!-- Modal Section -->
  <!-- <div class="ui tiny modal">
    <div class="header">X-Banner</div>
    <div class="scrolling content">
      <div class="ui stackable grid">
        <div class="ui row">
          <div class="ui one wide column hidden-xs"><i class="checkmark icon"></i></div>
          <div class="ui eleven wide column">
            <a href="#"><strong>Analytical on advanced level</strong></a><br>
            Lorem ipsum dolor sit amet balaka dum
          </div>
          <div class="ui four wide column"><div class="ui mini green button">Rp 125.000</div></div>
        </div>
        <div class="ui divider"></div>
        <div class="ui row">
          <div class="ui one wide column hidden-xs"><i class="checkmark icon"></i></div>
          <div class="ui eleven wide column">
            <a href="#"><strong>Analytical on advanced level</strong></a><br>
            Lorem ipsum dolor sit amet balaka dum
          </div>
          <div class="ui four wide column"><div class="ui mini green button">Rp 125.000</div></div>
        </div>
        <div class="ui divider"></div>
        <div class="ui row">
          <div class="ui one wide column hidden-xs"><i class="checkmark icon"></i></div>
          <div class="ui eleven wide column">
            <a href="#"><strong>Analytical on advanced level</strong></a><br>
            Lorem ipsum dolor sit amet balaka dum
          </div>
          <div class="ui four wide column"><div class="ui mini green button">Rp 150.000</div></div>
        </div>
        <div class="ui divider"></div>
        <div class="ui row">
          <div class="ui one wide column hidden-xs"><i class="checkmark icon"></i></div>
          <div class="ui eleven wide column">
            <a href="#"><strong>Analytical on advanced level</strong></a><br>
            Lorem ipsum dolor sit amet balaka dum
          </div>
          <div class="ui four wide column"><div class="ui mini green button">Rp 150.000</div></div>
        </div>
        <div class="ui divider"></div>
        <div class="ui row">
          <div class="ui one wide column hidden-xs"><i class="checkmark icon"></i></div>
          <div class="ui eleven wide column">
            <a href="#"><strong>Analytical on advanced level</strong></a><br>
            Lorem ipsum dolor sit amet balaka dum
          </div>
          <div class="ui four wide column"><div class="ui mini green button">Rp 150.000</div></div>
        </div>
        <div class="ui divider"></div>
        <div class="ui row">
          <div class="ui one wide column hidden-xs"><i class="checkmark icon"></i></div>
          <div class="ui eleven wide column">
            <a href="#"><strong>Analytical on advanced level</strong></a><br>
            Lorem ipsum dolor sit amet balaka dum
          </div>
          <div class="ui four wide column"><div class="ui mini green button">Rp 150.000</div></div>
        </div>
      </div>
    </div>
    <div class="actions">
      <div class="ui black deny button">
        Close
      </div>
    </div>
  </div> -->
  <!-- End Modal Section -->

<script type="text/javascript" src="js/jquery-1.12.0.min.js"></script>
<script type="text/javascript" src="js/semantic.min.js"></script>
<script type="text/javascript">
$(document).ready(function() {
  $(".sidebar.item")
    .popup({
      on: "click",
      popup: $(".popup"),
      position: "bottom center",
      variation: "basic large"
    });

  $('.special.cards .image').dimmer({
    on: 'hover'
  });
})

// Trigger Product Modal
$(".product.button").click(function() {
  $(".ui.modal").modal("show");
})

// Top Menu Indicator
$('.ui.menu a.item')
  .on('click', function() {
  $(this)
    .addClass('active')
    .siblings()
    .removeClass('active')
  ;
})
;

// Loading when contact phone number
$(".contact.button").click(function() {
  $(this).toggleClass("loading")
})

// Smooth scrolling
$(function() {
  $('a[href*="#"]:not([href="#"])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html, body').animate({
          scrollTop: target.offset().top
        }, 1000);
        return false;
      }
    }
  });
}); // Smooth scrolling
</script>
</body>
</html>
