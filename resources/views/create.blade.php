@extends('layouts.base')
@section('title', 'Document')
@section('head')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
@endsection

@section('body')
<div style="margin-top: 50px;" class="row mr-md-20 mx-auto">
    <div class="col-md-8 offset-md-2 mx-auto">

        <form method="POST" action="http://127.0.0.1:5000/new" class="text-white needs-validation" novalidate>
            <div class="form-row">
                <div class="col-md-12 mb-3">
                    <label for="validationTooltip01">Owner</label>
                    <input type="text" class="form-control" id="validationTooltip01" placeholder="First name" value="Mark" required>
                </div>
                <div class="col-md-12 mb-3">
                    <label for="validationTooltip02">Last name</label>
                    <input type="text" class="form-control" id="validationTooltip02" placeholder="Last name" value="Otto" required>
                </div>
                <div class="col-md-4 mb-3">
                    <label for="validationTooltipUsername">CPU</label>
                    <div class="input-group">
                        <input type="text" class="form-control" id="validationTooltipUsername" placeholder="CPU" aria-describedby="validationTooltipUsernamePrepend" required>
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="validationTooltipUsernamePrepend">%</span>
                            </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <label for="validationTooltipUsername">RAM</label>
                    <div class="input-group">
                        <input type="text" class="form-control" id="validationTooltipUsername" placeholder="RAM" aria-describedby="validationTooltipUsernamePrepend" required>
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="validationTooltipUsernamePrepend">MB</span>
                            </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <label for="validationTooltipUsername">DISK</label>
                    <div class="input-group">
                        <input type="text" class="form-control" id="validationTooltipUsername" placeholder="DISK" aria-describedby="validationTooltipUsernamePrepend" required>
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="validationTooltipUsernamePrepend">MB</span>
                            </div>
                    </div>
                </div>
            </div>
            <div class="form-row">
                <div class="col-md-4 mb-3">
                    <label for="validationTooltip03">City</label>
                    <input type="text" class="form-control" id="validationTooltip03" placeholder="City" required>
                </div>
                <div class="col-md-4 mb-3">
                    <label for="validationTooltip04">State</label>
                    <input type="text" class="form-control" id="validationTooltip04" placeholder="State" required>
                </div>
                <div class="col-md-4 mb-3">
                    <label for="validationTooltip05">Zip</label>
                    <input type="text" class="form-control" id="validationTooltip05" placeholder="Zip" required>
                </div>
            </div>
            <button class="btn btn-primary" type="submit">Submit form</button>
        </form>

    </div>
</div>

@endsection
