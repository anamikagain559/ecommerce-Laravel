@extends('admin.admin_layouts')
@section('admin_content')
  <!-- ########## START: MAIN PANEL ########## -->
    <div class="sl-mainpanel">
      <div class="sl-pagebody">
        <div class="sl-page-title">
          <h5>Sub Category Update</h5>
        </div><!-- sl-page-title -->

        <div class="card pd-20 pd-sm-40">
          <div class="d-flex justify-content-between align-items-center mg-b-15">
              <h6 class="card-body-title tx-uppercase tx-14 tx-bold tx-inverse mg-b-0">Sub Category Update</h6>
              <a href="{{ route('sub.categories') }}" class="btn btn-sm btn-info"><i class="fa fa-list mg-r-10"></i> All Sub Categories</a>
          </div>
          <br>
          <div class="form-layout">
              @if ($errors->any())
                  <div class="alert alert-danger">
                      <ul>
                          @foreach ($errors->all() as $error)
                              <li>{{ $error }}</li>
                          @endforeach
                      </ul>
                  </div>
              @endif
            <form method="post" action="{{ url('update/subcategory/'.$subcat->id) }}">
              @csrf
              <div class="form-group pd-b-20">
                  <label class="form-control-label">SubCategory Name: <span class="tx-danger">*</span></label>
                  <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $subcat->subcategory_name }}" name="subcategory_name">
              </div>
              <div class="form-group pd-b-20">
                  <label class="form-control-label">Category: <span class="tx-danger">*</span></label>
                  <select class="form-control" name="category_id">
                  	@foreach($category as $row)
                  	<option value="{{ $row->id }}" <?php if ($row->id == $subcat->category_id) {
                  		echo "selected";
                  	} ?> >{{ $row->category_name }}</option>
                  	@endforeach
                  </select>
              </div>
              <div class="form-layout-footer text-center mg-t-30">
                <button type="submit" class="btn btn-info pd-x-20"><i class="fa fa-save mg-r-10"></i> Update Sub Category</button>
              </div>
            </form>
          </div><!-- form-layout -->
        </div><!-- card -->
      </div><!-- sl-pagebody -->



@endsection
