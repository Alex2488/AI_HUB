<!-- jquery include -->
<script src="{{url('/')}}/assets/js/jquery-3.4.1.min.js"></script>
<script src="{{url('/')}}/assets/js/popper.min.js"></script>
<script src="{{url('/')}}/assets/js/bootstrap.min.js"></script>

<!-- slider & carousel - jquery include -->
<script src="{{url('/')}}/assets/js/owl.carousel.min.js"></script>

<!-- animation - jquery include -->
<!-- <script src="assets/js/aos.js"></script> -->
<script src="{{url('/')}}/assets/js/splitting.js"></script>

<!-- magnific popup - jquery include -->
<script src="{{url('/')}}/assets/js/magnific-popup.min.js"></script>

<!-- isotope filter - jquery include -->
<script src="{{url('/')}}/assets/js/isotope.pkgd.min.js"></script>
<script src="{{url('/')}}/assets/js/masonry.pkgd.min.js"></script>
<script src="{{url('/')}}/assets/js/imagesloaded.pkgd.min.js"></script>

<!-- mouse move & scroll parallax  - jquery include -->
<script src="{{url('/')}}/assets/js/parallax.min.js"></script>
<script src="{{url('/')}}/assets/js/parallax-scroll.js"></script>
<script src="{{url('/')}}/assets/js/aos.js"></script>

<!-- google map - jquery include -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAhrdEzlfpnsnfq4MgU1e1CCsrvVx2d59s"></script>
<script src="{{url('/')}}/assets/js/gmaps.js"></script>

<!-- mobile menu - jquery include -->
<script src="{{url('/')}}/assets/js/mCustomScrollbar.js"></script>

<!-- custom - jquery include -->
<script src="{{url('/')}}/assets/js/custom.js"></script>

<script src="{{url('/')}}//assets/js/bs-custom-file-input/bs-custom-file-input.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>

<script type="text/javascript">

    $('.show_confirm').click(function (event) {
        var form = $(this).closest("form");
        var name = $(this).data("title-service");
        event.preventDefault();
        swal({
            title: `Ви впевнені, що хочете видалити ${name} ?`,
            text: "Якщо ви видалите, запис зникне назавжди.",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        })
            .then((willDelete) => {
                if (willDelete) {
                    form.submit();
                }
            });
    });

</script>

<script>
    $(function () {
        bsCustomFileInput.init();
    });
</script>

<script>
    const prevButton = document.querySelector('.prev');
const nextButton = document.querySelector('.next');
const slides = document.querySelector('.slides');

let currentIndex = 0;

nextButton.addEventListener('click', () => {
if (currentIndex < 2) {
currentIndex++;
slides.style.transform = `translateX(-${currentIndex * 100}%)`;
}
});

prevButton.addEventListener('click', () => {
if (currentIndex > 0) {
currentIndex--;
slides.style.transform = `translateX(-${currentIndex * 100}%)`;
}
});
</script>


