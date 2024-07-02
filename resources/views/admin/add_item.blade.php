<!DOCTYPE html>
<html>
<head>
   @include('admin.css')

   <style type="text/css">
       .div_deg {
           display: flex;
           justify-content: center;
           align-items: center;
           margin-top: 60px;
       }

       .form-group {
           margin-bottom: 15px;
       }

       label {
           display: block;
           margin-bottom: 5px;
           color : white;
       }

       input[type="text"], input[type="number"], textarea, select {
           width: 100%;
           padding: 8px;
           margin-top: 5px;
       }

       h1
       {
        color : white;
       }
   </style>
</head>
<body>
    @include('admin.header')
    @include('admin.sidebar')
    
    <!-- Sidebar Navigation end-->
    <div class="page-content">
        <div class="page-header">
            <div class="container-fluid">
                <div>
                    <form action="{{ route('upload_item')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label>Product Title</label>
                            <input type="text" name="title" required>
                        </div>

                        <div class="form-group">
                            <label>Description</label>
                            <textarea name="description" required></textarea>
                        </div>

                        <div class="form-group">
                            <label>Price</label>
                            <input type="text" name="price" required>
                        </div>

                        <div class="form-group">
                            <label>Quantity</label>
                            <input type="number" name="qty" required>
                        </div>

                        <div class="form-group">
                            <label>Product Category</label>
                            <select name="category" required>
                                <option value="">Select a Category</option>
                                @foreach($categories as $category)
                                    <option value="{{$category->id}}">{{$category->category_name}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Product Image</label>
                            <input type="file" name="image" required>
                        </div>

                        <div class="form-group">
                            <input class="btn btn-primary" type="submit" value="Add Product">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- JavaScript files-->
    <script src="{{ asset('admincss/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('admincss/vendor/popper.js/umd/popper.min.js') }}"></script>
    <script src="{{ asset('admincss/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('admincss/vendor/jquery.cookie/jquery.cookie.js') }}"></script>
    <script src="{{ asset('admincss/vendor/chart.js/Chart.min.js') }}"></script>
    <script src="{{ asset('admincss/vendor/jquery-validation/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('admincss/js/charts-home.js') }}"></script>
    <script src="{{ asset('admincss/js/front.js') }}"></script>
</body>
</html>
