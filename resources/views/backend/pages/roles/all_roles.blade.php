@extends('admin.admin_dashboard')

@section('admin')

<div class="page-content">

    <nav class="page-breadcrumb">
        <ol class="breadcrumb">
            <a href="{{route('add.roles')}}" class="btn btn-inverse-info">Ajouter profile</a>
        </ol>

    </nav>

    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
<div class="card">
  <div class="card-body">
    <h6 class="card-title">Liste profile</h6>
    <div class="table-responsive">
      <table id="dataTableExample" class="table">
        <thead>
          <tr>
            <th>Id#</th>
            <th>Nom profile</th>
            <th>Action</th>

          </tr>
        </thead>

        <tbody>
          @foreach ($roles as $key => $item )
          <tr>
            <td>{{$key + 1}}</td>
            <td>{{$item->name}}</td>

            <td>
                <a href="{{route('edit.roles',$item->id)}}" class="btn btn-inverse-warning"><i data-feather="edit"></i></a>
                <a href="{{route('delete.roles',$item->id)}}" class="btn btn-inverse-danger" id="delete"><i data-feather="trash-2"></i></a>

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
