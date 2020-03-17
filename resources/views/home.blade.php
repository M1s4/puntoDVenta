@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="modal-body mx-3">
        <div class="md-form mb-5 d-flex justify-content-center flex-column">          
          <img src="https://img.icons8.com/ios/50/000000/barcode-scanner-2.png" class="prefix "/>
          <input type="text" id="defaultForm-email" class="form-control validate form-control-sm w-50 mr-5 btn-search mx-auto font-weight-light"  >
          <button class="btn btn-default mx-auto w-25" style="background-color:rgba(76, 175, 80, 0.3)!important;" data-toggle="collapse" data-target="#collapseOne"><i class="fas fa-search mr-2"></i>Buscar</button>
        </div>
        
    </div>
</div>
@endsection
