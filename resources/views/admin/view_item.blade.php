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
       .table_deg {
           width: 80%;
           border-collapse: collapse;
           margin: 50px 0;
           font-size: 18px;
           text-align: left;
       }
       .table_deg th, .table_deg td {
           padding: 12px;
           border: 1px solid #ddd;
       }
       .table_deg th {
           background-color: #f2f2f2;
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
                <div class="div_deg">
                    <table class="table_deg">
                        <tr>
                            <th>Item Title</th>
                            <th>Description</th>
                            <th>Category</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th>Image</th>
                            <th>Delete</th>
                            <th>Edit</th>
                        </tr>

                        @foreach($items as $item)
                        <tr>
                            <td>{{ $item->title }}</td>
                            <td>{{ $item->description }}</td>
                            <td>{{ $item->category }}</td>
                            <td>{{ $item->price }}</td>
                            <td>{{ $item->quantity }}</td>
                            <td>
                                <img src="/items/{{ $item->image }}" alt="Item Image" width="100" height="100">
                            </td>
                                <td>
                                    <a class="btn btn-success" href="{{ route('update_item',$item->id)}}">Edit</a>
                                </td>
                            <td>
                                <a class="btn btn-danger" href="{{ route('delete_item',$item->id)}}">Delete</a>
                            </td>
                        </tr>
                        @endforeach
                    </table>
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
