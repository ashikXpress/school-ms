<script src="{{asset('admin/assets/plugins/jquery/jquery.min.js')}}"></script>
<script src="{{asset('admin/assets/plugins/popper/popper.js')}}"></script>
<script src="{{asset('admin/assets/plugins/jquery-blockui/jquery.blockui.min.js')}}"></script>
<script src="{{asset('admin/assets/plugins/jquery-slimscroll/jquery.slimscroll.js')}}"></script>
<!-- bootstrap -->
<script src="{{asset('admin/assets/plugins/bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{asset('admin/assets/plugins/bootstrap-switch/js/bootstrap-switch.min.js')}}"></script>
<script src="{{asset('admin/assets/plugins/sparkline/jquery.sparkline.js')}}"></script>
<script src="{{asset('admin/assets/js/pages/sparkline/sparkline-data.js')}}"></script>
<script src="{{asset('admin/assets/plugins/bootstrap-datepicker/bootstrap-datepicker.js')}}"></script>
<script src="{{asset('admin/assets/plugins/bootstrap-datepicker/datepicker-init.js')}}"></script>
<script src="{{asset('admin/assets/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.js')}}" charset="UTF-8"></script>
<script src="{{asset('admin/assets/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker-init.js')}}" charset="UTF-8"></script>
<script src="{{asset('admin/assets/plugins/bootstrap-datetimepicker/js/bootstrap-datetimepicker.js')}}" charset="UTF-8"></script>
<script src="{{asset('admin/assets/plugins/bootstrap-datetimepicker/js/bootstrap-datetimepicker-init.js')}}"></script>
<script src="{{asset('admin/assets/plugins/bootstrap-inputmask/bootstrap-inputmask.min.js')}}"></script>



<!-- Common js-->
<script src="{{asset('admin/assets/js/app.js')}}"></script>
<script src="{{asset('admin/assets/js/layout.js')}}"></script>
<script src="{{asset('admin/assets/js/theme-color.js')}}"></script>
<!-- material -->
<script src="{{asset('admin/assets/plugins/material/material.min.js')}}"></script>
<!-- chart js -->

<!-- summernote -->
<script src="{{asset('admin/assets/plugins/summernote/summernote.js')}}"></script>
<script src="{{asset('admin/assets/js/pages/summernote/summernote-data.js')}}"></script>


<script src="{{asset('admin/assets/plugins/select2/js/select2.js')}}"></script>
<script src="{{asset('admin/assets/js/pages/select2/select2-init.js')}}"></script>
<script src="{{asset('admin/assets/plugins/jquery-tags-input/jquery-tags-input.js')}}"></script>
<script src="{{asset('admin/assets/plugins/jquery-tags-input/jquery-tags-input-init.js')}}"></script>
<!-- dropzone -->
<script src="{{asset('admin/assets/plugins/dropzone/dropzone.js')}}"></script>
<script src="{{asset('admin/assets/sweet2/sweetalert2.js')}}"></script>
<script src="{{asset('admin/assets/js/yearpicker.js')}}"></script>
<script src="{{asset('admin/assets/custom_date/datepicker.min.js')}}"></script>




<script>
    $(document).ready(function() {
        $("#classseleted,#bloodgroupselected,#employeeusertype,#designation,#studentattendanceselected,#teacherattendanceselected").select2();
        $("#section,#shift,#group,#class").select2();

    });
</script>
<script>
    function checkDelete(url) {
//        var check = confirm('Are you sure delete this?');
//        if(check){
//            return true;
//        }else {
//            return false;
//        }
        swal({
            title: 'Are you sure sir?',
            text: "You won't be able to revert this!",
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then(function () {
            window.location.href = url;
                           swal(
                               'Deleted!',
                               'Your file has been deleted.',
                               'success'
                           )
        })
    }
</script>

<script>
    $('.yearpicker').yearpicker();

    $( "#dpicker1" ).datepicker({
        format: 'dd-mm-yyyy',
        autoHide:true,
        date:'Date',
    });
    $( "#dpicker2" ).datepicker({
        format: 'dd-mm-yyyy',
        autoHide:true,
        date:'Date',
    });
    $( "#dpicker3" ).datepicker({
        format: 'dd-mm-yyyy',
        autoHide:true,
    });
    $( "#dpicker4" ).datepicker({
        format: 'dd-mm-yyyy',
        autoHide:true,
    });


</script>
