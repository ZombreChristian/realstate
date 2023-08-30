@extends('admin.admin_dashboard')

@section('admin')

<div class="page-content">

    <nav class="page-breadcrumb">
        <ol class="breadcrumb">
            <button type="button" class="btn btn-inverse-info" data-toggle="modal" data-target="#exampleModal">
                Ajouter Profil
            </button>
            <!--  modale -->

            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Ajouter un Profil</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="card">
                                <div class=" card-body">
                                    <form method="POST" action="{{route('store.roles')}}" class="forms-sample"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group">
                                            <input type="hidden" name="id" value="">

                                            <label for="exampleInputUsername1">Nom profil</label>
                                            <input type="text" class="form-control @error('name') is-invalid @enderror"
                                                name="name" autocomplete="off">
                                            @error('name')
                                            <span class="text-danger">{{ $message}}</span>
                                            @enderror
                                        </div>



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
        </ol>
    </nav>

    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title">Liste droit de profile</h6>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Id#</th>
                                    <th>Nom profile</th>
                                    <th>Permission</th>
                                    <th>Action</th>

                                </tr>
                            </thead>

                            <tbody>
                                @foreach ($roles as $key => $item )
                                <tr>
                                    <td>{{$key + 1}}</td>
                                    <td>{{$item->name}}</td>

                                    <td>
                                        @foreach ($item->permissions as $perm )
                                        <span class="badge bg-danger">
                                            {{$perm->name}}
                                        </span>

                                        @endforeach

                                    </td>

                                    <td>
                                        <a href="{{route('admin.edit.roles',$item->id)}}"
                                            class="btn btn-inverse-warning"><i data-feather="edit"></i></a>
                                        <a href="{{route('admin.delete.roles',$item->id)}}"
                                            class="btn btn-inverse-danger" id="delete"><i
                                                data-feather="trash-2"></i></a>

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