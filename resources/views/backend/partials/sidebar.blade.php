    <!-- Sidebar -->
    <ul class="sidebar navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="{{ route('admin.index') }}">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span>
        </a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-fw fa-folder"></i>
          <span>Pages</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
          <h6 class="dropdown-header">Login Screens:</h6>
          <a class="dropdown-item" href="#">
            <form class="form-inline" action="{!! route('admin.logout') !!}" method="post">
                   @csrf
                   <input type="submit" value="LogOut" class="btn btn-danger">
                 </form></a>
        </div>
      </li>
      {{-- <li class="nav-item">
        <a class="nav-link" href="#">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Order </span></a>
      </li> --}}
      <li class="nav-item">
        <a class="nav-link" href="{!! route('admin.reguser') !!}">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Reg Student </span></a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-fw fa-folder"></i>
          <span>Category</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">

          <a class="dropdown-item" href="{!! route('admin.categories.create') !!}">Add Category</a>
          <a class="dropdown-item" href="{!! route('admin.categories') !!}">View Category</a>

        </div>
      </li>

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-fw fa-folder"></i>
          <span>Authors</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">

          <a class="dropdown-item" href="{!! route('admin.author.create') !!}">Add Authors</a>
          <a class="dropdown-item" href="{!! route('admin.authors') !!}">View Authors</a>

        </div>
      </li>


      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-fw fa-folder"></i>
          <span>Books</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">

          <a class="dropdown-item" href="{!! route('admin.book.create') !!}">Add Books</a>
          <a class="dropdown-item" href="{!! route('admin.books') !!}">View Books</a>

        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-fw fa-folder"></i>
          <span>Issue Books</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">

          <a class="dropdown-item" href="{!! route('admin.issuedbook.create') !!}">Add Issue Books</a>
          <a class="dropdown-item" href="{!! route('admin.issuedbooks') !!}">View Issue Books</a>

        </div>
      </li>




    </ul>
