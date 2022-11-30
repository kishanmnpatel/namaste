@extends('layouts.consultant')

@section('nav_title','Create Companies')
@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Create Companies</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/consultant">Home</a></li>
              <li class="breadcrumb-item active">Create Companies</li>
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
    <form action="{{asset('sales/voucher')}}" method="POST">
        @csrf
        <div class="row">
            <div class="col-md-4">
              <div class="form-group">
            <label>બિલ નંબર:</label>
            <input type="text" class="form-control" placeholder="બિલ નંબર દાખલ કરો" name="voucherId" required autofocus>
          </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label>તારીખ:</label>
                <input type="date" class="form-control" placeholder="તારીખ દાખલ કરો" name="date" required>
              </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label>જાત:</label>
                   <select class="form-control" name="verity" required> 
                    <option value="">Select...</option>
                    
                  </select> 
                </div>
                </div>
          </div>
        <div class="row">
          <div class="col-md-3">
            <div class="form-group">
              <label>નામ:</label>
              <input type="text" class="form-control" placeholder="નામ દાખલ કરો" id="name" name="name" required>
              <input type="hidden" name="accountId" value="" id="accountId">
          </div>
          </div>
          <div class="col-md-4">
          <div class="form-group">
            <label>Address:</label>
            <input type="text" class="form-control" placeholder="Address દાખલ કરો" id="address" name="address" required>
          </div>
          </div>
          <div class="col-md-3">
            <div class="form-group">
              <label>મોબાઈલ:</label>
              <input type="text" class="form-control" placeholder="મોબાઈલ દાખલ કરો" id="mobile" name="mobile">
            </div>
            </div>
            <div class="col-md-2">
              <div class="form-group">
                <label>Select Account:</label>
                <button type="button" class="selectAccount btn btn-primary btn-sm form-control">Click</button>
              </div>
              </div>
        </div>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label>બેગ:</label>
                <input type="text" class="form-control" placeholder="બેગ દાખલ કરો" name="bag" required>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>Quantity:</label>
                <input type="text" class="form-control" placeholder="Quantity દાખલ કરો" name="quantity">
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label>ભાવ:</label>
                <input type="text" class="form-control" placeholder="ભાવ દાખલ કરો" name="rate" required>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label>ભાવ નો આધાર:</label>
                <select class="form-control" name="rateBase" required> 
                  <option value="">ભાવ નો આધાર પસંદ કરો</option>
                  <option value="kg">kg</option>
                  <option value="bag">bag</option>
                </select>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label>ટોટલ:</label>
                <input type="text" class="form-control" placeholder="ટોટલ દાખલ કરો" name="amount" required>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label>ટેક્સ:</label>
                <select class="form-control" name="tax" required> 
                  <option value="">ટેક્સ પસંદ કરો</option>
                  <option value="no">No Tax</option>
                  <option value="GST">GST</option>
                  <option value="IGST">IGST</option>
                </select>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label>ટેક્ષેબલ રકમ:</label>
                <input type="text" class="form-control" placeholder="ટેક્ષેબલ રકમ દાખલ કરો" name="taxableAmount" required>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label>કુલ ટોટલ:</label>
                <input type="text" class="form-control" placeholder="કુલ ટોટલ દાખલ કરો" name="totalAmount" required>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>રોકડ રકમ:</label>
                <input type="text" class="form-control" id="cash_amount" placeholder="રોકડ રકમ દાખલ કરો" name="cashAmount" >
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>ચેક રકમ:</label>
                <input type="text" class="form-control" placeholder="ચેક રકમ દાખલ કરો" name="chequeAmount">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label>બેંક નુ નામ:</label>
                <input type="text" class="form-control" placeholder="બેંક નુ નામ દાખલ કરો" name="bankName" >
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>રેફરન્સ નં.:</label>
                <input type="text" class="form-control" placeholder="રેફરન્સ નં. દાખલ કરો" name="referanceNo" >
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-3">
              <div class="form-group">
                <label>પાકા બિલ નં.:</label>
                <input type="text" class="form-control" placeholder="પાકા બિલ નં. દાખલ કરો" name="invoiceId" >
              </div>
            </div>
            <div class="col-md-3">
              <div class="form-group">
                <label>ભાડું:</label>
                <input type="text" class="form-control" placeholder="ભાડું દાખલ કરો" name="transport" >
              </div>
            </div>
            <div class="col-md-3">
              <div class="form-group">
                <label>વેચાણ નો પ્રકાર :</label>
                <select class="form-control" name="goodsType" required> 
                  <option value="">વેચાણ નો પ્રકાર પસંદ કરો</option>
                  <option value="Seed">Seed</option>
                  <option value="Export">Export</option>
                </select>
              </div>
            </div>
            <div class="col-md-3">
              <div class="form-group">
                <label>ગાડી નં.:</label>
                <input type="text" class="form-control" placeholder="ગાડી નં. દાખલ કરો" name="vehicleNo" >
              </div>
            </div>
          </div>
          <button type="submit" class="btn btn-large btn-primary">Save !!</button>
        </form>
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
