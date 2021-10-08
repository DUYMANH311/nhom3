@extends('Backend.layoutAdmin')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading " style="font-weight: bold;">
                Thêm danh mục phòng
            </header>
            <?php
            $message = Session::get('message');
            if ($message) {
                echo '<span style="color:red; text-align:center;width: 100%;font-weight: bold;">', $message, '</span>';
                Session::put('message', null);
            }
            ?>
            <div class="panel-body">
                <div class="position-center">
                    <form role="form" action="{{URL::to('/save-category-room')}}" method="POST" enctype="multipart/form-data">
                    {{csrf_field()}}
                       
                        <div class="form-group">
                            <label for="exampleInputEmail1">Tên danh mục</label>
                            <input type="text" name="category_room_name" class="form-control" required id="exampleInputEmail1" placeholder="Tên danh mục">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Số Giường</label>

                            <select name="sogiuong" class="form-control input-sm m-bot15"  >
                                <option value="1 giường đơn">1 Giường Đơn</option>
                                <option value="2 giường đơn">2 Giường Đơn</option>
                                <option value="1 giường đôi">1 Giường Đôi</option>
                                <option value="2 giường đôi">2 Giường Đôi</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Tỉ Suất sử dụng</label>
                            <select name="tisuat" class="form-control input-sm m-bot15"  >
                                <option value="1 người">1 Người</option>
                                <option value="2 người">2 Người</option>
                                <option value="3 người">3 Người</option>
                                <option value="4 người">4 Người</option>
                                <option value="5 người">5 Người</option>
                                <option value="6 người">6 Người</option>
                                <option value="7 người">7 Người</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Diện Tích Phòng</label>
                            <select name="dientich" class="form-control input-sm m-bot15">
                                <option value="1m">1 m<sup >2</sup></option>
                                <option value="2m">2 m<sup >2</sup></option>
                                <option value="3m">3 m<sup >2</sup></option>
                                <option value="4m">4 m<sup >2</sup></option>
                                <option value="5m">5 m<sup >2</sup></option>
                                <option value="6m">6 m<sup >2</sup></option>
                                <option value="7m">7 m<sup >2</sup></option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Hình ảnh phòng</label>
                            <input type="file" name="image" class="form-control" id="exampleInputEmail1">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Giá Phòng</label>
                            <input type="text" name="category_room_price" class="form-control" id="exampleInputEmail1"   placeholder="Giá phòng">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Mô tả phòng</label>
                            <textarea rows="10"  class="form-control "  name="room_desc" placeholder="Mô tả phòng" > </textarea>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputPassword1">Hiển thị</label>

                            <select name="room_status" class="form-control input-sm m-bot15">
                                <option value="0">Ẩn</option>
                                <option value="1">Hiện</option>
                            </select>
                        </div>
                        
                        <button type="submit" name="add_category_room" class="btn btn-info">Thêm danh mục</button>
                    </form>
                </div>
            </div>
        </section>
    </div>
</div>
<style>
    p.ck-placeholder {
    height: 127px;
}
</style>
<script>
var Title = $('<textarea />').html("Chris&apos; corner").text();
console.log(Title);
</script>
@endsection