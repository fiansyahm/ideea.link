<!-- cdn jquery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
        
        function setMymargin() {
            const output = document.querySelector(".output");
            output.innerHTML = `scrollTop: ${window.scrollY} <br>
                                scrollLeft: ${window.scrollX} <br>
                                `;
        }

        

        // document ready,scroll,ets
        $(document).ready(function() {
            // $("#disc").click(function() {
            //     var style = checkMarginLeft();
            //     if (style.marginLeft.toString() == "110px") {
            //         playAudio();
            //     } else {
            //         stopAudio();
            //     }
            // });
        });

        $(document).scroll(function() {

            // setMymargin();
            var y = window.scrollY;
            if (y <= 10) {
                $("#intro").slideDown(10000);
            }
            else if (y <= 700) {
                $("#penting").fadeIn(10000);
            } 
            else if (y <= 1300) {
                $("#syarat").slideDown(10000);
            } 
            else if (y <= 2100) {
                $("#urus").fadeIn(10000);
            } 
            else if (y <= 3000) {
                $("#biaya").slideDown(10000);
            }
            
        });
    </script>