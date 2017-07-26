@extends('layouts.app')

@section('title', 'Reservation')

@section('styles')
<!-- iCheck -->
<link href="{{ URL::asset('plugins/iCheck/custom.css') }}" rel="stylesheet">
<!-- Fullcalendar -->
<link href="{{ URL::asset('plugins/fullcalendar-3.4.0/fullcalendar.min.css') }}" rel="stylesheet">
<link href="{{ URL::asset('plugins/fullcalendar-3.4.0/fullcalendar.print.min.css')}}" rel='stylesheet' media='print'>
@stop

@section('content')

    @component('components.breadcrumb')
        @slot('title')
            Reservation
        @endslot
        <li><a href="">Home</a></li>
        <li><a>Extra Pages</a></li>
        <li class="active"><strong>Reservation</strong></li>
    @endcomponent

    <div class="wrapper wrapper-content" id="app">
        <div class="row animated fadeInDown">
            <div class="col-lg-3">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>Draggable Events</h5>
                        <div class="ibox-tools">
                            <a class="collapse-link">
                                <i class="fa fa-chevron-up"></i>
                            </a>
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                <i class="fa fa-wrench"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-user">
                                <li><a href="#">Config option 1</a>
                                </li>
                                <li><a href="#">Config option 2</a>
                                </li>
                            </ul>
                            <a class="close-link">
                                <i class="fa fa-times"></i>
                            </a>
                        </div>
                    </div>
                    <div class="ibox-content">
                        <div id='external-events'>
                            <p>Drag a event and drop into callendar.</p>
                            <div class='external-event navy-bg'>Go to shop and buy some products.</div>
                            <div class='external-event navy-bg'>Check the new CI from Corporation.</div>
                            <div class='external-event navy-bg'>Send documents to John.</div>
                            <div class='external-event navy-bg'>Phone to Sandra.</div>
                            <div class='external-event navy-bg'>Chat with Michael.</div>
                            <p class="m-t">
                                <input type='checkbox' id='drop-remove' class="i-checks" checked /> <label for='drop-remove'>remove after drop</label>
                            </p>
                        </div>
                    </div>
                </div>


                <div class="ibox">
                    <div class="ibox-content">
                        <span class="text-muted small pull-right">267 Members</span>
                        <h2>Members</h2>
                        <p>
                            All clients need to be verified before you can send email and set a project.
                        </p>
                        <div class="input-group">
                            <input type="text" placeholder="Search client " class="input form-control">
                            <span class="input-group-btn">
                                    <button type="button" class="btn btn btn-primary"> <i class="fa fa-search"></i> Search</button>
                            </span>
                        </div>
                        <div class="clients-list height300">
                            <div class="full-height-scroll">
                                <div class="table-responsive">
                                    <table class="table table-striped table-hover">
                                        <tbody>
                                        <tr>
                                            <td class="client-avatar"><img alt="image" src="img/a2.jpg"> </td>
                                            <td><a data-toggle="tab" href="#contact-1" class="client-link">Anthony Jackson</a></td>
                                            <td> Tellus Institute</td>
                                            <td class="contact-type"><i class="fa fa-envelope"> </i></td>
                                            <td> gravida@rbisit.com</td>
                                            <td class="client-status"><span class="label label-primary">Active</span></td>
                                        </tr>
                                        <tr>
                                            <td class="client-avatar"><img alt="image" src="img/a3.jpg"> </td>
                                            <td><a data-toggle="tab" href="#contact-2" class="client-link">Rooney Lindsay</a></td>
                                            <td>Proin Limited</td>
                                            <td class="contact-type"><i class="fa fa-envelope"> </i></td>
                                            <td> rooney@proin.com</td>
                                            <td class="client-status"><span class="label label-primary">Active</span></td>
                                        </tr>
                                        <tr>
                                            <td class="client-avatar"><img alt="image" src="img/a4.jpg"> </td>
                                            <td><a data-toggle="tab" href="#contact-3" class="client-link">Lionel Mcmillan</a></td>
                                            <td>Et Industries</td>
                                            <td class="contact-type"><i class="fa fa-phone"> </i></td>
                                            <td> +432 955 908</td>
                                            <td class="client-status"></td>
                                        </tr>
                                        <tr>
                                            <td class="client-avatar"><a href=""><img alt="image" src="img/a5.jpg"></a> </td>
                                            <td><a data-toggle="tab" href="#contact-4" class="client-link">Edan Randall</a></td>
                                            <td>Integer Sem Corp.</td>
                                            <td class="contact-type"><i class="fa fa-phone"> </i></td>
                                            <td> +422 600 213</td>
                                            <td class="client-status"><span class="label label-warning">Waiting</span></td>
                                        </tr>
                                        <tr>
                                            <td class="client-avatar"><a href=""><img alt="image" src="img/a6.jpg"></a> </td>
                                            <td><a data-toggle="tab" href="#contact-2" class="client-link">Jasper Carson</a></td>
                                            <td>Mone Industries</td>
                                            <td class="contact-type"><i class="fa fa-phone"> </i></td>
                                            <td> +400 468 921</td>
                                            <td class="client-status"></td>
                                        </tr>
                                        <tr>
                                            <td class="client-avatar"><a href=""><img alt="image" src="img/a7.jpg"></a> </td>
                                            <td><a data-toggle="tab" href="#contact-3" class="client-link">Reuben Pacheco</a></td>
                                            <td>Magna Associates</td>
                                            <td class="contact-type"><i class="fa fa-envelope"> </i></td>
                                            <td> pacheco@manga.com</td>
                                            <td class="client-status"><span class="label label-info">Phoned</span></td>
                                        </tr>
                                        <tr>
                                            <td class="client-avatar"><a href=""><img alt="image" src="img/a1.jpg"></a> </td>
                                            <td><a data-toggle="tab" href="#contact-1" class="client-link">Simon Carson</a></td>
                                            <td>Erat Corp.</td>
                                            <td class="contact-type"><i class="fa fa-envelope"> </i></td>
                                            <td> Simon@erta.com</td>
                                            <td class="client-status"><span class="label label-primary">Active</span></td>
                                        </tr>
                                        <tr>
                                            <td class="client-avatar"><a href=""><img alt="image" src="img/a3.jpg"></a> </td>
                                            <td><a data-toggle="tab" href="#contact-2" class="client-link">Rooney Lindsay</a></td>
                                            <td>Proin Limited</td>
                                            <td class="contact-type"><i class="fa fa-envelope"> </i></td>
                                            <td> rooney@proin.com</td>
                                            <td class="client-status"><span class="label label-warning">Waiting</span></td>
                                        </tr>
                                        <tr>
                                            <td class="client-avatar"><a href=""><img alt="image" src="img/a4.jpg"></a> </td>
                                            <td><a data-toggle="tab" href="#contact-3" class="client-link">Lionel Mcmillan</a></td>
                                            <td>Et Industries</td>
                                            <td class="contact-type"><i class="fa fa-phone"> </i></td>
                                            <td> +432 955 908</td>
                                            <td class="client-status"></td>
                                        </tr>
                                        <tr>
                                            <td class="client-avatar"><a href=""><img alt="image" src="img/a5.jpg"></a> </td>
                                            <td><a data-toggle="tab" href="#contact-4" class="client-link">Edan Randall</a></td>
                                            <td>Integer Sem Corp.</td>
                                            <td class="contact-type"><i class="fa fa-phone"> </i></td>
                                            <td> +422 600 213</td>
                                            <td class="client-status"></td>
                                        </tr>
                                        <tr>
                                            <td class="client-avatar"><a href=""><img alt="image" src="img/a2.jpg"></a> </td>
                                            <td><a data-toggle="tab" href="#contact-1" class="client-link">Anthony Jackson</a></td>
                                            <td> Tellus Institute</td>
                                            <td class="contact-type"><i class="fa fa-envelope"> </i></td>
                                            <td> gravida@rbisit.com</td>
                                            <td class="client-status"><span class="label label-danger">Deleted</span></td>
                                        </tr>
                                        <tr>
                                            <td class="client-avatar"><a href=""><img alt="image" src="img/a7.jpg"></a> </td>
                                            <td><a data-toggle="tab" href="#contact-2" class="client-link">Reuben Pacheco</a></td>
                                            <td>Magna Associates</td>
                                            <td class="contact-type"><i class="fa fa-envelope"> </i></td>
                                            <td> pacheco@manga.com</td>
                                            <td class="client-status"><span class="label label-primary">Active</span></td>
                                        </tr>
                                        <tr>
                                            <td class="client-avatar"><a href=""><img alt="image" src="img/a5.jpg"></a> </td>
                                            <td><a data-toggle="tab" href="#contact-3"class="client-link">Edan Randall</a></td>
                                            <td>Integer Sem Corp.</td>
                                            <td class="contact-type"><i class="fa fa-phone"> </i></td>
                                            <td> +422 600 213</td>
                                            <td class="client-status"><span class="label label-info">Phoned</span></td>
                                        </tr>
                                        <tr>
                                            <td class="client-avatar"><a href=""><img alt="image" src="img/a6.jpg"></a> </td>
                                            <td><a data-toggle="tab" href="#contact-4" class="client-link">Jasper Carson</a></td>
                                            <td>Mone Industries</td>
                                            <td class="contact-type"><i class="fa fa-phone"> </i></td>
                                            <td> +400 468 921</td>
                                            <td class="client-status"><span class="label label-primary">Active</span></td>
                                        </tr>
                                        <tr>
                                            <td class="client-avatar"><a href=""><img alt="image" src="img/a7.jpg"></a> </td>
                                            <td><a data-toggle="tab" href="#contact-2" class="client-link">Reuben Pacheco</a></td>
                                            <td>Magna Associates</td>
                                            <td class="contact-type"><i class="fa fa-envelope"> </i></td>
                                            <td> pacheco@manga.com</td>
                                            <td class="client-status"><span class="label label-primary">Active</span></td>
                                        </tr>
                                        <tr>
                                            <td class="client-avatar"><a href=""><img alt="image" src="img/a1.jpg"></a> </td>
                                            <td><a data-toggle="tab" href="#contact-1" class="client-link">Simon Carson</a></td>
                                            <td>Erat Corp.</td>
                                            <td class="contact-type"><i class="fa fa-envelope"> </i></td>
                                            <td> Simon@erta.com</td>
                                            <td class="client-status"></td>
                                        </tr>
                                        <tr>
                                            <td class="client-avatar"><a href=""><img alt="image" src="img/a3.jpg"></a> </td>
                                            <td><a data-toggle="tab" href="#contact-3" class="client-link">Rooney Lindsay</a></td>
                                            <td>Proin Limited</td>
                                            <td class="contact-type"><i class="fa fa-envelope"> </i></td>
                                            <td> rooney@proin.com</td>
                                            <td class="client-status"></td>
                                        </tr>
                                        <tr>
                                            <td class="client-avatar"><a href=""><img alt="image" src="img/a4.jpg"></a> </td>
                                            <td><a data-toggle="tab" href="#contact-4" class="client-link">Lionel Mcmillan</a></td>
                                            <td>Et Industries</td>
                                            <td class="contact-type"><i class="fa fa-phone"> </i></td>
                                            <td> +432 955 908</td>
                                            <td class="client-status"><span class="label label-primary">Active</span></td>
                                        </tr>
                                        <tr>
                                            <td class="client-avatar"><a href=""><img alt="image" src="img/a5.jpg"></a> </td>
                                            <td><a data-toggle="tab" href="#contact-1" class="client-link">Edan Randall</a></td>
                                            <td>Integer Sem Corp.</td>
                                            <td class="contact-type"><i class="fa fa-phone"> </i></td>
                                            <td> +422 600 213</td>
                                            <td class="client-status"><span class="label label-info">Phoned</span></td>
                                        </tr>
                                        <tr>
                                            <td class="client-avatar"><a href=""><img alt="image" src="img/a2.jpg"></a> </td>
                                            <td><a data-toggle="tab" href="#contact-2" class="client-link">Anthony Jackson</a></td>
                                            <td> Tellus Institute</td>
                                            <td class="contact-type"><i class="fa fa-envelope"> </i></td>
                                            <td> gravida@rbisit.com</td>
                                            <td class="client-status"><span class="label label-warning">Waiting</span></td>
                                        </tr>
                                        <tr>
                                            <td class="client-avatar"><a href=""><img alt="image" src="img/a7.jpg"></a> </td>
                                            <td><a data-toggle="tab" href="#contact-4" class="client-link">Reuben Pacheco</a></td>
                                            <td>Magna Associates</td>
                                            <td class="contact-type"><i class="fa fa-envelope"> </i></td>
                                            <td> pacheco@manga.com</td>
                                            <td class="client-status"></td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>






                <div class="ibox float-e-margins">
                    <div class="ibox-content">
                        <h2>FullCalendar</h2> is a jQuery plugin that provides a full-sized, drag & drop calendar like the one below. It uses AJAX to fetch events on-the-fly for each month and is
                        easily configured to use your own feed format (an extension is provided for Google Calendar).
                        <p>
                            <a href="http://arshaw.com/fullcalendar/" target="_blank">FullCalendar documentation</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-9">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>Striped Table </h5>
                        <div class="ibox-tools">
                            <a class="collapse-link">
                                <i class="fa fa-chevron-up"></i>
                            </a>
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                <i class="fa fa-wrench"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-user">
                                <li><a href="#">Config option 1</a>
                                </li>
                                <li><a href="#">Config option 2</a>
                                </li>
                            </ul>
                            <a class="close-link">
                                <i class="fa fa-times"></i>
                            </a>
                        </div>
                    </div>
                    <div class="ibox-content">
                        <div id="calendar"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('scripts')
<!-- Fullcalendar -->
<script src="{{ URL::asset('plugins/fullcalendar/moment.min.js') }}"></script>
<!-- jQuery UI  -->
<script src="{{ URL::asset('plugins/jquery-ui/jquery-ui.min.js') }}"></script>
<!-- iCheck -->
<script src="{{ URL::asset('plugins/iCheck/icheck.min.js') }}"></script>
<!-- Full Calendar -->
<script src="{{ URL::asset('plugins/fullcalendar-3.4.0/fullcalendar.min.js') }}"></script>
<script src="{{ URL::asset('plugins/fullcalendar-3.4.0/locale-all.js') }}"></script>

<script>
$(document).ready(function() {


    var userLang = navigator.language || navigator.userLanguage;
    if(userLang == '' || userLang == null){
        userLang = 'en';
    }
    //alert ("The language is: " + userLang);

        $('.i-checks').iCheck({
            checkboxClass: 'icheckbox_square-green',
            radioClass: 'iradio_square-green'
        });

    /* initialize the external events
     -----------------------------------------------------------------*/


    $('#external-events div.external-event').each(function() {

        // store data so the calendar knows to render an event upon drop
        $(this).data('event', {
            title: $.trim($(this).text()), // use the element's text as the event title
            stick: true // maintain when user navigates (see docs on the renderEvent method)
        });

        // make the event draggable using jQuery UI
        $(this).draggable({
            zIndex: 1111999,
            revert: true,      // will cause the event to go back to its
            revertDuration: 0  //  original position after the drag
        });

    });


    /* initialize the calendar
     -----------------------------------------------------------------*/
    var date = new Date();
    var d = date.getDate();
    var m = date.getMonth();
    var y = date.getFullYear();

    $('#calendar').fullCalendar({
        locale: userLang,
        header: {
            left: 'prev,next today',
            center: 'title',
            right: 'month,agendaWeek,agendaDay,listDay'
        },
        editable: true,
        droppable: true, // this allows things to be dropped onto the calendar
        drop: function() {
            // is the "remove after drop" checkbox checked?
            if ($('#drop-remove').is(':checked')) {
                // if so, remove the element from the "Draggable Events" list
                $(this).remove();
            }
        },
        events: [
            {
                title: 'All Day Event',
                start: new Date(y, m, 1)
            },
            {
                title: 'Long Event',
                start: new Date(y, m, d-5),
                end: new Date(y, m, d-2)
            },
            {
                id: 999,
                title: 'Repeating Event',
                start: new Date(y, m, d-3, 16, 0),
                allDay: false
            },
            {
                id: 999,
                title: 'Repeating Event',
                start: new Date(y, m, d+4, 16, 0),
                allDay: false
            },
            {
                title: 'Meeting',
                start: new Date(y, m, d, 10, 30),
                allDay: false
            },
            {
                title: 'Lunch',
                start: new Date(y, m, d, 12, 0),
                end: new Date(y, m, d, 14, 0),
                allDay: false
            },
            {
                title: 'Birthday Party',
                start: new Date(y, m, d+1, 19, 0),
                end: new Date(y, m, d+1, 22, 30),
                allDay: false
            },
            {
                title: 'Click for Google',
                start: new Date(y, m, 28),
                end: new Date(y, m, 29),
                url: 'http://google.com/'
            }
        ]
    });


});


</script>


@endsection
