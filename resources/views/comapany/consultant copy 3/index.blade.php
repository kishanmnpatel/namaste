@extends('layouts.consultant')

@section('nav_title','Consultant')
@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Consultant</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/">Home</a></li>
              <li class="breadcrumb-item active">Consultant</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    @if(session()->has('success'))
    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-10">
            <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h5><i class="icon fas fa-check"></i> Success!</h5>
                {{ session()->get('success') }}
              </div>
        </div>
    </div>
    @endif
<!-- Main content -->

<div class="container">
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-md-11">
                    <h3 class="card-title">Bank Details</strong></h3>
                </div>
                <div class="col-md-1">
                    <button type="button" class="addBank btn btn-primary btn-sm">Add Bank</button>
                </div>
          </div>
        </div>
        <div class="card-body">
            <table id="bankTable" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Bank Name</th>
                        <th>IFSC</th>
                        <th>Acc. No.</th>
                    </thead>
                    
                    <tfoot>
                    <tr>
                        <th>Bank Name</th>
                        <th>IFSC</th>
                        <th>Acc. No.</th>
                    </tr>
                    </tfoot>
            </table>
        </div>
    </div>
</div>
</div>
<div id="addBankModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
     <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Add Bank</h4>
             <button type="button" class="close" data-dismiss="modal">&times;</button>
           </div>
           <div class="modal-body">
            <span id="form_result"></span>
            <form id="addBankForm" class="form-horizontal" enctype="multipart/form-data">
             @csrf
  
             <div class="form-group">
              <label class="control-label col-md-6" >Bank Name : </label>
              <div class="col-md-12">
               <input type="text" name="bankName" id="bankName" class="form-control" required/>
              </div>
             </div>

             <div class="form-group">
                <label class="control-label col-md-6" >Bank IFSC : </label>
                <div class="col-md-12">
                 <input type="text" name="ifsc" id="ifsc" class="form-control"/>
                </div>
               </div>

               <div class="form-group">
                <label class="control-label col-md-6" >Bank Acc. No. : </label>
                <div class="col-md-12">
                 <input type="text" name="accountNo" id="accountNo" class="form-control"/>
                </div>
               </div>
  
              <div class="form-group" align="center">
               <input type="submit" name="submit" id="addBankModalSubmitButton" class="btn btn-info" value="Submit" />
              </div>
            </form>
           </div>
        </div>
       </div>
   </div>
@endsection


@section('extra_js')
    
@endsection
