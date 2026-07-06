@extends('admin.admin_layouts')
@section('admin_content')
  <!-- ########## START: MAIN PANEL ########## -->
    <div class="sl-mainpanel">
      <div class="sl-pagebody">
        <div class="sl-page-title">
          <h5>Brand Update</h5>
        </div><!-- sl-page-title -->

        <div class="card pd-20 pd-sm-40">
          <div class="d-flex justify-content-between align-items-center mg-b-15">
              <h6 class="card-body-title tx-uppercase tx-14 tx-bold tx-inverse mg-b-0">Brand Update</h6>
              <a href="{{ route('brands') }}" class="btn btn-sm btn-info"><i class="fa fa-list mg-r-10"></i> All Brands</a>
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
            <form method="post" action="{{ url('update/brand/'.$brand->id) }}" enctype="multipart/form-data">
              @csrf
              <div class="form-group pd-b-20">
                  <label class="form-control-label">Brand Name: <span class="tx-danger">*</span></label>
                  <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $brand->brand_name }}" name="brand_name" required="">
              </div>
              <div class="form-group pd-b-20">
                  <label class="form-control-label">Brand Logo:</label>
                  <input type="file" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"  name="brand_logo">
              </div>
              <div class="form-group pd-b-20">
                  <label class="form-control-label">Old Logo:</label>
                  <div class="mg-t-10">
                     <img src="{{ URL::to($brand->brand_logo) }}" style="height: 70px; width: 90px; border-radius: 8px; box-shadow: 0 4px 10px rgba(0,0,0,0.1);">
                  </div>
                  <input type="hidden" name="old_logo" value="{{ $brand->brand_logo }}">
              </div>
              <div class="form-layout-footer text-center mg-t-30">
                <button type="submit" class="btn btn-info pd-x-20"><i class="fa fa-save mg-r-10"></i> Update Brand</button>
              </div>
            </form>
          </div><!-- form-layout -->
        </div><!-- card -->
      </div><!-- sl-pagebody -->



@endsection
