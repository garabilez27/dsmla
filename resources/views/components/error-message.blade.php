@if(session()->has('error'))
  <div class="col-12">
  	<div class="alert {{ session()->get('error')['class'] }} alert-dismissible">
  	  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
  	  <h5>
  	  	<i class="fa {{ session()->get('error')['icon'] }}"></i>
  	  	{{ session()->get('error')['status'] }}
  	  </h5>
  	  {{ session()->get('error')['content'] }}
  	</div>
  </div>
@endif
