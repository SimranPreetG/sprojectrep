<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Laravel Quickstart - Basic</title>
<meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <!-- CSS And JavaScript -->
    </head>

    <body>
        <div class="container">
            <nav class="navbar navbar-default">
                <!-- Navbar Contents -->
            </nav>
			<div class="panel-body">
				<a href="{{url('sproject/adduser')}}"><button type="button" class="btn btn-success">Add User</button></a>
                <table class="table table-striped task-table">

                    <!-- Table Headings -->
                    <thead>
                        <th>Id</th>
						<th>Name</th>
                    </thead>

                    <!-- Table Body -->
                    <tbody>
                        @foreach ($users as $user)
                            <tr>
                                <!-- Task Name -->
								<td class="table-text">
                                    <div>{{ $user->id }}</div>
                                </td>
                                <td class="table-text">
                                    <div>{{ $user->name }}</div>
                                </td>
								<td class="table-text">
                                    <button type="button" class="btn btn-primary">Edit</button>
                                </td>
                                <td class="table-text">
                                    <button type="button" class="btn btn-danger">Delete</button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        @yield('content')
    </body>
</html>
</html>