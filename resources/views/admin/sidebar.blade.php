<div class="d-flex align-items-stretch">
      <!-- Sidebar Navigation-->
      <nav id="sidebar">
        <!-- Sidebar Header-->
        <div class="sidebar-header d-flex align-items-center">
          <div class="avatar"><img src="{{asset('admincss/img/avatar-6.jpg')}}" alt="..." class="img-fluid rounded-circle"></div>
          <div class="title">
            <h1 class="h5">ADMIN</h1>
            <p>ADMIN PAGE</p>
          </div>
        </div>
        <!-- Sidebar Navidation Menus--><span class="heading">Main</span>
        <ul class="list-unstyled">
                <li class="active"><a href="index.html"> <i class="icon-home"></i>Home </a></li>

                <li>
                 <a href="{{ route ('view_category')}}"> <i class="icon-grid"></i>Category </a>

                    </a>
                </li>

                
                <li><a href="#exampledropdownDropdown" aria-expanded="false" data-toggle="collapse"> <i class="icon-windows">    
                </i>Product</a>
                  <ul id="exampledropdownDropdown" class="collapse list-unstyled ">
                    <li><a href="{{ route('add_item')}}">Edit Product</a></li>
                    <li><a href="{{ route('view_item')}}">view Product</a></li>
                    <li><a href="#">Page</a></li>
                  </ul>
                </li>
      </nav>