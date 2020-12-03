<?php include 'header.php'; ?>
<main>
  <div class="search-content">
    <div class="search-fillter">
      <div class="search-button">
        <button type="button" name="button">
          <font class="word-fillter"><img src="asset/icons8-slider.png" alt=""> ตัวกรอง</font>
          <font class="arrow-fillter"><img src="asset/icons8-expand_arrow - right.png" alt=""></font>
        </button>
      </div>
      <div class="search-input">
        <input type="text" name="" value="พระราชบัญญัติ">
        <i class="fa fa-search"></i>
        <img src="asset/icons8-no 2.png" alt="" class="input-close">
      </div>
    </div>
  </div>
  <div class="search-rs-content">
    <div class="search-rs-table">
      <div class="search-rs-menu">
        <strong class="header">ตัวกรอก</strong>
        <div class="rs-group-menu active">
          <div class="rs-group-name">
            สารบัญ
          </div>
          <div class="rs-group-detail">
            <span class="tag">ก(10)</span>
            <span class="tag">ข(10)</span>
            <span class="tag">ค(10)</span>
            <span class="tag">ง(10)</span>
            <span class="tag">จ(10)</span>
            <span class="tag">ช(10)</span>
            <span class="tag">รัฐธรรมนูญแห่งราชอาณาจักรไทย พ.ศ.2560(10)</span>
            <br>
            <a href="#"><i class="fa fa-plus"></i> ดูเพิ่มเติม (2)</a>
          </div>
        </div>
        <div class="rs-group-menu active">
          <div class="rs-group-name">
            วันที่
          </div>
          <div class="rs-group-detail">
            <div class="row">
              <div class="col-md-12 col-6">
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                  <label class="form-check-label" for="exampleRadios1">
                    มีผลบังคับใช้
                  </label>
                </div>
              </div>
              <div class="col-md-12 col-6">
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                  <label class="form-check-label" for="exampleRadios2">
                    ออกเอกสาร
                  </label>
                </div><br>
              </div>
              <div class="col-md-12 col-6">
                <div class="date" style="width:100%">
                  <input type="text" name="" value="" placeholder="Form :">
                  <img src="asset/icons8-calendar.png" alt="" class="icon-date">
                </div>
              </div>
              <div class="col-md-12 col-6">
                <div class="date" style="width:100%">
                  <input type="text" name="" value="" placeholder="To :">
                  <img src="asset/icons8-calendar.png" alt="" class="icon-date">
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="rs-group-menu active">
          <div class="rs-group-name">
            สารบัญ
          </div>
          <div class="rs-group-detail">
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="defaultCheck1" checked>
              <label class="form-check-label" for="defaultCheck1">
                บังคับใช้
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="defaultCheck2" checked>
              <label class="form-check-label" for="defaultCheck1">
                ยกเลิก
              </label>
            </div>
          </div>
        </div>
      </div>
      <div class="search-rs-detail">
        <span class="search-rs-count">10</span><br>
        <?php for ($i=0; $i < 5; $i++) { ?>
          <div class="main-content">
            <div class="group-content">
              <span>ค</span>
            </div>
            <div class="header-content">
              <strong>
                <span class="focus">พระราชบัญญัติ</span> ยกเลิกประกาศของคณะปฏิวัติ (10 พ.ย. 62 - 1 พ.ย. 63)
                <span class="cancal">-ยกเลิก</span>
              </strong>
              <div class="header-group">
                <span class="focus">พระราชบัญญัติ</span>คณะสงฆ์ พ.ศ.2505
              </div>
            </div>
            <div class="share-content">
              <img src="asset/icons8-bookmark 2.png" alt="">
              <img src="asset/icons8-share.png" alt="">
            </div>
            <div class="detail-content">
              <span class="focus"> พระราชบัญญัติ</span>ภูมิพลอดุลยเดช ป.ร. ให้ไว้ ณ วันที่ ๗ กรกฎาคม พ.ศ. ๒๕๓๙ เป็นปีที่ ๕๑ ในรัชกาลปัจจุบัน
              พระบาทสมเด็จพระปรมินทรมหาภูมิพลอดุลยเดช มีพระบรมราชโองการโปรดเกล้าฯ ให้ประกาศว่า
              โดยที่เป็นการสมควรยกเลิกกฎหมายที่ให้ศาลพลเรือนทำหน้า....
              <span>
                <img src="asset/icons8-time.png" alt="">
                วันที่นำเข้า : 24 ก.ค. 2563
              </span>
            </div>
          </div>
        <?php } ?>
        <button type="button" class="btn-content-oth" name="button">ดูเพิ่มเติม...</button>
      </div>
    </div>
  </div>
</main>
<div id="btn-fix">
  <img src="asset/arrow.png" alt="" id="click-to-top">
</div>
<?php include 'footer.php'; ?>
<script type="text/javascript">
  $(".search-content .search-fillter .search-input input").on('input', function(event) {
    if ($(this).val() != "") {
      $(this).parents('.search-input').find('.input-close').addClass('active');
    } else {
      $(this).parents('.search-input').find('.input-close').removeClass('active');
    }
  });
  $(".search-content .search-fillter .search-input .input-close").click(function(event) {
    $(".search-content .search-fillter .search-input input").val('');
    $(this).parents('.search-input').find('.input-close').removeClass('active');
  });
  $(".search-button button").click(function(event) {

    if (!$(".search-button").hasClass('active')) {
      $(".search-button").addClass('active');
    } else {
      $(".search-button").removeClass('active');
    }

    if (!$(this).parents('main').find('.search-rs-content').hasClass('show-menu')) {
      $(this).parents('main').find('.search-rs-content').addClass('show-menu');
    } else {
      $(this).parents('main').find('.search-rs-content').removeClass('show-menu');
    }

  });
  $(".search-rs-content .search-rs-table .search-rs-menu .rs-group-menu .rs-group-detail span.tag").after().click(function(event) {
    $(this).remove();
  });
  $(".rs-group-name").click(function(event) {
    if (!$(this).parents('.rs-group-menu').hasClass('active')) {
      $(this).parents('.rs-group-menu').addClass('active');
    } else {
      $(this).parents('.rs-group-menu').removeClass('active');
    }
  });

</script>
