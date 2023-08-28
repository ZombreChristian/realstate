@extends('admin.admin_dashboard')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js">

</script>
@section('admin')
<div class="page-content">


            <div class="row profile-body">


                    <!-- middle wrapper start -->
                    <div class="col-md-8 col-xl-8 middle-wrapper">

                            <div class="card">
                                <div class="card-body">
                                                  <h6 class="card-title">Ajouter droit</h6>
                                                <form method="POST" action="{{route('store.permission')}}" class="forms-sample" enctype="multipart/form-data">
                                                    @csrf
                                                      <div class="form-group">
                                                        <input type="hidden" name="id" value="">

                                                          <label for="exampleInputUsername1">Nom droit</label>
                                                          <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" autocomplete="off" >
                                                          @error('name')
                                                            <span class="text-danger">{{ $message}}</span>
                                                          @enderror
                                                      </div>
                                                      <div class="form-group">
                                                        <label for="exampleInputUsername1">Nom groupe</label>
                                                        <select name="group_name" class="form-select @error('group_name') is-invalid @enderror" id="exampleFormControlSelect1" >
                                                            <option selected="" disabled="" >Select Group</option>
                                                            <option value="personnel">Personnels</option>
                                                            <option value="permanence">Permanencier</option>
                                                            <option value="amo">AMO</option>
                                                            <option value="role">Role & Permission</option>
                                                        </select>
                                                        @error('group_name')
                                                        <span class="text-danger">{{ $message}}</span>
                                                      @enderror

                                                    </div>


                                                      <button type="submit" class="btn btn-primary mr-2">Save changes</button>
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
