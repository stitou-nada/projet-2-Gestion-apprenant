
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Bootstrap CRUD Data Table for Database with Modal Form</title>
<link rel="stylesheet" href="{{asset('css/header.css')}}">
<link rel="stylesheet" href="{{asset("css/main.css")}}">
<link rel="stylesheet" href="{{asset('css/table.css')}}">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
{{-- daxbord --}}
<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
<link href="{{asset('assets/css/nucleo-icons.css')}}" rel="stylesheet" />
<link href="{{asset('assets/css/nucleo-svg.css')}}" rel="stylesheet" />
<link rel="apple-touch-icon" sizes="76x76" href="{{asset('assets/img/apple-icon.png')}}">
<link rel="icon" type="image/png" href="{{asset('assets/img/favicon.png')}}" >
<!-- Font Awesome Icons -->
<script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
<!-- Material Icons -->
<link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
<!-- CSS Files -->
<link id="pagestyle" href="{{asset('assets/css/material-dashboard.css?v=3.0.0')}}" rel="stylesheet" />
{{-- fin daxbord --}}
<script src="{{asset('js/table.js')}}"></script>


</head>
<body id="bod">
<header class="header">
    <div class="header-box">
        <img class="logo" src="{{asset('img/R.png')}}"  alt="">
        <h1 class="title-header">Gestion d'amprenant</h1>
    </div>
    <div class="devHeader">
            <p class="devHeaderText">Hello/index/</p>
    </div>

</header>



<div class="container-xl tableBody ">
    <aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-dark
    " id="sidenav-main" >
        <div class="sidenav-header">
          <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
          <a class="navbar-brand m-0" href=" https://demos.creative-tim.com/material-dashboard/pages/dashboard " target="_blank">
            <span class="ms-1 font-weight-bold text-white">Material Dashboard 2</span>
          </a>
        </div>
        <hr class="horizontal light mt-0 mb-2">
        <div class="collapse navbar-collapse  w-auto  max-height-vh-100" id="sidenav-collapse-main">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link text-white active bg-gradient-primary" href="../pages/dashboard.html">
                <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                  <i class="material-icons opacity-10">dashboard</i>
                </div>
                <span class="nav-link-text ms-1">Dashboard</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white " href="../pages/tables.html">
                <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                  <i class="material-icons opacity-10">table_view</i>
                </div>
                <span class="nav-link-text ms-1">Tables</span>
              </a>
            </li>







          </ul>
        </div>

      </aside>





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

