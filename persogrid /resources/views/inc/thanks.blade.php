@extends('layout.app')
@section('content')
<style>
    .modal {
        background-color: transparent !important;
        text-align: center;
    }
    .modal-dialog {
        margin: 12vh auto 0px auto
    }
</style>
    <script type="text/javascript">
        $(window).on('load',function(){
            $('#myModal').modal('show');
        });



    </script>
    <div class="container" style="  transition-duration: 5s; " >
        <div class="modal fade" id="myModal" role="dialog" >
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header" style=" background-color: #FF6A00;border:none;">
                        <button type="button" class="close" data-dismiss="modal" style="color: black;"  onclick="location.href = '/login';">&times;</button>


                    </div>
                    <div class="modal-body text-center" style="width: 100%;height: 60%;background-color: #FF6A00;">
                        <p  style="color: white; font-size: 40px;padding-top: 17%">Thanks for registering.</p>
                    </div>
                    <div class="modal-footer"style=" background-color: #FF6A00;border:none;">
                        <button type="button" class="btn btn-default" data-dismiss="modal" onclick="location.href = '/login';">Close</button>
                    </div>
                </div>
            </div>


@endsection