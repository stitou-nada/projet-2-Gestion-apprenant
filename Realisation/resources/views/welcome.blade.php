
<!DOCTYPE html>
<html lang="en">
<head>
@include('layouts.heade')
</head>
<body id="bod">
<header class="header">
    @include('layouts.header')

</header>



<div class="container-xl tableBody ">
    @include('layouts.navbar')





	<div class="table-responsive">
		<div class="table-wrapper">
			<div class="table-title">
				<div class="row">
					<div class="col">
								<div class="search-box">
									{{-- <i class="material-icons">&#xE8B6;</i> --}}
									<input type="text" id="search" class="form-control  searchInput" placeholder="Search&hellip;">
								</div>
					</div>
					<div class="col-sm-6">
						<a href="#addEmployeeModal" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Ajouter Promotion</span></a>
					</div>
				</div>
			</div>

			<table class="table table-striped table-hover">
				<thead>
					<tr>
						<th>

						</th>
						<th>Id</th>
						<th>Name promotion</th>
						<th></th>
						<th></th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>

						</td>
						<td>Thomas Hardy</td>
						<td>thomashardy@mail.com</td>
						<td></td>
						<td></td>
						<td>
							<a href="#editEmployeeModal" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
							<a href="#deleteEmployeeModal" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
						</td>
					</tr>
				</tbody>
			</table>

		</div>
	</div>
</div>


</body>
</html>

