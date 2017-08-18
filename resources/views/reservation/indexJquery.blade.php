@extends('layouts.app')

@section('title', 'Reservation')

@section('styles')
<!-- Sweet Alert -->
<link href="{{ URL::asset('plugins/sweetalert/sweetalert.css') }}" rel="stylesheet">
@stop

@section('content')

    @component('components.breadcrumb')
        @slot('title')
            Clients
        @endslot
        <li><a href="">Home</a></li>
        <li><a>Extra Pages</a></li>
        <li class="active"><strong>Clients</strong></li>
    @endcomponent
    <div class="wrapper wrapper-content animated fadeInRight" id="app">
        <div class="row">
            @if(count($clients) === 0))
            <p class="m-b-none">
                You have not created any OAuth clients.
            </p>
            @else
                <div>
                @foreach ($clients as $key => $value)
                        <div class="col-lg-4" >
                            <div class="contact-box">
                                <div class="">
                                    <h3><a href="" class="color-normal"><strong>{{$value->name}}</strong></a></h3>
                                    <p><i class="fa fa-calendar-check-o" ></i> {{$value->created_at}}</p>
                                    <address>
                                        <strong><i class="fa fa-key"></i> Secret Key: <code>{{$value->secret}}</code></strong><br>
                                        <strong><i class="fa fa-id-badge"></i> Client ID: {{$value->id}}</strong><br>
                                        <strong><i class="fa fa-link"></i> Redirect URL: {{$value->redirect}}</strong>
                                    </address>
                                </div>
                                <button type="button" class="btn btn-w-m btn-info" onclick="edit({{$value}})">Edit</button>
                                <button type="button" class="btn btn-w-m btn-danger" onclick="destroy({{$value}})">Delete</button>
                            </div>
                        </div>
                @endforeach
                </div>
            @endif

            <!-- Edit Client Modal -->
            <div class="modal inmodal" id="modal-edit-client" tabindex="-1" role="dialog"  aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content animated fadeIn">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                            <h4 class="modal-title">Edit Client</h4>
                            <small>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</small>
                        </div>
                        <div class="modal-body">
                            @if(count($errors) > 0)
                            <div class="alert alert-danger" >
                                <p><strong>Whoops!</strong> Something went wrong!</p>
                                <br>
                                <ul>
                                    @foreach ($errors->all() as $message)
                                        <li>
                                            {{$message}}
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                            @endif
                            <!-- Edit Client Form -->
                            <form class="form-horizontal" role="form">
                                <!-- Name -->
                                <div class="form-group">
                                    <label class="col-md-3 control-label">Name</label>

                                    <div class="col-md-7">
                                        <input id="edit-client-name" type="text" class="form-control"
                                                                    onkeyup="update()" >

                                        <span class="help-block">
                                            Something your users will recognize and trust.
                                        </span>
                                    </div>
                                </div>

                                <!-- Redirect URL -->
                                <div class="form-group">
                                    <label class="col-md-3 control-label">Redirect URL</label>

                                    <div class="col-md-7">
                                        <input id="edit-client-redirect" type="text" class="form-control" name="redirect"
                                                        onkeyup="update()" >

                                        <span class="help-block">
                                            Your application's authorization callback URL.
                                        </span>
                                    </div>
                                </div>
                            </form>
                        </div>

                        <!-- Modal Actions -->
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

                            <button type="button" class="btn btn-primary" onclick="update">
                                Save Changes
                            </button>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>

@endsection

@section('scripts')
<!-- Sweet alert -->
<script src="{{ URL::asset('plugins/sweetalert/sweetalert.min.js') }}"></script>
<script>
$('#modal-edit-client').on('shown.bs.modal', () => {
    $('#edit-client-name').focus();
});
function edit(client) {
    console.log(client);
    $('#edit-client-name').val(client.name);
    $('#edit-client-redirect').val(client.redirect);
    $('#modal-edit-client').modal('show');
}

function destroy(client) {
    swal({
         title: "Are you sure to delete this client?",
         text: "Submit to run request",
         type: "info",
         showCancelButton: true,
         closeOnConfirm: false,
         showLoaderOnConfirm: true,
     },
    function(){
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax('/oauth/clients/'+client.id, {
          type: 'DELETE',
          success: function (resp) {
              swal("Delete completed!");
          },
          error: function (resp) {
              console.log(resp);
          }
        });
    });

}
</script>
@endsection
