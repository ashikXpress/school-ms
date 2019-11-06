
@if(session()->has('success'))

    <div class="page-bar">
        <div class="page-title-breadcrumb">
            <h3 class="alert alert-success">{{session()->get('success')}}</h3>
        </div>
    </div>
@elseif(session()->has('error'))
    <div class="page-bar">
        <div class="page-title-breadcrumb">
            <h3 class="alert alert-danger">{{session()->get('error')}}</h3>
        </div>
    </div>

@endif
