<script src="{{url('/')}}/assets/js/jquery-3.4.1.min.js"></script>

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
