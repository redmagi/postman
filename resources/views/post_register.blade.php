@include('header')
<div class="container">
    <div class="row">
        <div class="col col-md-8">
            <h1>บันทึกงานไปรษณีย์</h1>
            <form>
                <div class="form-group">
                    <label for="depository_date">วันที่รับฝาก</label>
                    <input class="form-control" id="depository_date" name="depository_date" type="date">
                </div>
                <div class="form-group">
                    <div class="btn-group btn-group-toggle" data-toggle="buttons">
                        <label class="btn btn-secondary active">
    <input type="radio" name="post_type_id" id="post_type_id1" autocomplete="off" value="1" checked>กล่อง
  </label>
                        <label class="btn btn-secondary">
    <input type="radio" name="post_type_id" id="post_type_id2" autocomplete="off" value="2">ของรับฝาก
  </label>
                        <label class="btn btn-secondary">
    <input type="radio" name="post_type_id" id="post_type_id3" autocomplete="off" value="3">จดหมาย
  </label>
                        <label class="btn btn-secondary">
    <input type="radio" name="post_type_id" id="post_type_id3" autocomplete="off" value="4">ซอง
  </label>
                    </div>
                </div>
                <div class="form-group">
                    <div class="btn-group btn-group-toggle" data-toggle="buttons">
                        <label class="btn btn-secondary active">
    <input type="radio" name="house_no" id="house_no1" autocomplete="off" value="194" checked>อาคาร D บ้านเลขที่ 194
  </label>
                        <label class="btn btn-secondary">
    <input type="radio" name="house_no" id="house_no2" autocomplete="off" value="196">อาคาร E บ้านเลขที่ 196
  </label>
                        <label class="btn btn-secondary">
    <input type="radio" name="house_no" id="house_no3" autocomplete="off" value="198">อาคาร F บ้านเลขที่ 198
  </label>
                        <label class="btn btn-secondary">
    <input type="radio" name="house_no" id="house_no3" autocomplete="off" value="200">อาคาร G บ้านเลขที่ 200
  </label>
                    </div>
                </div>
                <div class="form-group">
                    <label for="house_no_sub">ทับ</label>
                    <input class="form-control" id="house_no_sub" name="house_no_sub" type="number">
                </div>
                <div class="form-group">
                    <ul class="list-group">
                        <li class="list-group-item form-check form-check-inline"><input checked="checked" class="form-check-input" type="radio" name="people_id" id="people_id1" value="194">
                            <label class="form-check-label" for="people_id1">คุณพิชญ์ พันธุ์สนิท</label></li>
                        <li class="list-group-item form-check form-check-inline"><input class="form-check-input" type="radio" name="people_id" id="people_id2" value="196">
                            <label class="form-check-label" for="people_id2">mr. pitt phunsanit</label></li>
                        <li class="list-group-item form-check form-check-inline"><input class="form-check-input" type="radio" name="people_id" id="people_id3" value="198">
                            <label class="form-check-label" for="people_id3">mr. peace phunsanit</label></li>
                        <li class="list-group-item form-check form-check-inline"><input class="form-check-input" type="radio" name="people_id" id="people_id4" value="200">
                            <label class="form-check-label" for="people_id4">mr. pitch phunsanit</label></li>
                    </ul>
                </div>
                <div class="form-group">
                    <label for="depository_no">ลำดับที่เอกสาร </label>
                    <input class="form-control" id="depository_no" name="depository_no" type="number">
                </div>
                <div class="form-group">
                    <label for="post_no">หมายเลขทะเบียน</label>
                    <input class="form-control" id="post_no" name="post_no" type="number">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">บันทึก</button>
                </div>
            </form>
            <div id="app-2">
                <span v-bind:title="message">
  </span>
            </div>
        </div>
        <div class="col col-md-4" style="height: 700px; display:block; overflow-y: scroll;">

            <div class="card">
                <div class="card-body">
                    <h5 class="card-title"><span class="badge badge-secondary">1</span> พิชญ์ พันธุ์สนิท</h5>
                    <p class="card-text">194/1 อาคาร D<br>พัสดุ<br>px10011111</p>
                    <button type="button" class="btn btn-outline-warning btn-sm">แก้ไข</button>
                    <button type="button" class="btn btn-outline-danger btn-sm">ลบออก</button>
                </div>
            </div>

        </div>
    </div>
</div>
<script src="{{ asset('js/app.js') }}"></script>
<script>
    var app2 = new Vue({
        el: '#app-2',
        data: {
            message: 'You loaded this page on ' + new Date().toLocaleString()
        }
    })
</script>
@include('footer')