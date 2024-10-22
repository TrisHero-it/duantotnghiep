@extends('admin.layouts.app')


@section('content')

<div class="row custom-color">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h5>Form controls</h5>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <form>
                            <div class="mb-3">
                                <label class="form-label" for="exampleInputEmail1">Email
                                    address</label>
                                <input type="email" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" placeholder="Enter email">
                                <small id="emailHelp" class="form-text text-muted">We'll never
                                    share your email with anyone
                                    else.</small>
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="exampleInputPassword1">Password</label>
                                <input type="password" class="form-control" id="exampleInputPassword1"
                                    placeholder="Password">
                            </div>
                            <div class="mb-3 form-check">
                                <input type="checkbox" class="form-check-input input-primary" id="exampleCheck1">
                                <label for="exampleCheck1">Check me out</label>
                            </div>
                            <button type="submit" class="btn btn-primary mb-4">Submit</button>
                        </form>
                    </div>
                    <div class="col-md-6">
                        <form>
                            <div class="mb-3">
                                <label class="form-label">Text</label>
                                <input type="text" class="form-control" placeholder="Text">
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="exampleFormControlSelect1">Example select</label>
                                <select class="form-control" id="exampleFormControlSelect1">
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="exampleFormControlTextarea1">Example textarea</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
 
    <!-- [ form-element ] end -->
</div>

@endsection