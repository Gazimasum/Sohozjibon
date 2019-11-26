{{-- 
 <div class="header-left-sidebar">
<div class="main-menu menu-hover" style="margin-bottom:20px;">
  <nav>
<ul class="list-group">
  @foreach (App\Model\Category::orderBy('name', 'asc')->where('status', 1)->get() as $c)
  <li class="list-group-item"> <a href="{!! route('show',$c->id) !!}">
      {{ $c->name }}
    </a>
    </li>
  @endforeach
  </ul>
    </nav>
</div>
</div>
list-group-item list-group-item-action --}}
<div class="header-left-sidebar">
<div class="main-menu menu-hover" style="margin-bottom:20px;">
<div class="list-group">

  @foreach (App\Model\Category::orderBy('name', 'asc')->where('status', 1)->get() as $c)
    <a class="list-group-item list-group-item-action" href="{!! route('show',$c->id) !!}">
        {{ $c->name }}
      </a>  @endforeach

</div>
</div>
</div>
