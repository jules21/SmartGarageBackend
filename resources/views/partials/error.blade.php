@if(isset($errors) && count($errors)>0)
<div class="alert alert-warning alert-dismissible " role="alert">
 @foreach($errors->all() as $error)
  <strong>{{ $error }}<br \></strong>
  @endforeach
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
@endif


