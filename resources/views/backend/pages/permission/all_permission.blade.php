@extends('admin.admin_dashboard')

@section('admin')

<div class="page-content">

                    <nav class="page-breadcrumb">
                        <ol class="breadcrumb">

                            <a href="{{route('add.permission')}}" class="btn btn-inverse-info">Ajouter droit</a>
                            &nbsp;&nbsp;&nbsp;
                            <a href="{{route('import.permission')}}" class="btn btn-inverse-warning">Importer</a>
                            &nbsp;&nbsp;&nbsp;

                            <a href="{{route('export')}}" class="btn btn-inverse-danger">Exporter</a>



                        </ol>

                    </nav>

                    <div class="row">
                        <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                <div class="card-body">
                    <h6 class="card-title">Liste droits</h6>
                    <div class="table-responsive">
                    <table id="dataTableExample" class="table">
                        <thead>
                        <tr>
                            <th>Id#</th>
                            <th>Nom droit</th>
                            <th>Nom groupe</th>
                            <th>Action</th>

                        </tr>
                        </thead>

                        <tbody>
                        @foreach ($permissions as $key => $item )
                        <tr>
                            <td>{{$key + 1}}</td>
                            <td>{{$item->name}}</td>
                            <td>{{$item->group_name}}</td>

                            <td>
                                <a href="{{route('edit.permission',$item->id)}}" class="btn btn-inverse-warning"><i data-feather="edit"></i></a>
                                <a href="{{route('delete.permission',$item->id)}}" class="btn btn-inverse-danger" id="delete"><i data-feather="trash-2"></i></a>

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
