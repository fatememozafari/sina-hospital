@if(session()->has('success'))
    <div class="alert alert-success" id="dangeralert">{{session()->get('success')}}</div>
@endif

<script>
    $( document ).ready(function() {
        setTimeout(function () {
            $('#dangeralert').fadeOut('fast');
        }, 3000);
    });
</script>

