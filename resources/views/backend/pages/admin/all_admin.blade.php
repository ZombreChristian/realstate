@extends('admin.admin_dashboard')

@section('admin')

<div class="page-content">

    <nav class="page-breadcrumb">
        <ol class="breadcrumb">
            <button type="button" class="btn btn-inverse-info" data-toggle="modal" data-target="#exampleModal">
                Ajouter un utilisateur
            </button>
            <!--  modale -->
            <div class="modal fade " id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Ajouter un Utilisateur</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-12 grid-margin stretch-card">
                                    <div class="card">
                                        <div class=" card-body">
                                            <form method="POST" action="{{route('store.admin')}}" class="forms-sample"
                                                enctype="multipart/form-data" action="{{route('store.admin')}}"
                                                class="forms-sample" enctype="multipart/form-data">
                                                @csrf
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label class="control-label">Nom utilisateur</label>
                                                            <input type="text"
                                                                class="form-control @error('username') is-invalid @enderror"
                                                                name="username" autocomplete="off" value="">
                                                            @error('username')
                                                            <span class="text-danger">{{ $message}}</span>
                                                            @enderror
                                                        </div>
                                                    </div><!-- Col -->
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label class="control-label">Nom</label>
                                                            <input type="text"
                                                                class="form-control @error('name') is-invalid @enderror"
                                                                name="name" autocomplete="off" value="">
                                                            @error('name')
                                                            <span class="text-danger">{{ $message}}</span>
                                                            @enderror
                                                        </div>
                                                    </div><!-- Col -->
                                                </div><!-- Row -->
                                                <div class="row">
                                                    <div class="col-sm-4">
                                                        <div class="form-group">
                                                            <label class="control-label">Adresse Email</label>
                                                            <input type="text"
                                                                class="form-control @error('email') is-invalid @enderror"
                                                                name="email" autocomplete="off" value="">
                                                            @error('email')
                                                            <span class="text-danger">{{ $message}}</span>
                                                            @enderror
                                                        </div>
                                                    </div><!-- Col -->
                                                    <div class="col-sm-4">
                                                        <div class="form-group">
                                                            <label class="control-label">Téléphone</label>
                                                            <input type="phone"
                                                                class="form-control @error('phone') is-invalid @enderror"
                                                                name="phone" autocomplete="off" value="">
                                                            @error('phone')
                                                            <span class="text-danger">{{ $message}}</span>
                                                            @enderror
                                                        </div>
                                                    </div><!-- Col -->
                                                    <div class="col-sm-4">
                                                        <div class="form-group">
                                                            <label class="control-label">Adresse rue</label>
                                                            <input type="text"
                                                                class="form-control @error('address') is-invalid @enderror"
                                                                name="address" autocomplete="off" value="">
                                                            @error('address')
                                                            <span class="text-danger">{{ $message}}</span>
                                                            @enderror
                                                        </div>
                                                    </div><!-- Col -->
                                                </div><!-- Row -->
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label class="control-label">Password</label>
                                                            <input type="password"
                                                                class="form-control @error('password') is-invalid @enderror"
                                                                name="password" autocomplete="off" value="">
                                                            @error('password')
                                                            <span class="text-danger">{{ $message}}</span>
                                                            @enderror
                                                        </div>
                                                    </div><!-- Col -->
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label class="control-label">Profil</label>
                                                            <select name="roles"
                                                                class="form-select @error('group_name') is-invalid @enderror"
                                                                id="exampleFormControlSelect1">
                                                                <option selected="" disabled="">Select Profile</option>
                                                                @foreach ($roles as $role )
                                                                <option value="{{$role->id}}">{{$role->name}}</option>
                                                                @endforeach ()


                                                            </select>
                                                        </div>
                                                    </div><!-- Col -->
                                                </div><!-- Row -->
                                                <button type="submit" class="btn btn-primary mr-2">Enregistrer</button>
                                                <button type="button" class="btn btn-secondary"
                                                    data-dismiss="modal">Fermer</button>

                                            </form>


                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>


                    </div>
                </div>

            </div>

        </ol>
    </nav>

    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title">Admin All</h6>
                    <div class="table-responsive">
                        <table id="dataTableExample" class="table">
                            <thead>
                                <tr>
                                    <th>Id#</th>
                                    <th>Photo</th>
                                    <th>Nom</th>
                                    <th>Email</th>
                                    <th>Telephone</th>
                                    <th>Profile</th>
                                    <th>Action</th>

                                </tr>
                            </thead>

                            <tbody>
                                @foreach ($alladmin as $key => $item )
                                <tr>
                                    <td>{{$key + 1}}</td>
                                    <td>
                                        <img src="{{(!empty($item->photo))?url('upload/admin_images/'.$item->photo):url('upload/no_image.jpg')}}"
                                            alt="profile">
                                    </td>
                                    <td>{{$item->name}}</td>
                                    <td>{{$item->email}}</td>

                                    <td>{{$item->phone}}</td>

                                    <td>
                                        @if ($item->role)
                                        <span class="badge badge-pill bg-danger">{{ $item->role->name }}</span>
                                        @else
                                        <span class="badge badge-pill bg-secondary">Aucun profile</span>
                                        @endif
                                    </td>



                                    <td>


                                        <a class="btn btn-inverse-warning edit" title="Edit" data-toggle="modal"
                                            data-target="#exampleModal"><i data-feather="edit"></i></a>

                                        <!--  modale  EDIT-->

                                        <!--  modale  Edit-->
                                        <div class="modal fade " id="exampleModal" tabindex="-1" role="dialog"
                                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Ajouter un
                                                            Utilisateur</h5>
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="row">
                                                            <div class="col-md-12 grid-margin stretch-card">
                                                                <div class="card">
                                                                    <div class=" card-body">


                                                                        <form method="POST"
                                                                            action="{{route('update.admin',$item->id)}}"
                                                                            class="forms-sample"
                                                                            enctype="multipart/form-data">
                                                                            @csrf


                                                                            <div class="form-group mb-3">
                                                                                <label for="exampleInputUsername1">Nom
                                                                                    utilisateur</label>
                                                                                <input type="text"
                                                                                    class="form-control @error('username') is-invalid @enderror"
                                                                                    name="username" autocomplete="off"
                                                                                    value="{{$item->username}}">
                                                                                @error('username')
                                                                                <span
                                                                                    class="text-danger">{{ $message}}</span>
                                                                                @enderror
                                                                            </div>
                                                                            <div class="form-group mb-3">
                                                                                <label
                                                                                    for="exampleInputUsername1">Nom</label>
                                                                                <input type="text"
                                                                                    class="form-control @error('name') is-invalid @enderror"
                                                                                    name="name" autocomplete="off"
                                                                                    value="{{$item->name}}">
                                                                                @error('name')
                                                                                <span
                                                                                    class="text-danger">{{ $message}}</span>
                                                                                @enderror
                                                                            </div>
                                                                            <div class="form-group mb-3">
                                                                                <label
                                                                                    for="exampleInputUsername1">Adresse
                                                                                    Email</label>
                                                                                <input type="text"
                                                                                    class="form-control @error('email') is-invalid @enderror"
                                                                                    name="email" autocomplete="off"
                                                                                    value="{{$item->email}}">
                                                                                @error('email')
                                                                                <span
                                                                                    class="text-danger">{{ $message}}</span>
                                                                                @enderror
                                                                            </div>
                                                                            <div class="form-group mb-3">
                                                                                <label
                                                                                    for="exampleInputUsername1">Telephone</label>
                                                                                <input type="phone"
                                                                                    class="form-control @error('phone') is-invalid @enderror"
                                                                                    name="phone" autocomplete="off"
                                                                                    value="{{$item->phone}}">
                                                                                @error('phone')
                                                                                <span
                                                                                    class="text-danger">{{ $message}}</span>
                                                                                @enderror
                                                                            </div>
                                                                            <div class="form-group mb-3">
                                                                                <label
                                                                                    for="exampleInputUsername1">Adresse
                                                                                    rue</label>
                                                                                <input type="text"
                                                                                    class="form-control @error('address') is-invalid @enderror"
                                                                                    name="address" autocomplete="off"
                                                                                    value="{{$item->address}}">
                                                                                @error('address')
                                                                                <span
                                                                                    class="text-danger">{{ $message}}</span>
                                                                                @enderror
                                                                            </div>

                                                                            <div class="form-group mb-3">
                                                                                <label
                                                                                    for="exampleInputUsername1">Profil</label>
                                                                                <input type="text"
                                                                                    class="form-control @error('profil') is-invalid @enderror"
                                                                                    name="address" autocomplete="off"
                                                                                    value="{{$item->profil}}">
                                                                                @error('profil')
                                                                                <span
                                                                                    class="text-danger">{{ $message}}</span>
                                                                                @enderror

                                                                            </div>


                                                                        </form>



                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>


                                                    </div>


                                                </div>
                                            </div>

                                        </div>
                                        <a href="{{route('delete.admin',$item->id)}}" class="btn btn-inverse-danger"
                                            id="delete" title="Delete"><i data-feather="trash-2"></i></a>

                                    </td>

                                </tr>
                                @endforeach


                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>






@endsection