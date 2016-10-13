<div id="fc_create" data-toggle="modal" data-target="#CalenderModalNew"></div>
<div id="CalenderModalNew" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title" id="myModalLabel">Thêm mới camera</h4>
            </div>
            <div class="modal-body">
                <div id="testmodal" style="width: 75%;float: left;">
                    <form id="antoform" class="form-horizontal calender" role="form">
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Tên đầu ghi</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="title_encoder" name="title_encoder">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Tên camera</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="title_camera" name="title_camera">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Giao thức</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="protocol" name="protocol">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Kênh</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="channel" name="channel">
                            </div>
                        </div> <div class="form-group">
                            <label class="col-sm-3 control-label">Ip Address</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="ip_address" name="ip_address">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Port</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="port" name="port">
                            </div>
                        </div> <div class="form-group">
                            <label class="col-sm-3 control-label">Tên người dùng</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="username" name="username">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Mật khẩu</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="password" name="password">
                            </div>
                        </div>
                    </form>

                </div>
                <div id="cammodal" style="width: 25%; float: left;">
                    <img src="../images/picture.jpg">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" id="save_and_create" class="btn btn-primary antosubmit">Lưu và thêm mới</button>
                <button type="button" class="btn btn-primary antosubmit">Lưu và đóng</button>
                <button type="button" class="btn btn-default antoclose" data-dismiss="modal">Đóng</button>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function() {
        $('#save_and_create').on('click', function() {
            var title_encoder = $('#title_encoder').val();
            var title_camera = $('#title_camera').val();
            var protocol = $('#protocol').val();
            var channel = $('#channel').val();
            var ip_address = $('#ip_address').val();
            var port = $('#port').val();
            var username = $('#username').val();
            var password = $('#password').val();
            $.ajax({
<!--                --><?php //$url =   Yii::$app->urlManager->createUrl(["/site/create"]);?>
                url: '/site/create',
                type: "post",
                data: title_encoder ,
                success: function (response) {
                    // you will get response from your php page (what you echo or print)

                },


            });
        });
    });
</script>