  @if(count($errors)>0)
  
  <div class="alert warning ">
      <span class="closebtn">&times;</span>  
      <ul>
        @foreach($errors->all() as $error)
          <li>{!!$error!!}</li>
        @endforeach
      </ul>
  
</div>
  @endif