<html>
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    </head>
    <body>
        <div class="container mt-5">
            <div class='col-md-6'>
                <form id="addForm" method="post" action="{{route('user.store')}}" enctype="multipart/form-data">
                    @csrf
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Name</label>
                    <input type="text" name="name" class="form-control" id="exampleFormControlInput1" placeholder="Your Name">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Email</label>
                    <input type="email" name="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" name="password" class="form-label">Password</label>
                    <input type="password" name="password" class="form-control">
                </div>
                <div class='mb-3'>
                    <button class='btn btn-primary' type="submit" id="saveBtn">Save</button>
                </div>
                </form>
            </div>
        </div>
    </body>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            $("#addForm").on('submit', function(e){
                e.preventDefault();
                $("#saveBtn").html('Processing...').attr('disabled','disabled');
                var link = $("#addForm").attr('action');

                $.ajax({
                    url: link,
                    type: "POST",
                    data: new FormData(this),
                    processData: false,
                    contentType: false,
                    success: function(response){
                        $("#saveBtn").html('Save').removeAttr('disabled');
                        $('input').val('');
                    },
                    error: function(response){
                        $("#saveBtn").html('Save').removeAttr('disabled');
                        alert(response);
                    }

                });
            });
        });
    </script>
</html>
