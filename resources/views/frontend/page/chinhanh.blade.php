@extends("master")
@section("content")
    <div class="inner-header">
        <div class="container">
            <div class="pull-left">
                <h6 class="inner-title">Contacts</h6>
            </div>
            <div class="pull-right">
                <div class="beta-breadcrumb font-large">
                    <a href="index">Home</a>/<span>Chi Nhánh</span>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
    <div class="container" style="width:90%;border:whitesmoke solid thin;margin:auto;border-top: transparent">
        <div id="content">
            <div class="row">
              @if(Session::has('flag'))
                        <div class="alert alert-{{Session::get('flag')}}">{{Session::get('message')}}
                        </div>
                    @endif
                    @if(Session::has('thongbao'))
                        <div class="alert alert-success" style="background:#00ced1;font-size:16px;color:black">
                            {{Session::get('thongbao')}}
                        </div>
                    @endif
                    @if(Session::has('loi'))
                        <div class="alert alert-danger" style="background:Red; color:black;font-size:16px;">
                            {{Session::get('loi')}}
                        </div>
                    @endif
                <h5>Chi nhánh tại: <?php echo $chi_nhanh->ten_chi_nhanh?></h5>
                <h6>Liên hệ: 0<?php echo $chi_nhanh->sdt?></h6>
                <div class="abs-fullwidth beta-map wow flipInX">
                    <iframe src="<?php echo $chi_nhanh->embed ?>  "></iframe>
                </div>

            </div>
        </div>

    </div>

@endsection
