@if($errors->any())
    <div class="alert alert-danger" id="dangeralert">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error ?? ''}}</li>
            @endforeach
        </ul>
    </div>
@endif

<script>
    $( document ).ready(function() {
        setTimeout(function () {
            $('#dangeralert').fadeOut('fast');
        }, 3000);
    });
</script>
