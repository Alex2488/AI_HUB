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

{{--<!-- google map - jquery include -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAhrdEzlfpnsnfq4MgU1e1CCsrvVx2d59s"></script>
<script src="{{url('/')}}/assets/js/gmaps.js"></script>--}}

<!-- mobile menu - jquery include -->
<script src="{{url('/')}}/assets/js/mCustomScrollbar.js"></script>

<!-- custom - jquery include -->
<script src="{{url('/')}}/assets/js/custom.js"></script>

<script src="{{url('/')}}//assets/js/bs-custom-file-input/bs-custom-file-input.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>

<script type="text/javascript">

    $('.show_confirm').click(function (event) {
        var form = $(this).closest("form");
        var name = $(this).data("name");
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

<script src="https://cdn.tiny.cloud/1/ubajajo51x9elxdo5umbj91pne7ub7gigp3u4h844ke8qt2i/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>


<script>
    tinymce.init({
        selector: '.editor',
        plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount checklist mediaembed casechange export formatpainter pageembed linkchecker a11ychecker tinymcespellchecker permanentpen powerpaste advtable advcode editimage tinycomments tableofcontents footnotes mergetags autocorrect typography inlinecss',
        toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table mergetags | addcomment showcomments | spellcheckdialog a11ycheck typography | align lineheight | checklist numlist bullist indent outdent | emoticons charmap | removeformat',
        tinycomments_mode: 'embedded',
        tinycomments_author: 'Author name',
        mergetags_list: [
            { value: 'First.Name', title: 'First Name' },
            { value: 'Email', title: 'Email' },
        ]
    });
</script>


<script src="{{url('/')}}/assets/js/droplist.js"></script>


<!-- Include the Quill library -->
<script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>

<!-- Initialize Quill editor -->
<script>
    $(document).ready(function () {
        var quill = new Quill('#editor', {
            theme: 'snow'
        });
        quill.on('text-change', function(delta, oldDelta, source) {
                $('#content-textarea').text($('.ql-editor').html());
        });
    })

</script>



