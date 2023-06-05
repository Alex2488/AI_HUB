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
