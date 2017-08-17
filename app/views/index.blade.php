<html>
<body>
    <form method="POST" action="{{ URL::to('/make-url') }}">
    <input name="url"/>
    <button type="submit">MAke URL </button>
@if($errors->first('url'))
{{ $errors->first('url') }}
@endif

</body>
</html>
