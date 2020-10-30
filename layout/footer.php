<!-- footer section -->
<div class="navbar navbar-inverse navbar-fixed-bottom footer felem">
      <div class="container d-inline-flex justify-content-end footer">
        <div class="d-flex social">
            <div class="header-social-mobile"><a href="mailto:support@batzawaj .com"><i class="fa fa-envelope-o"></i></a></div>
            <div class="header-social-mobile"><a href="https://www.youtube.com/channel/UCX6aVmym2-aZQPDvUmZHidg" target="blank"><i class="fa fa-youtube-play"></i></a></div>
            <div class="header-social-mobile"><a href="https://www.facebook.com/batzawaj/" target="blank"><i class="fa fa-facebook"></i></a></div>
            <div class="header-social-mobile"><a href="https://www.instagram.com/batzawaj_app/" target="blank"><i class="fa fa-instagram"></i></a></div>
        </div>
        <div class="d-flex">
        <p dir="rtl">©&nbsp;2020&nbsp;بتزوج. جميع الحقوق محفوظة  <span>&nbsp;&nbsp; | &nbsp;&nbsp;</span> أحد منتجات شركة مينستريم </p>
        </div>
      </div>
    </div>

    <!-- end footer section -->
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script type="text/javascript" class="footer_script">
        CheckFooterElement = () =>{
        let w = window.location.pathname,
        f = document.querySelector(".felem"),
        r = document.querySelectorAll(".radio-item"),
        d = window.innerWidth;
        if(w === "/batzawaj/second.php" && r.length < 4 && d > 480){
                f.classList.add("footer__container");
                console.log(f);
        }else{
                f.classList.remove("footer__container");
        }
        }
        CheckFooterElement();
</script>

<script>
$(document).ready(function() {
    var full_check = true;
    $(".btn-second-success").click(function() {
        full_check = true;
        for (var i = 1; i <= 9; i++) {
            console.log($("input[name='ritem" + i + "']:checked").val());
            if(!$("input[name='ritem" + i + "']:checked").val()) {
                full_check = false;
                break;
            }
        }

        if(!full_check){
            $('.error-message').css('display', 'block');
        } else{
            $('form#answer').submit();
        }

    });
});

</script>
<script type="text/javascript">

AddDirToElements = () => {
    let l = document.querySelectorAll(".radio-item label");
    l.forEach(el => {
        el.setAttribute("dir" , "auto")
    });
}
AddDirToElements();

    var x, i, j, l, ll, selElmnt, a, b, c;
    x = document.getElementsByClassName("custom-select-container");
    l = x.length;
    for (i = 0; i < l; i++) {
        selElmnt = x[i].getElementsByTagName("select")[0];
        ll = selElmnt.length;
        a = document.createElement("DIV");
        a.setAttribute("class", "select-selected");
        a.innerHTML = selElmnt.options[selElmnt.selectedIndex].innerHTML;
        x[i].appendChild(a);
        b = document.createElement("DIV");
        b.setAttribute("class", "select-items select-hide");

        for (j = 1; j < ll; j++) {

            c = document.createElement("DIV");
            c.innerHTML = selElmnt.options[j].innerHTML;
            c.setAttribute("data-href" , selElmnt.options[j].value);
            c.setAttribute("id", "select_option");

            c.addEventListener("click", function (e) {
                var y, i, k, s, h, sl, yl;
                s = this.parentNode.parentNode.getElementsByTagName("select")[0];
                sl = s.length;
                h = this.parentNode.previousSibling;
                for (i = 0; i < sl; i++) {
                    if (s.options[i].innerHTML == this.innerHTML) {
                        s.selectedIndex = i;
                        h.innerHTML = this.innerHTML;
                        y = this.parentNode.getElementsByClassName("same-as-selected");
                        yl = y.length;
                        for (k = 0; k < yl; k++) {
                            y[k].removeAttribute("class");
                        }
                        this.setAttribute("class", "same-as-selected");
                        a.setAttribute("data-index", this.getAttribute("data-href"));
                        CheckData(this);
                        break;
                    }
                }
                h.click();
            });
            
            // new href location goes here
            function CheckData(v){
                if(v.getAttribute("data-href") === "female"){
                    document.location.href = 'index.php';
                } 
                 if (v.getAttribute("data-href") === "male"){
                    document.location.href = 'index-male.php';
                }
            }

            b.appendChild(c);
        }
        x[i].appendChild(b);
        a.addEventListener("click", function (e) {

            e.stopPropagation();
            closeAllSelect(this);
            this.nextSibling.classList.toggle("select-hide");
            this.classList.toggle("select-arrow-active");
        });
    }
    function closeAllSelect(elmnt) {

        var x, y, i, xl, yl, arrNo = [];
        x = document.getElementsByClassName("select-items");
        y = document.getElementsByClassName("select-selected");
        xl = x.length;
        yl = y.length;
        for (i = 0; i < yl; i++) {
            if (elmnt == y[i]) {
                arrNo.push(i)
            } else {
                y[i].classList.remove("select-arrow-active");
            }
        }
        for (i = 0; i < xl; i++) {
            if (arrNo.indexOf(i)) {
                x[i].classList.add("select-hide");
            }
        }
    }

    document.addEventListener("click", closeAllSelect);
</script>
</body>
</html>