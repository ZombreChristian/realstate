@extends('admin.admin_dashboard')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js">

</script>
@section('admin')
<div class="page-content">

    <nav class="page-breadcrumb">
        <ol class="breadcrumb">

            <a href="{{route('export')}}" class="btn btn-inverse-danger">Download Xlsx</a>

        </ol>

    </nav>


            <div class="row profile-body">


                    <!-- middle wrapper start -->
                    <div class="col-md-8 col-xl-8 middle-wrapper">

                            <div class="card">
                                <div class="card-body">
                                                  <h6 class="card-title">Import Permission</h6>
                                                <form method="POST" action="{{route('import')}}" class="forms-sample" enctype="multipart/form-data">
                                                    @csrf
                                                      <div class="form-group">

                                                          <label for="exampleInputUsername1">Xlsx File Import</label>
                                                          <input type="file" class="form-control @error('name') is-invalid @enderror" name="import_file" autocomplete="off" >
                                                          @error('name')
                                                            <span class="text-danger">{{ $message}}</span>
                                                          @enderror
                                                      </div>


                                                      <button type="submit" class="btn btn-warning  mr-2">Upload</button>
                                                  </form>
                                </div>
                              </div>


                    </div>

                    <!-- middle wrapper end -->
                    <!-- right wrapper start -->

                    <!-- right wrapper end -->
        </div>

</div>

@endsection
