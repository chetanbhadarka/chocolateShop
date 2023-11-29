@extends('client.master')
@section('content')
<style>
.zoom
{
 padding: 10px;
 background-color: white;
 transition: transform .2s; /* Animation */
 margin: 0 auto;
}
.zoom:hover
{
  transform: scale(0.8);
}
</style>
<section class="banner-bottom">
    <div class="container">
        <h3 class="tittle">{{$res[0]->cat_nm}}</h3>
        <div class="row inner-sec">
            <!--forloop -->
            @foreach ($res as $val)
            <div class="col-md-4">
                <div class="section_1_gallery_grid">
                    <!--<a title={{ $res[0]->p_desc }} href="{{asset('upload/'.$val->p_img)}}" >-->
                        <div class="section_1_gallery_grid1" style="border:solid 2px #f3ce00;">
                            <img src="{{asset('upload/'.$val->p_img)}}" alt=" " height="350px" width="320px" class="zoom"/>
                            <div class="proj_gallery_grid1_pos">
                                <h3>{{$val->p_nm}}</h3>
                                <p>{{$val->p_price}}</p>
                            </div>
                          </div>
                          <a href="/single/{{$val->p_id}}" class="btn btn-primary read-m" style="width:334px;">Buy Now</a></a>
                </div>
            </div>
            @endforeach
             <!--foorloop end -->
        </div>
    </div>
</section>

@endsection
