<style>
    .navbar .navbar-nav .nav-item .nav-link{
        padding: 10px;
        background-color: white;
        color: rgba(255, 25, 0, 0.85);
        margin: 20px 0 0 30px;
        border-radius: 10px;
        font-weight: bold;
    }

</style>
<header>
    <div class="top-header flex-container">
        <div class="logo">FAQ</div>
        <div class="reg">
        <div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false">
    admin@gmail.com
  </button>
  <ul class="dropdown-menu dropdown-menu-light" aria-labelledby="dropdownMenuButton2">
    <li><a class="dropdown-item " href="#">Lock Screen</a></li>
    <li><a class="dropdown-item" href="#">Satting</a></li>
    <li><a class="dropdown-item" href="#">Profile</a></li>
    <li><hr class="dropdown-divider"></li>
    <li><a class="dropdown-item" href="#">Log out</a></li>
  </ul>
</div>
        </div>
    </div>
    <div class="search">
    <nav class="navbar navbar-expand-lg navbar-light ">
        <div class="container-fluid">
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="{{url('faq-create')}}">Create Faq</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="{{url('admin-index')}}">Manage Faq</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
        
    </div>
</header>