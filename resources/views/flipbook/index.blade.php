<!DOCTYPE html>
<html>
  <head>
    <title>Debugging</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="{{ asset('theme/flipbook/css/lightbox.css') }}">
    <link rel="stylesheet" href="{{ asset('theme/flipbook/css/font-awesome.min.css') }}">
  </head>
  <body>

    <style type="text/css">
      .thumbnail {
        display: inline-block;
        width: 120px;
        height: 160px;
        background-color: #ccc;
        margin: 0 5px;
        cursor: pointer;
      }
      .fullscreen {
        background-color: #333;
      }
    </style>

    <div class="books">
      <div class="thumbnail" data-book-id="book1">
        Book 1
      </div>
      <div class="thumbnail" data-book-id="book2">
        Book 2
      </div>
      <div class="thumbnail" data-book-id="book3">
        Book 3
      </div>
    </div>

    <script src="{{ asset('theme/flipbook/js/jquery.min.js')}}"></script>
    <script src="{{ asset('theme/flipbook/js/html2canvas.min.js')}}"></script>
    <script src="{{ asset('theme/flipbook/js/three.min.js')}}"></script>
    <script src="{{ asset('theme/flipbook/js/pdf.min.js')}}"></script>
    <script src="{{ asset('theme/flipbook/js/3dflipbook.min.js')}}"></script>
    <script src="{{ asset('theme/flipbook/js/lightbox.js')}}"></script>

    <script type="text/javascript">
      window.jQuery(function() {
        var $ = window.jQuery;
        var styleClb = function() {
          $('.fb3d-modal').removeClass('light').addClass('dark');
        }, booksOptions = {
          
          book1: {
            pdf: "{{asset('theme/flipbook/books/pdf/CondoLiving.pdf')}}",
            template: {
              html: '/flipbook/default-book',
              styles: [
                "{{asset('theme/flipbook/css/short-white-book-view.css')}}",
              ],
              links: [{
                rel: 'stylesheet',
                href: "{{asset('theme/flipbook/css/font-awesome.min.css')}}"
              }],
              script: "{{asset('theme/flipbook/js/default-book-view.js')}}",
              sounds: {
                startFlip: "{{asset('theme/flipbook/sounds/start-flip.mp3')}}",
                endFlip: "{{asset('theme/flipbook/sounds/end-flip.mp3')}}"
              }
            },
            styleClb: styleClb
          },
          
        };

        var instance = {
          scene: undefined,
          options: undefined,
          node: $('.fb3d-modal .mount-container')
        };

        var modal = $('.fb3d-modal');
        modal.on('fb3d.modal.hide', function() {
          instance.scene.dispose();
        });
        modal.on('fb3d.modal.show', function() {
          instance.scene = instance.node.FlipBook(instance.options);
          instance.options.styleClb();
        });
        $('.books').find('.thumbnail').click(function(e) {
          var target = $(e.target);
          while(target[0] && !target.attr('data-book-id')) {
            target = $(target[0].parentNode);
          }
          if(target[0]) {
            instance.options = booksOptions[target.attr('data-book-id')];
            $('.fb3d-modal').fb3dModal('show');
          }
        });
      });
    </script>

  </body>
</html>
