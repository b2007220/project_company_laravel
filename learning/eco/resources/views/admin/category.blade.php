<!DOCTYPE html>
<html>

<head>@include('admin.head')
    <style type="text/css">
        input[type='text'] {
            width: 400px;
            height: 50px;
        }

        .div_deg {
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 30px
        }

        .table_deg {
            text-align: center;
            margin: auto;
            border: 1px solid black;
            margin-top: 50px;
        }

        th {
            background-color: skyblue;
            padding: 15px;
            font-size: 20px;
            font-weight: bold;
            color: white;
        }

        td {
            color: white;
            padding: 10px;
            border: 1px solid skyblue;
        }
    </style>
</head>

<body>
    @include('admin.header')
    @include('admin.sidebar')
    <div class="page-content">
        <div class="page-header">
            <div class="container-fluid">
                <h1 class="text-white">Add Category</h1>

                <div class="div_deg">
                    <form action="{{ route('admin.add-category') }}" method="POST">
                        @csrf
                        <div class="">
                            <input type="text" name="category">
                            <input type="submit" value="Add Category" class="btn btn-primary">
                        </div>
                    </form>
                </div>
                <div class="">
                    <table class="table_deg">
                        <tr>
                            <th>Category</th>
                        </tr>

                        @foreach ($categories as $category)
                            <tr>
                                <td>{{{$category->name}}}</td>
                            </tr>
                        @endforeach

                    </table>
                </div>
            </div>
        </div>
    </div>


    @include('admin.footer')
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
