@extends('layouts.landing-base')

@section('content')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.14.0-beta2/css/bootstrap-select.min.css" integrity="sha512-mR/b5Y7FRsKqrYZou7uysnOdCIJib/7r5QeJMFvLNHNhtye3xJp1TdJVPLtetkukFn227nKpXD9OjUc09lx97Q==" crossorigin="anonymous" referrerpolicy="no-referrer" />


<div class="card mt-6">
    <div class="card-body">
        <h3 style="color: #79A368">Please fill up the form</h3>

        <form action="/purchase-create" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row mx-2 mb-2 mt-5">
                <div class="col-4 mb-2 text-end">
                    <label class="col-form-label text-black">Items: <span style="color: #FF0000">&#42;</span></label>
                </div>
                <div class="col-5 mb-2">
                    <select class="form-control" aria-label="Default select example" name="items[]" multiple="" required>
                        <option disabled>PLEASE SELECT</option>
                        <option value="pencil">PENCIL (RM 12)</option>
                        <option value="book">BOOK (RM 15)</option>
                        <option value="ruler">RULER (RM 2)</option>
                    </select>
                </div>
            </div>
            <div class="row mx-2 mb-2 mt-2">
                <div class="row mx-2 mb-2 mt-2">
                    <div class="col-4 mb-2 text-end">
                        <label class="col-form-label text-black">Name: <span style="color: #FF0000">&#42;</span></label>
                    </div>
                    <div class="col-5 mb-2">
                        <input placeholder="Example: Ahmad Bin Abu" class="form-control textbox-n" name="name" type="text" style="text-transform: uppercase;" required/>
                    </div>
                </div>
            </div>
            <div class="row mx-2 mb-2 mt-2">
                <div class="row mx-2 mb-2 mt-2">
                    <div class="col-4 mb-2 text-end">
                        <label class="col-form-label text-black">Email: <span style="color: #FF0000">&#42;</span></label>
                    </div>
                    <div class="col-5 mb-2">
                        <input placeholder="Example: email@gmail.com" class="form-control textbox-n" name="email" type="text" style="text-transform: uppercase;" required/>
                    </div>
                </div>
            </div>
            <div class="row mx-2 mb-2 mt-2">
                <div class="row mx-2 mb-2 mt-2">
                    <div class="col-4 mb-2 text-end">
                        <label class="col-form-label text-black">Mobile Number: <span style="color: #FF0000">&#42;</span></label>
                    </div>
                    <div class="col-5 mb-2">
                        <input placeholder="Example: 0123456789" class="form-control textbox-n" name="mobile_number" type="number" style="text-transform: uppercase;" required/>
                    </div>
                </div>
            </div>
            <div class="row mx-2 mb-2 mt-2 text-end">
                <div class="col-10 mb-2 text-end">
                    <button class="btn btn-primary" type="submit">Submit</button>
                </div>
                </form>
            </div>

            
            <div class="row mx-2 mb-2 mt-2 text-end">
                <div class="col-10 mb-2 text-end">
                    <a href="/purchase-show" target="_blank"><button class="btn btn-primary">Details of Purchase</button></a>
                </div>
            </div>

    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('select').selectpicker();
        });
    </script>
</div>
@endsection