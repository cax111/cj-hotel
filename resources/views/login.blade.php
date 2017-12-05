    @extends('master.indexAdmin')
    @section('content')

            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-offset-4 col-md-4">
                        <br/>
                            <form method="POST" action="{{ url('admin-cj/cek') }}">
                                {!! csrf_field() !!}
                                <div class="row">
                                    <div class="col-md-12">
                                        <label>Email</label>
                                        <input type="text" class="form-control" name="email">  
                                        <label>Password</label>
                                        <input type="password" class="form-control" name="password">
                                        <br/>    
                                        <input type="submit" class="form-control btn btn-primary" name="ok">  
                                    </div>
                                </div>
                            </form>
                        <br/>
                    </div>
                </div>
            </div>
    @endsection